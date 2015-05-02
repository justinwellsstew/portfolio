<?php
$title = $_POST['title'];
$body = $_POST['body'];
if (isset($_POST['submit'])){
$connection = mysql_connect("mysql910.ixwebhosting.com","C281022_jport", "Booker17")
or die(mysql_error()); 

$select = mysql_select_db("C281022_justin_portfolio", $connection)
or die(mysql_error()); 

$query = "INSERT INTO blog (title, body) 
		  VALUES('$title', '$body')";
		  

$result = mysql_query($query,$connection) or die(mysql_error()); 

}

 ?> 
 
 <!doctype html>
 <head>
 <title> admin page </title>
 <script type="text/javascript" src="jscripts/tiny_mce/tiny_mce.js"></script>
 <script type="text/javascript">
tinyMCE.init({
        mode : "textareas"
});
</script>
 </head>
 <span style="
 font-size:4em">Edit-o-matic</span>
 
 <form action="admin.php" id="blogform" method="post">
 <table>
 <tr><td>post title</td><td><input type="text" name="title" id="title" value=""/> </td></tr>
 <tr><td>post</td><td><textarea name="body" id="body" cols="50" rows="15"></textarea></td></tr>
 
 <tr><td><input type="submit" name="submit" value="Post!"/></td></tr>
 </table>
 </form>
 </html>
