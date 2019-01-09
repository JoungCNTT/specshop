<?php
	//Chèn file vào một lần không trùng nhau
	require_once('/connect.php');
	$link = ketnoi();
	$sql = "SELECT madm,tendm FROM danh_muc";
	$kq = mysqli_query($link,$sql);
	if ($kq == false || mysqli_num_rows($kq)==0) die("chưa có danh mục");
	while ($dm = mysqli_fetch_object($kq))
{
	?>
    	<li><a href="listsanpham.php?madm=<?php echo $dm->madm ?>"><?php echo $dm->tendm; ?></a></li>
    <?php
}
?>