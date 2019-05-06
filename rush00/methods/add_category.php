<?php
function ft_error($a)
{
	if ($a)
		echo $a;
	exit ;
}

$cate = $_POST['cate'];
$filename = "../data/categories.json";
$categories = file_get_contents($filename2);
$categories = json_decode($categories, TRUE);
if ($categories[$cate] == NULL)
	$categories[$cate] = array();
$new_data = json_encode($categories);
if (!file_put_contents($filename, $new_data))
	ft_error("Не удалось записать в файл\n");
?>