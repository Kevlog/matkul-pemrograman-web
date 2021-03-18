<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
</head>
<script>
$(document).ready(function() {
 $("#nama").keyup(function(){	
	var nama=$("#nama").val();
	$.ajax({
	    url: 'ajax_cari_nama_db_proses.php',
		data: 'nama='+nama,
		type:"POST",
		success:function(data){
			$("#hasiltampilan").html(data);	
		}
	});	
 });
}); 		
</script>
<body>
Jam loading: <?=date('H:i:s')?><br>
Cari nama mahasiswa: <input type="text" id="nama"/>
<input type="submit" name="button" id="button" value="cari">
<div id="hasiltampilan"></div> 
</body>
</html>