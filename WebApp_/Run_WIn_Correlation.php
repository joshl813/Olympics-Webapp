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
Select Athlete.id, athlete.name, count(competition.medal),SUM(TRAINING.run)
from ((Competition
inner join athlete ON athlete.id = competition.id)
inner join training on competition.id = training.id)
group by athlete.id, athlete.name
order by count(competition.medal) DESC;");

echo "  ID        NAME        MEDALS  TRAINING<br/>\n";
echo "____________________<br/>\n";
echo "ID   NAME  MEDALS TRAINING<br/>\n";
while($row=$result->fetchArray()){
    //print_r($row);
    echo "{$row[0]} {$row[1]} {$row[2]}  {$row[3]}  <br/>\n";
}
?>