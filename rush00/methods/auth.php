<?php
function auth($login, $pas)
{
	if (!file_exists("../data/passwd.json"))
		echo "DB not found!\n";
	$data = file_get_contents("../data/passwd.json");
	$data = json_decode($data, TRUE);
	$pas = hash('sha512', $pas);
	$i = 0;
	while ($data[$i])
	{
		$arr = $data[$i];
		if ($arr['login'] == $login)
		{
			
			if ($arr['passwd'] == $pas)
				return (TRUE);
		}
		$i++;
	}
	return (FALSE);
}
?>