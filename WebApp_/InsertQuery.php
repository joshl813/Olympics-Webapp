<?php
/**
Athlete Most Medals
 */


class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('Olympics Database.db');
    }
}

$db = new MyDB();


$id = $_POST["id"];
$name = $_POST["name"];
$sex = $_POST["sex"];
$age = $_POST["age"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$noc = $_POST["noc"];

$result1 = $db->exec("
    INSERT into Athlete(ID,NAME,SEX,AGE,HEIGHT,WEIGHT,NOC)
    values ($id,'$name','$sex', $age,$height,$weight,'$noc');
");

echo "You just added the athlete: <br/>\n";
$result2 = $db->query("
    select * from Athlete where id = $id and name = '$name';
");


echo "  ID        NAME  SEX AGE HEIGHT WEIGHT NOC  <br/>\n";
echo "____________________<br/>\n";
while($row=$result2->fetchArray()){
    echo "{$row[0]} {$row[1]} {$row[2]} {$row[3]}  {$row[4]} {$row[5]} {$row[6]} <br/>\n";
}
?>