<?php

require_once '../core/Loader.php';

$baseDir = '';// TODO
(new damiblog\core\Loader($baseDir))->register();

$config = [
    'baseDir' => $baseDir,
    'baseUrl' => '',// TODO
];

(new damiblog\core\Application($config))->run();
