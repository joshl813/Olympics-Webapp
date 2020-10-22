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
select medal, COUNT(*)
from competition
GROUP BY medal");


echo "  Medal        Count<br/>\n";
echo "____________________<br/>\n";
while($row=$result->fetchArray()){
    echo "{$row[0]} {$row[1]} <br/>\n";
}
?>