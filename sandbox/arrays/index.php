<?php

$tuts_sites = array(
  'nettuts' => 'http://net.tutsplus.com',
  'psdtuts' => 'http://psd.tutsplus.com',
  'wptuts' => 'http://wp.tutsplus.com'
);


?>

<!doctype html>
<html>
<head>
  <title>Arrays</title>
</head>

<body>
  <h1>Tuts+ Sites</h1>
  <ul>
<?php foreach($tuts_sites as $name => $url) {
  echo "<li><a href='$url'>" . ucwords($name) . "+</a></li>";
}
?>
  </ul>
</body>



