<?php

namespace App\Config;

class Router 
{
    private static array $routes = [];

    public static function get(string $url , array $action)
    {
        self::$routes[$url] = $action;
    }

    public static function post(string $url, array $action)
    {
        self::$routes[$url] = $action;
    }

public static function dispatch(string $requestUrl)
{
    $path = parse_url($requestUrl, PHP_URL_PATH);
    $path = preg_replace('/^\/TexLog/', '', $path);
    if (empty($path)) $path = '/';

    foreach (self::$routes as $route => $action) {
        $pattern = "#^" . preg_replace('/\/\{[a-zA-Z0-9_]+\}/', '/([a-zA-Z0-9_]+)', $route) . "$#";
        
        if (preg_match($pattern, $path, $matches)) {
            array_shift($matches); 
            $controllerClass = $action[0];
            $methodName = $action[1];
            
            $controller = new $controllerClass();
            call_user_func_array([$controller, $methodName], $matches);
            return;
        }
    }

    header("HTTP/1.0 404 Not Found");
    echo "صفحه مورد نظر در وبلاگ Texlog یافت نشد!";
}

}