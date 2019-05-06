<?php

function add_to_basket($art)
{
    $i = 0;
    while ($_SESSION['basket'][$i])
    {
        if ($_SESSION['basket'][$i]['articul'] == $art)
        {
            $_SESSION['basket'][$i]['count'] = $_SESSION['basket'][$i]['count'] + 1;
            return ;
        }
        $i++;
    }
    $_SESSION['basket'][$i] = array("articul"=>$art, "count"=>(0 + 1));
}

session_start();
$art = $_POST['art'];
if (!isset($_SESSION['basket']))
    $_SESSION['basket'] = array();
add_to_basket($art);
header('Location: ../index.php');
?>