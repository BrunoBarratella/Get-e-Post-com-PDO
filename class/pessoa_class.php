<?php

require_once "conexaoBd_class.php";

class Pessoa
{

    public function set()
    {
        if ($_POST) {
            $conecta = new ConexaoBd();

            try {
                $query = 'INSERT INTO usuarios (nome_usuarios, telefone, sexo, idade)
                VALUES("' . $_POST['nome_usuarios'] . '", "' . $_POST['telefone'] . '", "' . $_POST['sexo'] . '", "' . $_POST['idade'] . '")';

                $qr = $conecta->conn->prepare($query);
                $qr->execute();
            } catch (PDOException $o) {
                echo "Ops, ocorreu um erro: " . $o;
            }
        } else {
        }
    }

    public function get()
    {
        if ($_GET) {
            $conecta = new ConexaoBd();

            try {
                $id = $_GET['pesquisar'];

                $query = "SELECT nome_usuarios, idade, telefone FROM usuarios where id_usuarios='$id'";

                $qr = $conecta->conn->prepare($query);
                $qr->execute();
                $recebe = $qr->fetchAll();

                foreach ($recebe as $key => $value) {
                    echo "<hr> Nome: " . $value['nome_usuarios'] . ", " . $value['idade'] . " anos de idade";
                }
            } catch (PDOException $o) {
                echo "Ops, ocorreu um erro" . $o;
            }
        }
    }
}
