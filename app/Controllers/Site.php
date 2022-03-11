<?php

namespace app\Controllers;

use app\Models\Crud;

class Site extends Crud
{
    public function home()
    {
        require_once __DIR__ .'/../Views/home.php';
    }

    public function cadastro(){
        $cadastro = $this->create();
        require_once __DIR__ .'/../Views/cadastro.php';
    }

    public function consulta(){
        $consulta = $this->read();
        require_once __DIR__ .'/../Views/consulta.php';
    }

    public function editar()
    {
        $editarForm = $this->editForm();
        require_once __DIR__ .'/../Views/editar.php';
    }

    public function alterar()
    {
        $alterar = $this->update();
        header("Location:?router=Site/consulta/");
    }

}