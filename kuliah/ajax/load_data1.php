<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#666666">
  <tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Alamat</th>
  </tr><? 
  $v=$_GET['g'];
  for ($i=1; $i<=$v; $i++) { ?>
  <tr>
    <td bgcolor="#FFFFFF"><?=$i?></td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
    <td bgcolor="#FFFFFF">&nbsp;</td>
  </tr><? } ?>
</table>

Tanggal: <?=date('Y-m-d H:i:s');?>
