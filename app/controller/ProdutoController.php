<?php

class ProdutoController
{
    public function __construct()
    {
        // Verifico se tem uma ação setada
         if (isset($_POST["action"])) {
            if ($_POST["action"] == "Apagar") {
                $this->deletar();
            } elseif ($_POST["action"] == "Editar" || $_POST["action"] == "Novo") {
                $this->editar();
            } elseif ($_POST["action"] == "Salvar") {
                $this->salvar();
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

    public function editar()
    {
        $produtoModel = new ProdutoModel();

        if (isset($_POST["id"])) {
            $produtoModel->getInfo($_POST["id"]);
        }

        include_once __DIR__ . "/../view/product/form.php";
    }

    public function salvar()
    {
        $produtoModel = new ProdutoModel();
        $produtoModel->setSku($_POST["productSku"]);
        $produtoModel->setNome($_POST["productName"]);
        $produtoModel->setDescricao($_POST["productDescription"]);
        $produtoModel->setQuantidade($_POST["productQuantity"]);
        $produtoModel->setPreco($_POST["productPrice"]);

        if (empty($_POST["productId"])) {
            $produtoModel->addProduto();
        } else {
            $produtoModel->setId($_POST["productId"]);
            $produtoModel->updateProduto();
        }

        $this->listar();
    }
}