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

//$db->exec('CREATE TABLE foo (bar STRING)');
//$db->exec('SELECT * FROM Athlete');
$result = $db->query("
select distinct NAME, NOC from ATHLETE 
where NOC IN 
      (select NOC from COUNTRY 
      where NOC = 
            &<name = "team" 
            type= string 
            list = "select distinct NOC from Athlete" 
            restricted = "no">)
");


echo "Country Entries \n";
echo "_______________\n";
while($row=$result->fetchArray()){
    //print_r($row);
    echo "{$row[0]} {$row[1]} \n";
}
?>