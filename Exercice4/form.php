<?php
if (!isset($_GET['chiffre'])) $_GET['chiffre']=1;
$title="Choisir...";

$content="<h3>Choisir sa table</h3>";
$content.="<form method=GET action='multi.php'>";
$content.="<select name=chiffre>";

for($i=1;$i<=10;$i++){
    $content.= "<option value=$i";
    if ($i==$_GET['chiffre']) $content.= " selected";
        $content.= ">$i</option>\n";
}

$content.="</select>";
$content.="<input type=submit value='Envoyer'>";
$content.="</form>";

require 'gabarit.php';
?>