<?php
include 'check.php';
include 'ft_create.php';

function ft_error($a)
{
    if ($a == 1)
        print("Не удалось записать в файл\n");
    exit ;
}

function ft_del($log, $data, $filename)
{
    $i = 0;
    while ($data[$i])
    {
        $arr = $data[$i];
        if ($arr['login'] == $log)
        {
            unset($data[$i]);
            $data = array_values($data);
            $data = json_encode($data);
            file_put_contents($filename, $data);
            return (TRUE);
        }
        $i++;
    }
    return (FALSE);
}

function ft_modif($log, $role, $name, $surname, $data, $filename)
{
    $i = 0;
    while ($data[$i])
    {
        $arr = $data[$i];
        if ($arr['login'] == $log)
        {
            if ($name != NULL || $name != "")
                $data[$i]['name'] = $name;
            if ($name != NULL || $name != "")
                $data[$i]['surname'] = $surname;
            if ($role == 1 || $role == 0)
                $data[$i]['role'] = $role;
            $data = json_encode($data);
            file_put_contents($filename, $data);
            return (TRUE);
        }
        $i++;
    }
    return (FALSE);
}

$filename = "../data/passwd";
$log = $_POST['login'];
$pas = $_POST['passwd'];
$name = $_POST['name_u'];
$surname = $_POST['surname'];
$role = $_POST['role'];
$oper = $_POST('submit');

if (file_exists($filename))
{
    $data = file_get_contents($filename);
    $data = json_decode($data, TRUE);
}
if ($oper == "Удалить" && file_exists($filename))
    ft_del($log, $data, $filename);
else if ($oper == "Изменить" && file_exists($filename))
    ft_modif($log, $role, $name, $surname, $data, $filename);
else if ($oper == "Создать" && ($last = ft_check($data, $log)) != -1)
    ft_create($log, $pas, $role, $name, $surname, $last, $data, $filename);
?>