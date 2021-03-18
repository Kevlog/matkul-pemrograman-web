<?  include "koneksi.php"; ?>
<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
</head>
<script>
$(document).ready(function() {
 $("#vprov").change(function(){	
	var vprov=$("#vprov").val();
	$("#hasiltampilan").show();
	$("#hasiltampilan").html("<img src=images/loading_small.gif>");
	//alert('klik');
	$.ajax({
	    url: 'ajax_combobox_multiple_proses.php',
		data: 'vprov='+vprov,
		type:"POST",
		success:function(data){
			$("#vkab").html(data);	
		 	$("#hasiltampilan").hide();
		}
	});	
 });
}); 		
</script>
<body>
<p>Jam loading: 
  <?=date('H:i:s')?>
  <br>
Pilih Provinsi : 
<select id="vprov">
   <option value="">-- pilih provinsi --</option>
  <? $res=$mysqli->query("SELECT * FROM lv_propinsi ORDER BY kodepropinsi"); 
  while ($r=$res->fetch_array(MYSQL_BOTH)) {
  ?>
  <option value="<?=$r[kodepropinsi]?>"><?=$r[namapropinsi]?></option>
  <? } ?>
</select>
<span id="hasiltampilan"></span> 
<br>
Pilih Kab./Kota :
<select id="vkab"></select>
</p>
</body>
</html>
<?  $mysqli->close(); ?>