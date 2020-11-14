<?php
$title="Multiplication" ;
$css="style" ;
$content="<h2>Table de multiplication par {$_GET['chiffre']} </h2>" ;
$content.="<table>" ;


for($i=0;$i<=10;$i++){
    $r=$i*$_GET['chiffre'];
    $content.= "<tr><td>$i</td><td>x</td><td>{$_GET['chiffre']}</td><td>=</td><td>$r</td></tr>";
}
$content.="</table>" ;
$content.="<a href='form.php?chiffre={$_GET['chiffre']}'>Retour à la page d'accueuil</a>";

require 'gabarit.php';
?>