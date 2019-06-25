<?php

require_once '../core/Loader.php';

$baseDir = '';// TODO
$loader = new damiblog\core\Loader($baseDir);

$config = [
    'baseDir' => $baseDir,
    'baseUrl' => '',// TODO
];

(new damiblog\core\Application($config))->run();
