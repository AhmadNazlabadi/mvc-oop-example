<?php

namespace Core;
class Router
{
    protected array $routes = [];
    protected array $params = [];
    protected string $namespace = 'App\Controllers\\';

    public function setRoute($route, $params)
    {
        $route = preg_replace('/^\//', '', $route);
        $route = preg_replace('/\//', '\\/', $route);
        $route = preg_replace('/\{([a-z]+)\}/', '(?<\1>[a-z0-9-]+)', $route);
        $route = '/^' . $route . '\/?$/i';
        if (is_string($params)) {
            list($allParams['controller'], $allParams['method']) = explode('->', $params);
        }
        if (is_array($params)) {
            list($allParams['controller'], $allParams['method']) = explode('->', $params['uses']);
            unset($params['uses']);
            $allParams = array_merge($allParams, $params);
        }
        $this->routes[$route] = $allParams;
    }

    public function matchRoute(string $url): string
    {
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params['params'][$key] = $match;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }
    public function dispatch($url)
    {
        $url = $this->removeQueryStringFromRoute($url);
        if ($this->matchRoute($url)) {
            $controller = $this->params['controller'];
            $controller = $this->getNameSpace() . $controller;
            if (class_exists($controller)) {
                $controller_OBJ = new $controller();
                $method = $this->params['method'];
                if (is_callable([$controller_OBJ, $method])) {
                    $this->params['params'] = isset($this->params['params']) ? $this->params['params'] : [];
                        echo call_user_func_array([$controller_OBJ, $method], $this->params['params']);

                } else {
                    echo 'Method In Controller Does Not Exists';
                }
            } else {
                echo 'This Controller Does Not Exists 404';
            }
        } else {
            echo 'route not found!!!';
        }

    }

    protected function getNameSpace()
    {
        $namespace = $this->namespace;
        if (array_key_exists('namespace', $this->params)) {
            $namespace .= $this->params['namespace'] . '\\';
        }
        return $namespace;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getParams()
    {
        return $this->params;
    }

    protected function removeQueryStringFromRoute($url)
    {
        if ($url != '') {
            $seprate = explode('&', $url, 2);
            if (strpos($seprate[0], '=') === false) {
                $url = $seprate[0];
            } else {
                $url = '';
            }
            return $url;
        }
        return false;
    }
}