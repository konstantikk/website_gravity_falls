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
                $data = file_get_contents("data/products.json");
                $data = json_decode($data, TRUE);
                if ($data)
                {
                    $i = 0;
                    while ($data[$i])
                    {
                        $value = $data[$i];
                        echo "
                            <div class=\"col-1-3\">
                            <h3>".$value['name']."</h3>"."
                            <img class=\"image\" src=\"".$value['foto']."\">"."
                            <h4>".$value['price']."&#128184;</h4><form method=\"POST\" action=\"methods/add_to_basket.php\">
                            <input type='hidden' name='art' value='".$value['articul']. "' style='display: inline'>
                            <button  >в корзину</button></form>
                            </div>
                            ";
                        $i++;
                    }
                }
            ?>
            </div>
 </div>
