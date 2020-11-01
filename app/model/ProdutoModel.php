<?php

Class ProdutoModel
{
    private $nome;
    private $sku;
    private $preco;
    private $descricao;
    private $quantidade;
    private $categoria;
    private $id;

    public function __construct()
    {
        $this->connection = mysqli_connect(
            $GLOBALS['config']['db']['host'],
            $GLOBALS['config']['db']['username'],
            $GLOBALS['config']['db']['password'],
            $GLOBALS['config']['db']['schema'],
            $GLOBALS['config']['db']['port']
        );
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setSku($sku)
    {
        $this->nome = $sku;
    }
    public function setPreco($preco)
    {
        $this->nome = $preco;
    }
    public function setDescricao($descricao)
    {
        $this->nome = $descricao;
    }
    public function setQuantidade($quantidade)
    {
        $this->nome = $quantidade;
    }
    public function setCategoria($categoria)
    {
        $this->nome = $categoria;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getSku()
    {
        return $this->sku;
    }
    public function getpreco()
    {
        return $this->preco;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }
    public function addProduto()
    {
        $query = sprintf(
            "INSERT INTO produto (nome, sku, preco, descricao, quantidade) VALUES ('%s','%s',%f,'%s',%f)",
            $this->nome,
            $this->sku,
            $this->preco,
            $this->descricao,
            $this->quantidade
        );
        $insert =  mysqli_query($this->connection,$query);
    }
    public function getList()
    {
        $query = "SELECT * FROM produto";
        $select =  mysqli_query($this->connection,$query);
        if (!$select) {
            $message = 'Invalid query: ' . mysqli_error() . "\n";
            $message .= 'Whole query: ' . $query;
            die($message);
        }
        $select = $select->fetch_all(MYSQLI_ASSOC);
        return $select;
    }
    public function getinfo($id)
    {
        $query = sprintf( // defindo a query
            "select nome, sku, preco, descricao, quantidade, id from produto where id = %d", // trazer codigo e nome da tabela categoria
            $id // com o codigo informado pelo parametro
        );
        $select =  mysqli_query($this->connection,$query);
        if (!$select) {
            $message = 'Invalid query: ' . mysqli_error() . "\n";
            $message .= 'Whole query: ' . $query;
            die($message);
        }
        $select = $select->fetch_row(MYSQLI_ASSOC);

        $select = $select->id;
        return $this;

    }
    public function deleteProduto($id)
    {
        $query = sprintf(
            "delete from produto where id = %d",
            $id
        );
        $delete = mysqli_query($this->connection, $query);
    }
    public function updateProduto()
    {
        $query = sprintf(
            "update produto set SKU = '%s', nome = '%s', preco = %f, descricao = '%s', quantidade = %f where id = %d",
            $this->sku,
            $this->nome,
            $this->preco,
            $this->descricao,
            $this->quantidade,
            $this->id
        );

        $update = mysqli_query($this->connection, $query);
    }


}