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
select * from 

       (select distinct id, name from Athlete) 
       natural join
       (select distinct id, COUNT(medal)as Num_Medals
       from Competition c 
       where c.medal is not NULL
       group by id) 

order by Num_Medals desc");
//print_r($result);


echo "  ID        NAME        MEDALS<br/>\n";
echo "____________________<br/>\n";
while($row=$result->fetchArray()){
    //print_r($row);
    echo "{$row[0]} {$row[1]} {$row[2]} <br/>\n";
    echo "\n";


}

?>