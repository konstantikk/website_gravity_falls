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
<form method="POST" action="methods/registr.php" class="content">
		<div class="enter">
            <h1>USERNAME:</h1>
			<input name="login" value="">
            <h1>PASSWORD:</h1>
			<input name="passwd" value="" type="password">
            <h1>NAME:</h1>
			<input name="name" value="">
            <h1>SURNAME:</h1>
			<input name="surname" value=""> <br>
	<input style="color: aliceblue;background: #ff2a4e;"type="submit" name="submit" value="OK"/>
        </div>
</form>
