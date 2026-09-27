<?php

class Route
{
    private static array $routes = [];

    public static function get(string $url, string $controller, string $action, array $middlewares = []): void
    {
        self::$routes[] = [
            "url" => $url,
            "method" => "GET",
            "controller" => $controller,
            "action" => $action,
            "middlewares" => $middlewares,
        ];
    }

    public static function post(string $url, string $controller, string $action, array $middlewares = []): void
    {
        self::$routes[] = [
            "url" => $url,
            "method" => "POST",
            "controller" => $controller,
            "action" => $action,
            "middlewares" => $middlewares,

        ];
    }

    public static function routes(): array
    {
        return self::$routes;
    }

    public static function dispatch()
    {
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $url = rtrim($url, '/');

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            
            $args = self::matchRoute(BASE_URL . $route['url'], $url);

            if ($args !== false) {

                if ($method !== $route['method']) {
                    http_response_code(405);
                    echo "ERROR 405";
                }

                self::handelMiddlewares($route['middlewares']);

                $obj = new $route['controller']();

                $obj->{$route['action']}(...$args);


                return;
            }
        }

        http_response_code(404);
        echo "not found";
    }


    private static function editUrl(string &$url)
    {
        if (str_ends_with($url, "/")) {

            $arr = explode("/", $url);

            unset($arr[count($arr)-1]);

            $url = implode("/", $arr);

        }
    }

    private static function matchRoute(string $route, string $url): false | array 
    {

        $regex = "/\{[A-ZA-z_][A-ZA-z_0-9]*\}/";

        $pattern = preg_replace($regex, "([^/]+)", $route);

        $pattern = "#^{$pattern}$#";
        
        if(!preg_match($pattern, $url, $matches)){
            return false;
        }


        unset($matches[0]);


        return $matches;

        

        // return false;
    }

    private static function handelMiddlewares(array $middlewares) : void{
        foreach($middlewares as $middleware) {

            $args = [];

            if(str_contains($middleware, ":")){
                $arr = explode(":", $middleware);

                $middleware = $arr[0];

                $args = explode(",", $arr[1]);
            }

            (new $middleware())->handle(...$args);
        }
    }

}
