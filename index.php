<?php


include('Sopa.php');
//instanciar un objetto de la clase sopa 
//los objetos son copias de la clase

$sopadetomate=new Sopa();

$sopadetomate->prepararSopa();
echo($sopadetomate->tipo);

?>