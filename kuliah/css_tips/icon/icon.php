 <? $x=($_POST[k] - 1) * -16 ; $y= ($_POST[b] - 1) * -16;
 if ($x=="-0") $x="0"; if ($y=="-0") $y="0";
  $warna=substr($_POST[warna],0,7);
  $bg=substr($_POST[bg],0,7);
  $bg1=substr($_POST[bg1],0,7);
  ?>
<html>
<head>
<title>Untitled Document</title>
<style type="text/css">
body { font: 12px Arial, Helvetica, sans-serif;}
div { border:1px solid <?=$warna;?>;}
.but { width:16; height:16; background: <?=$bg?> url(images/<?=$_POST[img1]?>) <? echo  $x."px ".$y."px ";?>;}
.but:hover {background: <?=$bg1;?> url(images/<?=$_POST[img2]?>) <? echo  $x."px ".$y."px ";?>; }
</style>
</head>
<body>
<p>
 
</p>
<p><strong>Icon Form</strong><br>
<img src="images/ui-icons_cd0a0a_256x240.png" width="256" height="240">icon : 16 x 16</p>
<form action="" method="post">
  <p>
    Warna Kotak : 
    <input name="warna" type="color" value="<?=$warna?>"/>
     &nbsp;&nbsp;Warna bg :
     <input name="bg" type="color" id="bg" value="<?=$bg?>"/>
&nbsp;&nbsp; Warna bg hover:
     <input name="bg1" type="color" id="bg1" value="<?=$bg1?>"/>
&nbsp;&nbsp;<br>
    Warna icon : 
     <select name="img1">
        <option value="ui-icons_222222_256x240.png" <? if ($_POST[img1]=="ui-icons_222222_256x240.png") echo "selected"; ?>>hitam</option>
        <option value="ui-icons_EEF6FF_256x240.png" <? if ($_POST[img1]=="ui-icons_EEF6FF_256x240.png") echo "selected"; ?>>putih</option>        
        <option value="ui-icons_056b93_256x240.png" <? if ($_POST[img1]=="ui-icons_056b93_256x240.png") echo "selected"; ?>>biru tua</option>
        <option value="9ccdfc_256x240_icons_icons.png" <? if ($_POST[img1]=="9ccdfc_256x240_icons_icons.png") echo "selected"; ?>>biru muda</option>
        <option value="ui-icons_5fab2b_256x240.png" <? if ($_POST[img1]=="ui-icons_5fab2b_256x240.png") echo "selected"; ?>>hijau</option>
        <option value="ui-icons_888888_256x240.png" <? if ($_POST[img1]=="ui-icons_888888_256x240.png") echo "selected"; ?>>abu-abu</option>
        <option value="ui-icons_cd0a0a_256x240.png" <? if ($_POST[img1]=="ui-icons_cd0a0a_256x240.png") echo "selected"; ?>>merah</option>
        <option value="ui-icons_c02669_256x240.png" <? if ($_POST[img1]=="ui-icons_c02669_256x240.png") echo "selected"; ?>>merah muda</option>
        <option value="ui-icons_f7a50d_256x240.png" <? if ($_POST[img1]=="ui-icons_f7a50d_256x240.png") echo "selected"; ?>>kuning</option>
        <option value="ui-icons_fcd113_256x240.png" <? if ($_POST[img1]=="ui-icons_fcd113_256x240.png") echo "selected"; ?>>kuning muda</option>
        <option value="ui-icons_f5e175_256x240.png" <? if ($_POST[img1]=="ui-icons_f5e175_256x240.png") echo "selected"; ?>>kuning muda sekali</option>                
    </select>
    <br>
Warna icon (hover) :
 <select name="img2">
        <option value="ui-icons_222222_256x240.png" <? if ($_POST[img2]=="ui-icons_222222_256x240.png") echo "selected"; ?>>hitam</option>
        <option value="ui-icons_EEF6FF_256x240.png" <? if ($_POST[img2]=="ui-icons_EEF6FF_256x240.png") echo "selected"; ?>>putih</option>        
        <option value="ui-icons_056b93_256x240.png" <? if ($_POST[img2]=="ui-icons_056b93_256x240.png") echo "selected"; ?>>biru tua</option>
        <option value="9ccdfc_256x240_icons_icons.png" <? if ($_POST[img2]=="9ccdfc_256x240_icons_icons.png") echo "selected"; ?>>biru muda</option>
        <option value="ui-icons_5fab2b_256x240.png" <? if ($_POST[img2]=="ui-icons_5fab2b_256x240.png") echo "selected"; ?>>hijau</option>
        <option value="ui-icons_888888_256x240.png" <? if ($_POST[img2]=="ui-icons_888888_256x240.png") echo "selected"; ?>>abu-abu</option>
        <option value="ui-icons_cd0a0a_256x240.png" <? if ($_POST[img2]=="ui-icons_cd0a0a_256x240.png") echo "selected"; ?>>merah</option>
        <option value="ui-icons_c02669_256x240.png" <? if ($_POST[img2]=="ui-icons_c02669_256x240.png") echo "selected"; ?>>merah muda</option>
        <option value="ui-icons_f7a50d_256x240.png" <? if ($_POST[img2]=="ui-icons_f7a50d_256x240.png") echo "selected"; ?>>kuning</option>
        <option value="ui-icons_fcd113_256x240.png" <? if ($_POST[img2]=="ui-icons_fcd113_256x240.png") echo "selected"; ?>>kuning muda</option>
        <option value="ui-icons_f5e175_256x240.png" <? if ($_POST[img2]=="ui-icons_f5e175_256x240.png") echo "selected"; ?>>kuning muda sekali</option> 
</select>
<br>
Letak Icon : kolom 
<select name="k">
  <? for ($i=1; $i<=16; $i++) { ?><option value="<?=$i?>" <? if ($i==$_POST[k]) echo "selected"; ?>><?=$i?></option><? } ?>
</select>
  &nbsp;&nbsp;baris 
  <select name="b">
    <? for ($i=1; $i<=16; $i++) { ?>
    <option value="<?=$i?>" <? if ($i==$_POST[b	]) echo "selected"; ?>>
      <?=$i?>
      </option>
    <? } ?>
  </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="  kirim  ">
</p>
</form>

<strong>Hasil</strong>
<div class="but"></div>
<br>
<code>background: <?=$bg?> url(images/<?=$_POST[img1]?>) <? echo  $x."px ".$y."px ";?>; </code><br>
hover: <code>background: <?=$bg1?> url(images/<?=$_POST[img2]?>) <? echo  $x."px ".$y."px ";?>; </code>
</body>
</html>
