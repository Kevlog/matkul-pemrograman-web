<? if (strlen($_POST['vprov'])>0) {
  include "koneksi.php";
  include "function.php";
  $res=$mysqli->query("select * from lv_kota where kodepropinsi='".$_POST['vprov']."' order by namakota");
  while ($r=$res->fetch_array(MYSQLI_BOTH)) {
   echo "<option value=\"$r[kodekota]\">$r[namakota]</option>";
  }
  $mysqli->close();
  } 
?>