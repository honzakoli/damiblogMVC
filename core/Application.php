<?php

namespace damiblog\core;

class Application
{
    public function __construct(array $config = [])
    {
        //
    }

    public function run(): void
    {
        echo 'Hello World!';

        // - vytvori instanci controlleru
        $controller = $this->createController(...);// TODO
        // - spusti akci controlleru
        $actionName = '';// TODO
        $result = $controller->$actionName();
        // - vrati response uzivateli
    }
}
