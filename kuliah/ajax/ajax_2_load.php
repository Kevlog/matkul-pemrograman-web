<style>
.t_tulisan { font-size: 15px; color: #666666; }
</style>
<?php
if($_GET[id]=="1"){
	echo "<span class=t_tulisan>Isi Menu 1 (satu)</span>";
}
elseif($_GET[id]=="2"){
	echo "<span class=t_tulisan>Isi Menu 2 (dua)</span>";
}
elseif($_GET[id]=="3"){
 	echo "<span class=t_tulisan>Isi Menu 3 (tiga)</span>";
}
elseif($_GET[id]=="4"){
 	echo "<span class=t_tulisan>Isi Menu 4 (empat)</span>";
}
?>