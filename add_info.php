<?php
$db = new PDO('sqlite:db\othod.sqlite3');
$insert_db = $db->prepare("INSERT INTO 'filial' ('ID','NameFilial' 
                      ) VALUES (null, 'Петропавловка')");
$insert_db->execute()

