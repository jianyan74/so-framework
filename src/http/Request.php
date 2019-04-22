<?php
namespace so\http;

/**
 * Class Request
 * @package so\http
 */
class Request extends \so\base\Response
{
    /**
     * @param null $name
     * @param null $defaultValue
     * @return mixed
     */
    public function get($name = null, $defaultValue = null)
    {
        if ($name === null) {
            return $_GET;
        }

        return $_GET[$name];
    }

    /**
     * @param null $name
     * @param null $defaultValue
     * @return mixed
     */
    public function post($name = null, $defaultValue = null)
    {
        if ($name === null) {
            return $_POST;
        }

        return $_POST[$name];
    }
}