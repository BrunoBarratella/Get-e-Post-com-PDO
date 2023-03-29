<?php

class ConexaoBd
{
    var $Bhost = "bagre";
    var $Buser = "wise";
    var $Bpass = "#Ws!0zWISEd1o8d0i5%";
    var $Bdb   = "sucos_vendas";
    var $Bport = 3306;

    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=" . $this->Bhost . ";port=" . $this->Bport . ";dbname=" . $this->Bdb, $this->Buser, $this->Bpass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Ops, ocorreu um erro durante a conexão com o banco de dados" . $e;
        }
    }
}
