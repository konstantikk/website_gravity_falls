<?php
include 'header_admin.php';
?>
		<form method="POST" action="managment/add_prod.php" enctype="multipart/form-data" class="content">
			<div class="enter">
                <h1>PRODUCT NAME:</h1>
             <input name="name" value="">
                <h1>CATEGORY:</h1>
			<input name="category" value="">
                <h1>PHOTO:</h1>
			<!-- <form enctype="multipart/form-data" method="post"> 
				<input name="picture" type="file" />
				<input type="submit" value="Загрузить" />
			</form> -->
			<input name="foto_url" value="">
<!--			<input name="userfile" type="file">-->
                <h1>DESCRIPTION:</h1>
			<input name="description" value="">
                <h1>PRICE:</h1>
			<input name="price" value="">
			<input type="submit" name="submit" value="OK"/>
            </div>
	</form>
