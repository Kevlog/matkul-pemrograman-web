<html>
<head>
<title>Menampilkan Data Nama dan Hobby</title>
</head>
<body>
<?php
  print("Data yang dikirim ke server:<br />");
  $jumlah = count($_POST["nama"]);
  for ($i = 0; $i < $jumlah; $i++)
      print($i + 1 . ". " . $_POST["nama"][$i] . " - " .
            $_POST["hobby"][$i] ."<br />");
?>
</body>
</html>
