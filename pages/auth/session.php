<?php
session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    // 'domain' => '.zooarcadia.com', (en prod)
    'httponly' => true
]);

session_start();
