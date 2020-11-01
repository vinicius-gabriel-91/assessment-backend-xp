<?php

class CategoriaController
{
    public function __construct()
    {
        // Verifico se tem uma ação setada
         if (isset($_POST["action"])) {
            if ($_POST["action"] == "Apagar") {
                $this->deletar();
            } elseif ($_POST["action"] == "Editar" || $_POST["action"] == "Novo") {
                $this->editar();
            } else {
                // senão retorno a lista por padrão
                $this->listar();
            }
        } else {
             // senão retorno a lista por padrão
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

    public function editar()
    {
        $categoriaModel = new CategoriaModel();

        if (isset($_POST["id"])) {
            $categoriaModel->getInfo($_POST["id"]);
        }

        include_once __DIR__ . "/../view/category/form.php";
    }
}