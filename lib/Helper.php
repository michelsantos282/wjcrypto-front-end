<?php

use \App\DI\Builder;

class Helper
{
    /**
     * Get url for a route by using either name/alias, class or method name.
     *
     * The name parameter supports the following values:
     * - Route name
     * - Controller/resource name (with or without method)
     * - Controller class name
     *
     * When searching for controller/resource by name, you can use this syntax "route.name@method".
     * You can also use the same syntax when searching for a specific controller-class "MyController@home".
     * If no arguments is specified, it will return the url for the current loaded route.
     *
     * @param string|null $name
     * @param string|array|null $parameters
     * @param array|null $getParams
     * @return \Pecee\Http\Url
     * @throws \InvalidArgumentException
     */
    public static function url(?string $name = null, $parameters = null, ?array $getParams = null): Url
    {
        return Router::getUrl($name, $parameters, $getParams);
    }

    /**
     * @return \Pecee\Http\Response
     */
    public static function response(): Response
    {
        return Router::response();
    }

    /**
     * @return \Pecee\Http\Request
     */
    public static function request(): Request
    {
        return Router::request();
    }

    /**
     * Get input class
     * @param string|null $index Parameter index name
     * @param string|mixed|null $defaultValue Default return value
     * @param array ...$methods Default methods
     * @return \Pecee\Http\Input\InputHandler|array|string|null
     */
    public static function input($index = null, $defaultValue = null, ...$methods)
    {
        if ($index !== null) {
            return request()->getInputHandler()->value($index, $defaultValue, ...$methods);
        }

        return request()->getInputHandler();
    }

    /**
     * @param string $url
     * @param int|null $code
     */
    public static function redirect(string $url, ?int $code = null): void
    {
        if ($code !== null) {
            response()->httpCode($code);
        }

        response()->redirect($url);
    }

    /**
     * getContainer
     *
     * Returns a new container with the given dependency
     *
     * @param  mixed $dependency
     * @return mixed
     */
    public static function getContainer($dependency)
    {
        return Builder::buildContainer()->get($dependency);
    }

    /**
     * hasSession
     *
     * Checks if the user is authenticated
     *
     * @return bool
     */
    public static function hasSession()
    {
        if(isset($_SESSION['acc_number']) && isset($_SESSION['authentication_token'])) {
            return true;
        } else {
            return false;
        }
    }
}