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


$country1 = $_POST["country1"];
$country2 = $_POST["country2"];


$result1 = $db->querySingle("
    select Num_Medals from

    (select distinct NOC from Athlete)
        natural join
    (select distinct NOC, COUNT(medal)as Num_Medals
     from Competition c
     where c.medal is not NULL
     group by NOC
    having NOC = '$country1')    
");


$result2 = $db->querySingle("
    select Num_Medals from

    (select distinct NOC from Athlete)
        natural join
    (select distinct NOC, COUNT(medal)as Num_Medals
     from Competition c
     where c.medal is not NULL
     group by NOC
        having NOC = '$country2')
");




    echo $country1;
    echo " has ";
    echo $result1;
    echo " medals    <br/>\n";



    echo $country2;
    echo " has ";
    echo $result2;
    echo " medals <br/>\n";


if($result1 > $result2) {
    echo $country1;
}else echo $country2;
    echo " WINS!!! ";
?>