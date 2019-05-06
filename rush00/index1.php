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
<form method="GET" action="methods/entry.php" class="content">
  <div class="enter">
      <h1>USERNAME:</h1>
    <input name="login" value="">
      <h1>PASSWORD:</h1>
    <input name="passwd" value="" type="password">
    <input style="color: aliceblue;background: #ff2a4e;box-decoration-break: slice" type="submit" name="submit" value="OK"/>
  </div>
</form>
