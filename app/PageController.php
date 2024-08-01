<?php

class PageController
{
    private $pages;

    public function __construct($pages)
    {
        $this->pages = $pages;
    }
    
    public function getAll()
    {
        return $this->pages;
    }

    public static function getCurrent()
    {
        $page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $page = trim($page, '/');

        return $page; 
    }

    public function getParams()
    {
        $data        = array();
        $page        = self::getCurrent();
        $data['all'] = $this->getAll();

        if (isset($this->pages[$page])) {
            $data['info']    = $this->pages[$page];
            $data['current'] = $page;
        } else {
            $data['info']    = $this->pages[PAGE_404];
            $data['current'] = PAGE_404;
        }

        if ($page === '' || $page === PAGE_INDEX) {
            $data['info']    = $this->pages[PAGE_INDEX];
            $data['current'] = PAGE_INDEX;
        }

        return $data;
    }
}