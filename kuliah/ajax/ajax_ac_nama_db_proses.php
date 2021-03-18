<? if (strlen($_GET['q'])>0) {
  include "koneksi.php";
  include "function.php";
  $res=$mysqli->query("select nim,nama,id_prodi from m_mahasiswa where nama like '%".$_GET['q']."%'");
  while ($r=$res->fetch_array(MYSQLI_BOTH)) {
    echo $r['nama']."\n";
  }
  $mysqli->close();
  } 
?> 