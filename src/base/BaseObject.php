<?php
namespace so\base;

/**
 * Class BaseObject
 * @package so\base
 */
class BaseObject
{
    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        $getter = 'get' . ucfirst($name);
        if (method_exists($this, $getter)) {
            return $this->$getter();
        }
    }
}