<?php
require_once "./class/pessoa_class.php";
$pessoa = new Pessoa();
?>

<form action="" method="post">
    <label for="nome">Insira seu nome aqui:</label><br>
    <input type="text" name="nome_usuarios"><br>

    <label for="telefone"></label>Insira seu numero de telefone:<br>
    <input type="text" name="telefone"><br>

    <label for="sexo"></label>Insira seu sexo (M/F:)<br>
    <input type="text" name="sexo"><br>

    <label for="idade"></label>Insira sua idade:<br>
    <input type="number" name="idade"><br><br>

    <button type="submit">Cadastrar</button>
</form>

<?php
$pessoa->set();
?>
<br><br><br><br>
<form action="" method="get">
<label for="pesquisar">Insira o Id da pessoa que deseja procurar:</label><br>
<input type="search" name="pesquisar"><br><br>
<button type="submit">Procurar</button>
</form>

<?php

$pessoa->get();

