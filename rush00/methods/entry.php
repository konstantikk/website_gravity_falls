<?php
include 'auth.php';
session_start();
$login = $_GET['login'];
$passw = $_GET['passwd'];
$filename = '../data/passwd.json';
if (!file_exists($filename))
{
    header("Location: ../index.php");
    $_SESSION['info_user'] = array('login'=>'Guest', 'role'=>0, 'money'=>0);
    exit ;
}
$data = file_get_contents($filename);
$data = json_decode($data, TRUE);
if (auth($login, $passw) == TRUE)
{
    $i = 0;
    while ($data[$i])
    {
        $arr = $data[$i];
        if ($arr['login'] == $login)
        {
            $_SESSION['info_user'] = array('login'=>$arr['login'], 'name'=>$arr['name'], 'surname'=>$arr['surname'], 'role'=>$arr['role'], 'money'=>$arr['balance']);
            break ;
        }
        $i++;
    }
    header("Location: ../index.php");
}
else
{
    $_SESSION['info_user'] = array('login'=>'Guest', 'role'=>0, 'money'=>0);
    header("Location: ../index1.php");
}
?>