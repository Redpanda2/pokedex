<?php

namespace App;

use App\Controller\AppController;
use Twig\Environment;

class Router
{
    private Environment $twig;

    public function __construct(Environment $twig){
        $this->twig = $twig;
    }

    public function process(): string
    {
        // Instancie le controleur de l'app en lui passant twig
        $appController = new AppController($this->twig);

        // Selection de la fonction à appeller en fonction du parametre
        if(isset($_GET['route'])){
            if('contact' === $_GET['route']){
                return $appController->contact();
            }
        }

        // sinon on afiche l'index
        return $appController->index();

    }
}