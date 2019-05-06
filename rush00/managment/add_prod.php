<?php
session_start();
// if ($_SESSION['role'] != 1)
// {
// 	header("Location: ../../main.php");
// 	exit ;
// }
function ft_check($data, $log)
{
	$i = 0;
	while ($data[$i])
	{
		$arr = $data[$i];
		if ($arr['name'] == $log)
			return (-1);
		$i++;
	}
	return ($i);
}

function ft_error($a)
{
	if ($a)
		echo $a;
	exit ;
}
function ft_add_prod($name, $cate, $foto, $desc, $pric, $art, $last, $data, $filename)
{
	$new = array("name"=>$name, 
	"cate"=>$cate,
	"foto"=>$foto, 
	"description"=>$desc,
	"price"=>$pric,
	"articul"=>$art);
	$data[$last] = $new;
	$new_data = json_encode($data);
	print_r($new_data);
	if (!file_put_contents($filename, $new_data))
		ft_error(1);
}
function ft_add_cate($categories, $filename2, $cate, $last, $y_o_n)
{
	if ($y_o_n == 1)
		array_push($categories[$cate], $last);
	else
		$categories[$cate] = array($last);
	print_r($categories);
	$new_data = json_encode($categories);
	if (!file_put_contents($filename2, $new_data))
		ft_error(1);
	
}
if (!file_exists('../img'))
	mkdir("../img");

$path = "../img/";
$pathname = "img/";
$name = $_POST['name'];
$cate = $_POST['category'];
$foto = $_POST['foto_url'];
$desc = $_POST['description'];
$pric = $_POST['price'];
echo $foto;
if (!isset($name))
	ft_error("Укажите название товара\n");
if (!isset($price))
	$pric = "Цена не указана";
$filename1 = "../data/products.json";
$filename2 = "../data/categories.json";
if (!file_exists($filename1) || !file_exists($filename2))
	ft_error("нет такой папки\n");
$products = file_get_contents($filename1);
$categories = file_get_contents($filename2);
$products = json_decode($products, TRUE);
$categories = json_decode($categories, TRUE);
if (($last = ft_check($products, $name)) == -1)
	ft_error("Такой продукт уже существует");
if ($foto == "" || !isset($foto))
{
	// if (isset($_FILES['userfile']['name']))
	// {
	// 	move_uploaded_file($_FILES['userfile']['name'], $path.basename($_FILES['userfile']['type']));
	// 	$foto = $pathname.$_FILES['userfile']['name'];
	// }
	// else
		$foto = "https://vignette.wikia.nocookie.net/gravityfalls/images/1/10/Gallery.jpg/revision/latest/scale-to-width-down/208?cb=20161215182525&path-prefix=ru";
}
ft_add_prod($name, $cate, $foto, $desc, $pric, $last, $last, $products, $filename1);
if (!isset($categories[$cate]))
	ft_add_cate($categories, $filename2, $cate, $last, 0);
else
	ft_add_cate($categories, $filename2, $cate, $last, 1);

	// print_r($categories);

?>
