<?php
include('./classes/userinfo.php');
$cpf = $_GET['cpf'];
$mac = $_GET['mac'];

echo $cpf;
echo $mac;

$user = new usuario();
$user->updInfoByCpf($cpf, $mac);

?>