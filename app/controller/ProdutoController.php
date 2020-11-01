<?php

class ProdutoController
{
    public function __construct()
    {
        // Verifico se tem uma ação setada
        if (isset($_POST["action"])) {
            if ($_POST["action"] == "Apagar") {
                $this->deletar();
            } else {
                $this->listar();
            }
        } else {
            // senão retorno a lista por padrão
            $this->listar();
        }
    }

    public function listar()
    {
        $produtoModel = new ProdutoModel();
        $listaProduto = $produtoModel->getList();

        include_once __DIR__ . "/../view/product/list.php";
    }

    public function deletar()
    {
        $produtoModel = new ProdutoModel();
        $produtoModel->deleteProduto($_POST["id"]);
        $this->listar();
    }
}