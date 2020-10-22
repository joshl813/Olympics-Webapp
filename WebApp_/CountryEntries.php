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
select NOC, COUNT(*) as entries
from Country
GROUP BY NOC
order by entries desc
");


echo "  TEAM        Entries       <br/>\n";
echo "____________________<br/>\n";
while($row=$result->fetchArray()){
    //print_r($row);
    echo "{$row[0]} {$row[1]}  <br/>\n";
}
?>