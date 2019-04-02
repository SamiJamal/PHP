<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11-2-2019
 * Time: 09:17
 */

$user = "Schooluser";
$pass = "school";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school; port=3306', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>


