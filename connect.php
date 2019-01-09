<?php
	function ketnoi()
	{
		$link = mysqli_connect('localhost','root','');
		mysqli_select_db("shoponline");
		mysqli_query($link,"SET NAME utf8");
		return $link;
	}
	function dongketnoi($link)
	{
		mysqli_close($link);
	}
?>