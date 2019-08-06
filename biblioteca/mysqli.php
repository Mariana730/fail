<?php
function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "MarbeUrban");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}