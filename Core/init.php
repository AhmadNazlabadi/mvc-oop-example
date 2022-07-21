<?php
session_start();
$GLOBALS['config'] = [
    'mysql' => [
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' =>'',
        'db' => 'real-estate'
    ],
  'session' =>[
      'session_name' => 'user'
  ],
    'cookie' =>[
        'cookie_name' => 'test',
        'cookie_expiry' =>30000
    ]
];