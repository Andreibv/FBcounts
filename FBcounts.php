<?php
//para buscar el id de alguna pagina: http://findmyfacebookid.com/
$json = file_get_contents('http://api.facebook.com/method/fql.query?format=json&query=select+fan_count,name+from+page+where+page_id%3D113462782644');

$decode = json_decode($json);

echo $decode[0]->fan_count."<br>";
echo $decode[0]->name;
echo "<br>";
?>