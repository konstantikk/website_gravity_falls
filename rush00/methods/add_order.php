<?php
session_start();
function chek($data)
{
    $i = 0;
    while ($data[$i])
    {
        $i++;
    }
    return ($i);
}
function add_to_order($data, $last)
{
    if ($last == 0)
        $arr = array($data);
    else
        $arr[$last] = $data;
    $arr = json_encode($arr);
    file_put_contents('../order/orders', $arr);
}
$arr = $_SESSION['basket'];
$val = $_SESSION['info_user']['login'];
if ($val == 'guest')
{
    header('Location: ../index1.php');
    exit ;
}
if ($arr == NULL)
    return (print("вы ничего не добавили\n"));
if (!file_exists('../order'))
    mkdir('../order');
if (!file_exists('../order/orders'))
{
    add_to_order($arr, 0);
}
else
{
    $data = file_get_contents('../order/orders');
    $data = json_decode($data, true);
    $last = chek($data);
    add_to_order($arr, $last);
}
header('Location: ../index.php');
unset($_SESSION['basket']);
?>