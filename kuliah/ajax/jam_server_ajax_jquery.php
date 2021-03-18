<html>
<head>
<title>Ajax Jam</title>
<script src="js/jquery-1.5.1.min.js"></script>
<script>
 $(document).ready(function() {
   setInterval(function() {
     $('#divjam').load('jam_server.php');
   }, 1000);
 })
</script>
</head>
<body>
<div id="divjam"></div>
<p><? echo date("Y-m-d H:i:s"); ?> </p>
</body>
</html>
