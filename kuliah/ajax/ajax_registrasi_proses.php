<? 
if (strlen($_POST['vuid'])>0) {
  include "koneksi.php";
  include "function.php";
  $sql="select nim,nama,id_prodi from m_mahasiswa where nim='".$_POST['vuid']."'";
  $res=$mysqli->query($sql);
  if ($res->num_rows == 0) echo "<img src=images/tick.png> user id $_POST[vuid] tersedia boosss";
    else echo "<img src=images/cross.png>user id $_POST[vuid] sudah ada";
  $mysqli->close();
  }
?>