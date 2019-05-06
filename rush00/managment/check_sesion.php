<?php
function check_sesion()
{
	if ($_SESSION['role'] != 1)
		return (FALSE);
	return (TRUE);
}
?>