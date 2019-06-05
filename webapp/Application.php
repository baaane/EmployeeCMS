<?php

namespace WebApp;

use Illuminate\Foundation\Application as LaravelApplication;

class Application extends LaravelApplication
{
    /**
     * The application namespace
     * 
     * @var string
     */
    protected $namespace = 'WebApp\\';

    /**
     * Get the path to the application "app" directory
     * 
     * @param string $path Optionally, a path to append to the path
     * 
     * @return string
     */
    public function path($path = '')
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'webapp' . DIRECTORY_SEPARATOR . 'app' . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}