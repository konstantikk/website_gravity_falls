<?php
function ft_error($a)
{
    if ($a)
        print($a);
    exit ;
}
$filename = "../data/products.json";
$filename2 = "../data/categories.json";
$art = $_GET['art'];
print($art);
if (!file_exists($filename))
    ft_error("Нет базы данных\n");
$data = file_get_contents($filename);
$data = json_decode($data, TRUE);
$cate = file_get_contents($filename2);
$cate = json_decode($cate, TRUE);
if ($data == NULL || $data == "")
    ft_error("база пуста");
$i = 0;
while ($data[$i])
{
    $value = $data[$i];
    if ($value['articul'] == $art)
    {
        unset($data[$i]);
        $data = array_values($data);
        $data = json_encode($data);
        file_put_contents($filename, $data);
        break ;
    }
    $i++;
}
if ($cate == NULL || $cate == "")
    ft_error("база пуста");
$i = 0;
while ($cate[$i])
{
    $j = 0;
    while ($cate[$i]['array'][$j])
    {
        if ($cate[$i]['array'][$j] == $art)
        {
            unset($cate[$i]['array'][$j]);
            $cate[$i]['array'] = array_values($cate[$i]['array']);
        }
        $j++;
    }
    $i++;
}
$cate = json_encode($cate);
file_put_contents($filename2, $cate);
?>