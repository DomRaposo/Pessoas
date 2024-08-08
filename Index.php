<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<pre>
<?php
require_once 'Pessoa.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'Funcionario.php';

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

$p1->setNome("DOM RAPOSO");
$p2->setNome("Aluizio");
$p3->setNome("Evelino");
$p4->setNome("Jorgisvlau");

$p2->setCurso("ADM");
$p3->setSalario(2000);
$p4->setSetor("RH");

$p1->setSexo("Masculino");

$p2->setCurso("ADM");
$p3->setSalario(2000);
$p4->setSetor("RH");

$p3->receberAum(55);
$p4->mudarTrabalho("Carpinteiro");
$p2->cancelarMatri();

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>
</pre>
</body>
</html>