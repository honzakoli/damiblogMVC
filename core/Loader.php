<?php

namespace damiblog\core;

use LogicException;

class Loader
{
    public function __construct(string $baseDir)
    {
        $this->baseDir = realpath($baseDir);

        if ($this->baseDir === false) {
            throw new LogicException("BaseDir not exists!");
        }
    }

    public function register(): void
    {
        spl_autoload_register([$this, 'handleAutoload']);
    }

    public function handleAutoload(string $className)
    {
        # code...
    }
}
