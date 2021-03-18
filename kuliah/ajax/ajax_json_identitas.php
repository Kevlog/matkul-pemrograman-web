<h3>Ajax: JSON</h3>
<p>
  <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
  <script>
$(document).ready(function() {
  $("#btn").click(function(){	
   var uid=$("#uid").val();
   var nama=$("#nama").val();
	$.ajax({
	    url: 'ajax_json_identitas_proses.php',
		data: 'uid='+uid+'&nama='+nama,
		type:"GET",
		dataType: "json",
		success:function(data){
		  $("#hasiltampilan").text(data.uid+" adalah "+data.nama);	
		}
	});	
  });
}); 		
</script> 
Silakan isi dibawah ini
<br>
id : <input type="text" id="uid"/><br />
nama : <input type="text" id="nama"/><br />
<input type="submit" id="btn" value="kirim" />
</p>
<div id="hasiltampilan"></div> 
 