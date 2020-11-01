<?php

class CategoriaController
{
    public function __construct()
    {
        $categoriaModel = new CategoriaModel();
        $listaCategoria = $categoriaModel->getList();

        include_once __DIR__ . "/../view/category/list.php";
    }
}