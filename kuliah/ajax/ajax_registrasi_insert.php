<? 
if (strlen($_POST['vuid'])>0 and $_POST['vpass']) {
  include "koneksi.php";
  include "function.php";
  $sql="select nim,nama,id_prodi from m_mahasiswa where nim='".$_POST['vuid']."'";
   $res=$mysqli->query($sql);
  if ($res->num_rows == 0) {
    $res=$mysqli->query("insert into m_mahasiswa (nim,password) values ('$_POST[vuid]','$_POST[vpass]')");
    echo "<img src=images/tick.png> berhasil";
    } else {
      echo "<img src=images/cross.png> wes onok mbandelll ae";
    }
  }
?>