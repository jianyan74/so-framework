<?php
namespace so\base;

/**
 * Class Controller
 * @package so\base
 */
class Controller extends Component
{
    protected $app;

    public $layout;

    private $_view;

    private $_viewPath;

    public function __construct($container = [])
    {
        $this->app = new \so\http\Application($container);
    }

    /**
     * @return Application
     */
    public function getApp(): Application
    {
        return $this->app;
    }

    /**
     * @param $view
     * @param array $params
     */
    public function render($view, $params = [])
    {
        echo $view;

        // $content = '';
        // return $this->renderContent($content);
    }

    /**
     * 不加资源映射文件
     *
     * @param $view
     * @param array $params
     */
    public function renderPartial($view, $params = [])
    {
        return $this->getView()->render($view, $params, $this);
    }

    /**
     * @param $content
     * @return mixed
     */
    public function renderContent($content)
    {
        // 加载自动载入文件
        $layoutFile = false;

        if ($layoutFile !== false) {
            return $this->getView()->renderFile($layoutFile, ['content' => $content], $this);
        }

        return $content;
    }

    /**
     * @return string
     */
    public function getView()
    {
        if ($this->_view === null) {
            $this->_view = '';
        }

        return $this->_view;
    }

    /**
     * 写入视图解析类
     *
     * @param $view
     */
    public function setView($view)
    {
        $this->_view = $view;
    }
}