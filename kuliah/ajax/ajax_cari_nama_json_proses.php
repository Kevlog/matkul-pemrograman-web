<? if (strlen($_REQUEST['nama'])>0) {
  include "koneksi.php";
  include "function.php";
  $res=$mysqli->query("select nim,nama,id_prodi from m_mahasiswa where nama like '%".$_REQUEST['nama']."%'");
  while ($r=$res->fetch_array(MYSQLI_BOTH)) {
     $array_data[] = array(
            "nim"=>$r[nim],
            "nama"=>$r[nama],
            "prodi"=>nama_prodi($r[id_prodi])
        );
  }
 echo json_encode($array_data);
  $mysqli->close();
  } 
?>