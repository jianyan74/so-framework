<?php
namespace so\http;

/**
 * Class Application
 * @package so\http
 *
 * @property \so\http\Response $response The response component. This property is
 * @property \so\http\Request $request The request component. This property is
 */
class Application extends \so\base\Application
{
    /**
     * 接管所有请求
     *
     * @var
     */
    public $catchAll;

    /**
     * 请求
     *
     * @return string
     */
    public function getRequest()
    {
        if ($this->request === null) {
            $this->request = new Request();
        }

        return $this->request;
    }

    /**
     * 响应
     *
     * @return string
     */
    public function getResponse()
    {
        if ($this->response === null) {
            $this->response = new Response();
        }

        return $this->response;
    }

    /**
     * 执行请求
     * 
     * @param $request
     * @return string
     */
    public function handleRequest($request)
    {
        if (empty($this->catchAll)) {
            
            return $this->getResponse()->redirect();

        } else {
            return '啊啊啊啊 我怎么会被接管了';
        }
    }
}