<? if (strlen($_POST['nama'])>0) {
  include "koneksi.php";
  include "function.php";
  $res=$mysqli->query("select nim,nama,id_prodi from m_mahasiswa where nama like '%".$_POST['nama']."%'");
//echo "select nim,nama,id_prodi from m_mahasiswa where nama like '%".$_POST['nama']."%'";
  while ($r=$res->fetch_array(MYSQLI_BOTH)) {
  echo "<table width=800 border=0 cellpadding=2 cellspacing=1 bgcolor=#333333><tr><td bgcolor=#FFCCCC width=70>".$r['nim']."</td><td bgcolor=#EEEEEE width=330>".$r['nama']."</td><td bgcolor=#FFCCCC>".nama_prodi($r['id_prodi'])."</td></tr></table>";
  }
  $mysqli->close();
  } 
?>