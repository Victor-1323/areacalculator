<!DOCTYPE html>
<html>
    <head>
        <title> areacalculator</title>
    </head>
    <body>
<h1>Area of a circle</h1>
<form method="post" action="calculator.php"> 
    <input name= "radius" type="number" placeholder="enter the radius">
    <input type="submit" name="calculate_radius" value="calculate">
</form>
<p> The area is:
    <?php 
    if(isset($_GET["area"])){
        echo $_GET["area"];
    }
    ?> 
</p>

    </body>
</html>