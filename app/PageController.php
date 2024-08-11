<?php

class PageController
{
    private $settings;

    public function __construct($settings)
    {
        $this->settings = $settings;
    }
    
    public function getAll()
    {
        return $this->settings['pages'];
    }

    public static function getCurrent()
    {
        $page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $page = trim($page, '/');

        return $page; 
    }

    public function getParams()
    {
        $data         = array();
        $page         = self::getCurrent();
        $data['all']  = $this->getAll();
        $data['site'] = $this->settings['site'];

        if (isset($this->settings['pages'][$page])) {
            $data['info']    = $this->settings['pages'][$page];
            $data['current'] = $page;
        } else {
            $data['info']    = $this->settings['pages'][PAGE_404];
            $data['current'] = PAGE_404;
        }

        if ($page === '' || $page === PAGE_INDEX) {
            $data['info']    = $this->settings['pages'][PAGE_INDEX];
            $data['current'] = PAGE_INDEX;
        }

        return $data;
    }
}