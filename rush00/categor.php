
<?php
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
    <div class=" enter">
        <?php
        $data = file_get_contents("data/categories.json");
        $data = json_decode($data, TRUE);
        if ($data)
        {
            $i = 0;
            while ($data[$i])
            {
                echo " <h1 style='color: darkblue;font-family: fantasy;background-color: azure'>".$data[$i]['name']."</h1>"."  ";
                $i++;
            }
        }
        ?>
    </div>
</div>
