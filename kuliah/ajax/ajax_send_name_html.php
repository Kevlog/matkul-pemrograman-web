<html>
<head>
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
</head>
<script>
$(document).ready(function() {
 $("#nama").keyup(function(){	
	var nama=$("#nama").val();
	//alert(nama);
	$.ajax({
 		url:"ajax_send_name.php",
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
Masukkan nama Anda: <input type="text" id="nama"/> 
<div id="hasiltampilan"></div> 
</body>
</html>
