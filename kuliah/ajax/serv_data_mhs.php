<?  
  include "koneksi.php";
  include "function.php";
  if ($_REQUEST['nama']) $sql="select nim,nama,id_prodi from m_mahasiswa where nama like '%".$_REQUEST['nama']."%'";
  if ($_REQUEST['prodi']) $sql="select nim,nama,id_prodi from m_mahasiswa where id_prodi='".$_REQUEST['prodi']."'";
  if (!$sql) $sql="select '' as nim,'' as nama,'' as id_prodi";
    $res=$mysqli->query($sql);
 //  echo $sql;
  while ($r=@$res->fetch_array(MYSQLI_BOTH)) {
     $array_data[] = array(
            "nim"=>$r[nim],
            "nama"=>$r[nama],
            "prodi"=>nama_prodi($r[id_prodi])
        );
  }
 if (count($array_data)>1) echo json_encode($array_data);
  $mysqli->close();
?>