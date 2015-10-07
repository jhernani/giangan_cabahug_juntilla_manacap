<?php
	$message = "You tried to access a restricted page. you will be forced to logout you lil shit";
    echo "<script type='text/javascript'>alert('$message');</script>";
	redirect('destroy/des_ses', 'refresh');
?>