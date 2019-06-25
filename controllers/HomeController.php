<?php

namespace damiblog\controllers;

use damiblog;

class HomeController extends damiblog\core\Controller
{
    // - musi dedit z tridy damiblog\core\Controller
    // - obsahuje public metody s prefixem action
    // - akce musí vracet html

    public function actionDefault()
    {
        return $this->render('homepage');
    }
}
