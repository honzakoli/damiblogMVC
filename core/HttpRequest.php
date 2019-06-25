<?php

class HttpRequest
{
    /**
     * @var string
     */
    public $controller;

    /**
     * @var string
     */
    public $action = 'default';


    /**
     * @return string
     */
    public function getMethod(): string
    {
        // TODO jak zizskat metodu requestu
        // musi byt lowercase
        # code...
    }

    /**
     * @return array
     */
    public function getQuery(): array
    {
        return $_GET;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $_POST;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        // TODO ziskat hlavicky z requestu
        // nazvy hlavicek musi byt lowecase
        # code...
    }

    /**
     * @return array
     */
    public function getFiles(): array
    {
        // TODO ziskat soubory z requestu
        # code...
    }
}
