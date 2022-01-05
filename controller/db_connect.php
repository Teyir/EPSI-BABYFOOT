<?php

////////////////////////////////////////////////////////////////////////////
//                                                                        //
//    Pour faire fonctionner ce fichier il faut l'include manuellement    //
//                                                                        //
////////////////////////////////////////////////////////////////////////////
$host = "";
$db = "";
$user = "";
$password = "";


$pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $user, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);



?>
