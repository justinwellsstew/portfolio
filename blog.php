<?php
$connection = mysql_connect("mysql910.ixwebhosting.com","C281022_jport", "Booker17")
or die(mysql_error()); 

$select = mysql_select_db("C281022_justin_portfolio", $connection)
or die(mysql_error()); 

$query = "SELECT * FROM blog ORDER BY timestamp DESC";
$result = mysql_query($query,$connection) or die(mysql_error());
?> 
<!doctype html>
<html lang="en">
<head>
    <title>Justin Wells Stewart's personal portfolio website</title>
    <meta charset="UTF-8">
    <meta content="decription" content="Portfolio of Justin Wells Stewart,  a web designer in Cortland NY. Come Check out the work I have done.">
    <meta name="author" content="Justin Wells Stewart">
    <link rel= "stylesheet" href="style.css"/>
    
</head>
<body>
    <div id="wrapper">
        <header>
    <h1> Justin's <span>Journal</span></h1>
    <a href="index.php" title="link to my homepage"><img src="images/house.png"   style=" border:0px; float:right;"></a> 
    </header>
        <section id="blog">
        <?php
        while ($row = mysql_fetch_array($result)){  
        echo "<article>";	
        echo "<h2>".$row['title']."</h2>";
        echo "<p>".$row['body']."</p>"; 
        echo "<em>";
            $date = strtotime($row['timestamp']);
          echo   date("m/d/y g:i A", $date);
          echo "</em>";
        echo "</article>";	
        }
        ?>
        </section>   
    <?php mysql_close() ?>
        <footer>
       Telephone: <a href="tel:6075914644">607-591-4644</a>  |  Email <a href="mailto:stewartjustin3@gmail.com"> Stewartjustin3@gmail.com</a> | &copy; Justin Stewart 2013
        </footer>
    </div>
</body>
</html>