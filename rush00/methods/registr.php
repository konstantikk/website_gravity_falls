<?php
session_start();
include 'check.php';
include 'ft_create.php';

function ft_error()
{
	header("Location: index2.html");
	exit ;
}

$log = $_POST['login'];
$pas = $_POST['passwd'];
$name = $_POST['name_u'];
$surname = $_POST['surname'];
$role = 0;
$filename = '../data/passwd.json';
if (!file_exists($filename))
	ft_error();
$data = file_get_contents($filename);
$data = json_decode($data, TRUE);

if (!isset($pas) || !isset($log) || ($last = ft_check($data, $log)) == -1)
	ft_error();
ft_create($log, $pas, $role, $name, $surname, $last, $data, $filename);

$_SESSION['info_user'] = array('login'=>$log, 'name'=>$name, 'surname'=>$surname, 'role'=>$role, 'money'=>1000);
header("Location: ../index.php");
?>