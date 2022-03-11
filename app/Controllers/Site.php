<?php

namespace app\Controllers;

class Site
{
    public function home()
    {
        require_once __DIR__ .'/../Views/home.php';
    }

    public function galeria($foto)
    {   
        $photo = $foto;
        require_once __DIR__ .'/../Views/galeria.php';
    }

    public function cadastro(){
        require_once __DIR__ .'/../Views/cadastro.php';
    }

    public function consulta(){
        require_once __DIR__ .'/../Views/consulta.php';
    }

}