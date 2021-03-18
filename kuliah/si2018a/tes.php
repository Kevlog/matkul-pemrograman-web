<?php date_default_timezone_set('Asia/Jakarta'); ?>
<html>
	<head>
		<title>Ini Coba SI 2018 A</title>
	</head>
	<body style="background-color: #fde0dd">
		<h2 style="color:red ; background-color: yellow">Selamat Datang</h2><br>
		Kelas SI 2018 A
		<br>
		<img src="https://asset.kompas.com/crops/ipYbnKl7x0pQiT65kkwFPCK5bX8=/0x0:2418x1612/750x500/data/photo/2020/02/13/5e449a549534e.jpg" width="200">
		Tanggal Client: 
		<script>
			var d = new Date();
			document.write(d);
		</script>
		<br>
		<? 
		   	echo "Tanggal Server: ".date('Y-m-d H:i:s')." ".date_default_timezone_get();
		?>
	</body>
</html>