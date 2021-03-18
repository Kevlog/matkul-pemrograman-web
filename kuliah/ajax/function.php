<?
 function nama_pengguna($id) {
  global $mysqli;
  $sql = "SELECT nama FROM m_mahasiswa WHERE nim='$id'";
  $res = $mysqli->query($sql); 
  $r = $res->fetch_array(MYSQLI_BOTH);
  return $r['nama'];
 }
  function nama_prodi($id) {
  global $mysqli;
  $sql = "SELECT nama_prodi FROM m_prodi WHERE kode_prodi='$id'";
  $res = $mysqli->query($sql); 
  $r = $res->fetch_array(MYSQLI_BOTH);
  return $r['nama_prodi'];
 }
?>