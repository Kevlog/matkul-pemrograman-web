<html>
<head>
<title>Untitled Document</title>
<head>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>
<link rel="stylesheet" href="css/jquery.autocomplete.css">
</head>
<script>
$(document).ready(function() {
 $("#nama").autocomplete("ajax_ac_nama_db_proses.php",{
     width:250
  });
 $("#nama").result(function(event,data,formatted){
   $("#hasiltampilan").html("<p>Anda memilih: "+formatted+"</p>");
  });
}); 		
</script>
<body>
Jam loading: <?=date('H:i:s')?><br>
Cari nama mahasiswa: <input type="text" id="nama"/> 
<div id="hasiltampilan"></div> 
</body>
</html>