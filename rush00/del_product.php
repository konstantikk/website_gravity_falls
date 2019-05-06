<?php
include 'header_admin.php';
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
                echo "<form method=\"POST\" action=\"managment/remove_prod.php\"  class=\"content\" >
                            <div class=\"col-1-3\" >
                            <h3>".$value['name']."</h3>"."
                            <img class=\"image\" src=\"".$value['foto']."\">
                            <form>
                            <input type='hidden' name='art' value='".$value['articul']."'>
                            <button>delete</button></form>
                            </div>
                            </form>
                            ";
                $i++;
            }
        }
        ?>
    </div>
</div>
