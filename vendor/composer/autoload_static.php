<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1808f7bdfbaa36e879edec441f9e2fe3
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Database\\' => 9,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Database',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1808f7bdfbaa36e879edec441f9e2fe3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1808f7bdfbaa36e879edec441f9e2fe3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
