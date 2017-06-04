<!DOCTYPE html>
<html lang="en">

<style>
	.btn-xl{ 
		overflow: hidden;
		width: 60%;
	}
</style>
<?php 
	$panjangs=$_SESSION['screen_width'];
	$lebars=$_SESSION['screen_height'];
	$panjangstring = strlen($activity_name);
	$batas=0;
	if($panjangs<1000 AND $lebars<700){
		$batas=18;
	}else{
		$batas=50;
	}
	if($panjangstring>$batas){
		$hasil= substr($activity_name, 0,$batas);
		$lanjutan = substr($activity_name, $batas,$panjangstring-1);
	//	print_r($hasil);
	} else{
		$hasil = $activity_name;
		$lanjutan="";
	}


?>
<a href="<?php echo base_url();?>index.php/menu?id_event_selected=<?= $activity_code; ?>" class="page-scroll btn btn-xl"> <?= $hasil; ?><br><?= $lanjutan; ?> </a> <br><br>

</html>