<style>
.bar { padding: 2px; margin-bottom: 2px; }
.t_tulisan { font: 11px Arial, Helvetica, sans-serif; }
</style>
<?php  $data=$_POST['password'];  $j=strlen($data);  
//echo "<span class=t_tulisan>".$_POST['password']." panjangnya ketik= $j </span>";
if($j<=3){
	echo "<div class=bar style='width:30px;background-color:#FF0000'></div>";
	echo "<span class=t_tulisan>terlalu gampang</span>";
}
elseif($j<=5){
	echo "<div class=bar style='width:50px;background-color:#FF9900'></div>";
	echo "<span class=t_tulisan>Lumayan jos</span>";
}
elseif($j<=8){
	echo "<div class=bar style='width:80px;background-color:#009900'></div>";
	echo "<span class=t_tulisan>Kuat bos</span>";
}
elseif($j>8){
	echo "<div class=bar style='width:110px;background-color:#0066CC'></div>";
	echo "<span class=t_tulisan>Sangat Kuat jossss</span>";
}
?>