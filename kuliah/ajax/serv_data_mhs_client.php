<html>
<head>
<title>Untitled Document</title>
</head>
<?
    // $json_url = 'http://localhost/ari/kuliah/ajax/serv_data_mhs.php?prodi=050974';

     $json_url = 'http://arikurniawan.besaba.com/serv_data_mhs.php?prodi=050623';
     $ch = curl_init( $json_url );
     $options = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $json_string
     );
     curl_setopt_array( $ch, $options );
     $result =  curl_exec($ch);  
     $data = json_decode($result, true);
//  print_r($data);
     echo "<table border=1>";
  for ($i=0; $i<count($data); $i++) {
    echo "<tr><td><b>".$data[$i][nim]."</b></td><td>".$data[$i][nama]."</td><td>".$data[$i][prodi]."</td></tr>";
  }   
echo "</table>"; 
?>
