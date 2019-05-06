<?php
function ft_check($data, $log)
{
	$i = 0;
	while ($data[$i])
	{
		$arr = $data[$i];
		if ($arr['login'] == $log)
			return (-1);
		$i++;
	}
	return ($i);
}
?>