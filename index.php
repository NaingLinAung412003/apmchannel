<?php
$db = new PDO('mysql:dbhost=sql304.epizy.com;dbname=interface','epiz_30674415','5gmQlVrh60M',[
 PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING,
 PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ,
 ]);
 $statement = $db->query("SELECT * FROM roles");
 $row1 = $statement->fetch();
 print_r($row1);
