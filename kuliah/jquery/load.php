<html>
<head>
<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function() {
	  $(".btn1").click(function(){
	     $("#divtiga").load("load_data.php"); 
		//$("#divtiga").load("../..");
      });
	   $(".btn2").click(function(){
         $("#divtiga").load("load_data1.php?g=30"); 
      });
	   $(".btn3").click(function(){
         $("#divtiga").load("load_data.html"); 
		// $("#divtiga").load("../../../pti14c"); 
      });
   })
  </script>
    <style type="text/css">
#divtiga {color: #00f; width: 600px; background-color:#fff; border:dotted 1px; }
    </style>
</head>
<body>
 Tanggal loading pertama: <?=date('Y-m-d H:i:s');?>
 <br>
 <button class="btn1">Tanggal server</button> 
 <button class="btn2">Tabel</button>
 <button class="btn3">statis</button>
 <div id="divtiga">tiga</div>
</body>
</html>