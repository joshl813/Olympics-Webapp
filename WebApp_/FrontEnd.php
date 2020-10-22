

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-16">
    <title>Title</title>

</head>

<body>

<header role = "banner">
    <center>
        <h1 style="background-color:powderblue;"> The Official Olympics Web-App</h1>
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Olympic_rings_without_rims.svg" alt="Olympics">
        <br>
        <h5><i>By Josh Lehman, Rafi Jacobson and Binny Feinmesser</i> </h5>
    </center>
</header>

<!---------------------------------QUERIES --------------------->

<fieldset>
    <legend style="color:#3fa0cd"> <b>Queries</b> </legend>
    <form action="BestAthleteQuery.php" method="post">
        <button name="Query 1" type="submit"><b> Query 1 </b></button> _______ ATHLETES WITH MOST MEDALS
    </form>
        <br>
        <br>
    <form action="BestCountryQuery.php" method="post">
        <button name="Query 2" type="submit"><b>  Query 2 </b></button> _______ COUNTRIES WITH MOST MEDALS
    </form>
    <br>
    <br>
    <form action="MedalCount.php" method="post">
        <button name="Query 3" type="submit"><b>  Query 3 </b></button> _______ MEDAL COUNTER
    </form>
    <br>
    <br>
    <form action="Run_WIn_Correlation.php" method="post">
        <button name="Query 4" type="submit"><b>   Query 4   </b></button> _______ TRAINING/WIN CORRELATION
    </form>
    <br>
    <br>
    <form action="CountryEntries.php" method="post">
        <button name="Query 5" type="submit"><b> Query 5 </b></button> _______ COUNTRY WITH MOST ENTRIES
    </form>
    <br>
    <br>
    <form action="HighTemperature.php" method="post">
        <button name="Query 6" type="submit"><b>     Query 6    </b></button> _______ HOTTEST TEMP YEARS
    </form>
</fieldset>

    <!--
<form action="InsertQuery.php" method="post">
    <button name="Insert Query" type="submit"><b>     INSERT ATHLETE    </b></button>_______Enter and Athlete
</form>

-->

    <!---------------------------------EDIT DATA --------------------->
    <br>
    <fieldset width = 50%>
        <legend style="color:#3fa0cd"> <b>Add Athlete</b> </legend>
        <FORM action="InsertQuery.php" method="post">
            <P>
                ID: <INPUT type="number" name="id"><BR>
                Name: <INPUT type="text" name="name"><BR>
                <INPUT type="radio" name="sex" value="Male"> Male<BR>
                <INPUT type="radio" name="sex" value="Female"> Female<BR>
                Age: <INPUT type="number" name="age"><BR>
                Height: <INPUT type="number" name="height"><BR>
                Weight: <INPUT type="number" name="weight"><BR>
                NOC: <INPUT type="text" name="noc"><BR>
                <INPUT type="submit" value="Add"> <INPUT type="reset">
            </P>
        </FORM>
    </fieldset>
    <br>
    <br>
    </head>


    <!---------------------------------BATTLE --------------------->
<fieldset width = 50%>
    <legend style="color:#3fa0cd"> <b>BATTLE</b> </legend>
    <FORM action="Battle.php" method="post">
        <P>
            Country1: <INPUT type="text" name="country1"><BR>
            <BR>
            Country2: <INPUT type="text" name="country2"><BR>
            <BR>
            <INPUT type="submit" value="BATTLE">
        </P>
    </FORM>
</fieldset>
</script>
</body>
</html>

