<?php
	//chèn file vào 1 laanfkhoong trùng nhau andamancntt
	require_once('connect.php');
	$link = ketnoi();
	if(isset($_GET['madm'])) $madm = $_GET['madm'];
	$sql ="SELECT * FROM san_pham";
	if($madm !=0) $sql = "WHERE madm = $madm";
	$kq = mysqli_query($link, $sql);
	if($kq ==false || mysqli_num_rows($kq)==0) die("Chưa có danh mục");
	while ($sp = mysqli_fetch_object($kq))
	{
		$anhsp = "anhsp/acer.jpg";
		if(is_file("anhsp/".$sp->masp.'.jpg')) $anhsp = "anhsp/".$sp->masp.'.jpg'
		?>
        	<div class="sanpham">
            	<div><img src="<?php echo $anhsp ?>"/></div>
                <div><?php echo $sp->tensp; ?></div>
                div><?php echo $sp->giasp; ?></div>
            </div>
        <?php
	}
	
?>