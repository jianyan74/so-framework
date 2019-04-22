<?php
namespace so\http;

use apps\backend\controllers\SiteController;

/**
 * Class Response
 * @package so\http
 */
class Response extends \so\base\Response
{
    /**
     * @return $this
     */
    public function redirect()
    {
        return $this;
    }

    public function send()
    {
         $controller = new SiteController();
         $controller->actionIndex();
        echo 1;
        die();
    }
}