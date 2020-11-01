<?php

class CategoriaModel
{
    private $codigo;
    private $nome;
    private $connection;
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

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    public function setNome($nomeInformado)
    {
        $this->nome = $nomeInformado;
    }

    public function addCategoria()
    {
        $query = sprintf(
        "INSERT INTO categoria (codigo, nome) VALUES ('%s','%s')",
        $this->codigo,
        $this->nome
    );
        $insert =  mysqli_query($this->connection,$query);
    }

    public function getList()
    {
        $query = "SELECT * FROM categoria";
        $select =  mysqli_query($this->connection,$query);
        if (!$select) {
            $message = 'Invalid query: ' . mysqli_error() . "\n";
            $message .= 'Whole query: ' . $query;
            die($message);
        }
        $select = $select->fetch_all(MYSQLI_ASSOC);
        return $select;
    }

    public function getInfo($id)
    {
        $query = sprintf(
            "select id, nome, codigo from categoria where id = %d",
            $id
        );

        $select =  mysqli_query($this->connection,$query);

        if (!$select) {
            $message = 'Invalid query: ' . mysqli_error() . "\n";
            $message .= 'Whole query: ' . $query;
            die($message);
        }

        $selectResult = $select->fetch_row();

        $this->id = $selectResult[0];
        $this->nome = $selectResult[1];
        $this->codigo = $selectResult[2];

        return $this;
    }

    public function deleteCategoria($id)
    {
         $query = sprintf(
            "delete from categoria where id = %d",
            $id
         );
         $delete = mysqli_query($this->connection, $query);
    }
    public function updateCategoria()
    {
        $query = sprintf(
            "update categoria set nome = '%s', codigo = '%s' where id =%d",
            $this->nome,
            $this->codigo,
            $this->id
        );

        $update = mysqli_query($this->connection, $query);
    }
}

