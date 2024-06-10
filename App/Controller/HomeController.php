<?php

namespace App\Controller;

class HomeController
{
  public function ()
  {
    $view = new View('home/index');

    $view->render();
  }
}