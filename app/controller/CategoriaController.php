<?php

class CategoriaController
{
    public function __construct()
    {
         if (isset($_POST["action"])) {
            if ($_POST["action"] == "Apagar") {
                $this->deletar();
            } else {
                $this->listar();
            }
        } else {
            $this->listar();
        }
    }

    public function listar()
    {
        $categoriaModel = new CategoriaModel();
        $listaCategoria = $categoriaModel->getList();

        include_once __DIR__ . "/../view/category/list.php";
    }

    public function deletar()
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->deleteCategoria($_POST["id"]);
        $this->listar();
    }
}