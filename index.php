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
$meuNome = "Marina Rousselot";
$matricula = 37171;
$nomeEmat = $meuNome.' '.$matricula;
echo $nomeEmat;
?>
</p>
<hr>
<?php
$NomeContador = $_POST['nome'];
$Contador = $_POST['quantidade'];
$FazerContagemInterna = $_POST['ContInterno'];
for ($i = 1; $i <= $Contador; $i++) {
?>
<p style="font-family: calibri; font-size: 14px; color:black"><?= $NomeContador ?> conta <?= $i ?><br />
<?php
if ($FazerContagemInterna == 'Sim')
{
    echo $NomeContador ?> conta <?= $i;
    for ($j = 1; $j <= $i; $j++) {
        ?>
         é <?= $j ?>
        <?php 
        }
        ?>
        ,
<?php } ?>
    <br>
Ana viva a <?= $NomeContador ?> viva a <?= $NomeContador ?>, <br /></p>
<hr>
<?php
}
?>

</body>
</html>