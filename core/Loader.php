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

        spl_autoload_register([$this, 'register']);
    }

    public function register(string $className)
    {
        # code...
    }
}
