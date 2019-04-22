<?php
namespace so\base;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

/**
 * Class Application
 * @package so\base
 */
abstract class Application extends BaseObject
{
    /**
     * 启动状态
     *
     * @var
     */
    public $state;

    /**
     * 组件
     *
     * @var
     */
    protected $container;

    /**
     * 请求
     *
     * @var
     */
    protected $request;

    /**
     * 响应
     *
     * @var
     */
    protected $response;

    /**
     * Application constructor.
     * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     *
     */
    public function init(): void
    {
        $this->bootstrap();
    }

    /**
     * 启动加载
     */
    public function bootstrap(): void
    {

    }
    
    /**
     * @return Application
     */
    public function getApp(): self
    {
        return $this;
    }

    /**
     * 获取请求
     *
     * @return string
     */
    abstract public function getRequest();

    /**
     * 获取响应
     *
     * @return string
     */
    abstract public function getResponse();

    /**
     * @return int
     */
    public function run()
    {
        try {
            $this->response = $this->handleRequest($this->getRequest());
            $this->response->send();
            
            return $this->response->exitStatus;

        } catch (\Exception $e) {

        }
    }

    /**
     * @param $message
     * @param string $category
     */
    public function debug($message, string $category = 'application'): void
    {
        $this->log(LogLevel::DEBUG, $message, $category);
    }

    /**
     * @param $message
     * @param string $category
     */
    public function error($message, string $category = 'application'): void
    {
        $this->log(LogLevel::ERROR, $message, $category);
    }

    /**
     * @param $message
     * @param string $category
     */
    public function warning($message, string $category = 'application'): void
    {
        $this->log(LogLevel::WARNING, $message, $category);
    }

    /**
     * @param $message
     * @param string $category
     */
    public function info($message, string $category = 'application'): void
    {
        $this->log(LogLevel::INFO, $message, $category);
    }

    /**
     * @param string $level
     * @param $message
     * @param string $category
     */
    public function log(string $level, $message, $category = 'application'): void
    {
        ;
    }
}