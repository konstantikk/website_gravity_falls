<?php
session_start();
$art = $_POST['art'];
while ($_SESSION['basket'][$i])
{
    if ($_SESSION['basket'][$i]['articul'] == $art)
    {
        $_SESSION['basket'][$i]['count'] = $_SESSION['basket'][$i]['count'] + 1;
        if ($_SESSION['basket'][$i]['count'] == 0)
        {
            unset($_SESSION['basket'][$i]);
            $_SESSION['basket'] = array_values($_SESSION['basket']);
        }
        break ;
    }
    $i++;
}
?>