<?  include "koneksi.php"; ?>
<h3>Registrasi ...</h3>
<p>
  <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
  <script>
$(document).ready(function() {
 $("#uid").keyup(function(){	
	var uid=$("#uid").val();
	  $("#cek").html("<img src=images/loading_small.gif> enteni bos ...");
	$.ajax({
	    url: 'ajax_registrasi_proses.php',
		data: 'vuid='+uid,
		type:"POST",
		success:function(data){
			$("#cek").html(data);	
		}
	});	
 });
  $("#btn").click(function(){	
   var uid=$("#uid").val();
   var pas=$("#pass").val();
	$("#hasiltampilan").html("<img src=images/loading_small.gif> loading ...");
	$.ajax({
	    url: 'ajax_registrasi_insert.php',
		data: 'vuid='+uid+'&vpass='+pas,
		type:"POST",
		success:function(data){
			$("#hasiltampilan").html(data);	
		}
	});	
  });
}); 		
</script> 
Silakan isi user id dan password dibawah ini
<br>
user id : <input type="text" id="uid"/> <span id="cek"></span><br />
password : <input type="password" id="pass"/><br />
<input type="submit" id="btn" value="registrasi" />
</p>
<div id="hasiltampilan"></div> 
<?  $mysqli->close(); ?>