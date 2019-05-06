<?php
function ft_create($log, $pas, $rol, $name, $sur_name, $last, $data, $filename)
{
	$pas = hash('sha512', $pas);
	$new = array("login"=>$log, 
	"passwd"=>$pas,
	"role"=>$rol, 
	"name"=>$name,
	"surname"=>$sur_name,
	"balance"=>1000);
	$data[$last] = $new;
	$new_data = json_encode($data);
	if (!file_put_contents($filename, $new_data))
		ft_error(1);
}
?>