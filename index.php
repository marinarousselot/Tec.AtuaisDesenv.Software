<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Mariana Conta</title>
</head>
<body>
<p style="font-size: 20px; color:black">
<?php
$nome = "Marina Rousselot";
$matricula = 37171;
$nomeEmat = $nome.' '.$matricula;
echo $nomeEmat;
?>
</p>
<hr>
<?php
for ($i = 1; $i <= 99; $i++) {
?>
<p style="font-family: calibri; font-size: 14px; color:black">Mariana conta <?= $i ?><br />
Mariana conta <?= $i ?> 
<?php
for ($j = 1; $j <= $i; $j++) {
?>
 é <?= $j ?>
<?php 
}
?>
,
<br>
Ana viva a Mariana viva a Mariana, <br /></p>
<hr>
<?php
}
?>
</body>
</html>