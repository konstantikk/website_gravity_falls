<?php session_start();
if (!isset($_SESSION['info_user']))
    $_SESSION['info_user'] = array('login'=>'guest', 'role'=>0, 'money'=>0);
if ($_SESSION['info_user']['role'] == 1 || $_SESSION['info_user']['role'] == "1")
    include 'header_admin.php';
else if ($_SESSION['info_user']['login'] != "guest")
    include 'header_welcome.php';
else
    include "header.php";
?>

    <div class="content">
        <div>

<?php
$arr = $_SESSION['basket'];
$i = 0;
$filename = "data/products.json";
$data = file_get_contents($filename);
$data = json_decode($data, TRUE);

while ($arr[$i])
{
    $j = 0;
    while ($data[$j])
    {
        if ($data[$j]['articul'] == $arr[$i]['articul'])
        {
            echo "
                            <div class=\"col-1-3\">
                            <h3>".$data[$j]['name']."</h3>"."
                            <img class=\"image\" src=\"".$data[$j]['foto']."\" > "."
                            <h4>".$data[$j]['price']."&#128184;</h4>
                            </div><form action='minus.php'><button>-</button></form>
                            <h3>".$arr[$i]['count']."</h3><form action='plus.php'><button>+</button></form>
                            ";
            break ;
        }
        $j++;
    }
    $i++;
}
?>

        </div>
        <form action="methods/add_order.php"><button style="background-color: #8097ed; font-family: fantasy; width: 150px;">ПОДВТВЕРДИТЬ ЗАКАЗ</button></form>
    </div>
