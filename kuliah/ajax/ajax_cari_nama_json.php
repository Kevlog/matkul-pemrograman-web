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
	    url: 'ajax_cari_nama_json_proses.php',
		data: 'nama='+nama,
		dataType:"json",
		type:"POST",
		success:function(data){
				dtmhs= "";
                $.each(data, function(i,n){
                    dtmhs = dtmhs + "<tr><td><b>" + data[i].nim + "<b></td><td>" + data[i].nama + "</td><td>" + data[i].prodi + "</td></tr>";
                });
                teman = "<table border=1>" + dtmhs + "</table>";
                $("#hasiltampilan").html(teman);
		}
	});	
 });
}); 		
</script>
<body>
Jam loading: <?=date('H:i:s')?><br>
Cari nama mahasiswa: <input type="text" id="nama"/> 
<div id="hasiltampilan"></div> 
</body>
</html>