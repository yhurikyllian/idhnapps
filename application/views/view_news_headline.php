<h2>
	<a href="<?php echo base_url();?>index.php/newsdetail?link=lihatDetailBerita.php&id=<?=$id_news;?>"><?=$title;?></a>
</h2>

<p><span class="glyphicon glyphicon-time"></span> Posted on <?=$post_date;?></p>
<?php if ($image!=="assets/") {
?>

	<img class="img-responsive" src="<?php echo base_url().$image;?>" alt="">
<?php
} ?>

<hr>
<p><?=substr($trim,0,500);?></p>
<a class="btn btn-primary" href="<?php echo base_url();?>index.php/newsdetail?id=<?=$id_news;?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
<hr>