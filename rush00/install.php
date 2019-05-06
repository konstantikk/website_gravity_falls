#!/usr/bin/php
<?php
include 'methods/check.php';
include 'methods/ft_create.php';

function ft_error($a)
{
    if ($a == 1)
        echo "ERROR\n";
    exit ;
}

function ft_add_products()
{
    $prod1 = array(
        "name"=>"Дневник №1",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/b/b0/S2e11_journal_1.png/revision/latest/scale-to-width-down/700?cb=20160314081631&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"00");
    $prod2 = array(
        "name"=>"Дневник №2",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/a/a8/S1e4_book_2.png/revision/latest?cb=20151112103559&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"01");
    $prod3 = array(
        "name"=>"Дневник №3",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/a/ae/S1e20_Secrets....png/revision/latest/scale-to-width-down/700?cb=20130805194825",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"02");
    $prod4 = array(
        "name"=>"1001",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/d/d3/Joke_book.png/revision/latest/scale-to-width-down/700?cb=20160921162707&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"03");
    $prod5 = array(
        "name"=>"Kanty",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/e/e0/S1e12_loser_candy_bowl.png/revision/latest?cb=20140426114426&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"04");
    $prod6 = array(
        "name"=>"Cons",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/c/cc/S1e17_the_brown_meat.png/revision/latest/scale-to-width-down/700?cb=20151122080909&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"05");
    $prod7 = array(
        "name"=>"Nyam",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/f/f7/Short16_Ny.png/revision/latest/scale-to-width-down/700?cb=20140529022053",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"06");
    $prod8 = array(
        "name"=>"Pig",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/0/09/S1e18_Waddles_stare.png/revision/latest/scale-to-width-down/700?cb=20160316075709&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"07");
    $prod9 = array(
        "name"=>"Zodiac",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/f/fe/Opening_Bill_Cipher_Wheel.png/revision/latest/scale-to-width-down/700?cb=20160707075259&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"08");
    $prod10 = array(
        "name"=>"Kupol",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/3/3b/S2e19_pretty_much_stuck.png/revision/latest/scale-to-width-down/700?cb=20151126182151&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"09");
    $prod11 = array(
        "name"=>"Toth",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/1/12/S1e14_truth_telling_teeth_ru.png/revision/latest/scale-to-width-down/699?cb=20151030091737&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"10");
    $prod12 = array(
        "name"=>"Pocht",
        "foto"=>"https://vignette.wikia.nocookie.net/gravityfalls/images/6/64/Short3_mailbox_only.png/revision/latest/scale-to-width-down/700?cb=20151109132720&path-prefix=ru",
        "price"=>"100",
        "description"=>"Add new notation",
        "articul"=>"11");
    $product = array($prod1, $prod2, $prod3, $prod4, $prod5, $prod6, $prod7, $prod8, $prod9, $prod10, $prod11, $prod12);
    $product = json_encode($product);
    if (!file_put_contents("data/products.json", $product))
        ft_error(1);
}

function ft_add_categ()
{

    $books = array("00", "01", "02", "03");
    $books0 = array("name"=>"books", "array"=>$books);
    $food  = array("04", "05", "06", "07");
    $food0 = array("name"=>"food", "array"=>$food);
    $lols = array("08", "09", "10", "11");
    $lols0 = array("name"=>"lols", "array"=>$lols);
    $categ = array($books0, $food0, $lols0);
    $categ = json_encode($categ);
    if (!file_put_contents("data/categories.json", $categ))
        ft_error(1);
}

if ($argc != 6)
    $a = 1;
else
{
    $log = $argv[1];
    $pas = $argv[2];
    $rol = $argv[3];
    $name = $argv[4];
    $sur_name = $argv[5];

    if ($a == 1 && ($pas == NULL || $pas == ""))
        ft_error(1);

    if ($rol != 1)
        $rol = 0;
}
$filename = 'data/passwd.json';
if (!file_exists("data/"))
    mkdir('data/');
ft_add_products();
ft_add_categ();
if (file_exists($filename) && $a != 1)
{
    $file = file_get_contents($filename);
    $file = json_decode($file, TRUE);
    if (($last = ft_check($file, $log)) == -1)
        ft_error(1);
    ft_create($log, $pas, $rol, $name, $sur_name, $last, $file, $filename);
}
else if ($a != 1)
    ft_create($log, $pas,  $rol, $name, $sur_name, 0, $arr, $filename);
?>