<?php

class ProdutoController
{
    public function __construct()
    {
      $this->listar();
    }

    public function listar()
    {
        $produtoModel = new ProdutoModel();
        $listaProduto = $produtoModel->getList();

        include_once __DIR__ . "/../view/product/list.php";
    }
}