<!DOCTYPE HTML>
<html>
<title></title>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <div class="maindiv">
            <div class="divA">
                <div class="title"><h2>Update Profile</h2></div>
                <div class="divB">
                    <div class="divD">
                        <p>Click On Menu</p>

                        <?php                        
                        $connection = mysql_connect("localhost", "root", "");
                        $db = mysql_select_db("user", $connection);
						
						if (isset($_GET['submit'])) {
                        $id = $_GET['id'];
                        $first_name = $_GET['first_name'];
                        $last_name = $_GET['last_name'];
                        $address = $_GET['address'];
                        $education = $_GET['education'];
                        $query = mysql_query("update registered_users set
  first_name='$first_name', last_name='$last_name', address='$address', 
   education='$education' where id='$id'", $connection);
                    }
						
						
						
                        $query = mysql_query("select * from registered_users", $connection);
                        while ($row = mysql_fetch_array($query)) {
                            echo "<b><a href=\"view_profile.php?update={$row['id']}\">{$row['first_name']}</a></b>";
                            echo "<br />";
                        }
                        ?>
                    </div>
                    <?php
                    if (isset($_GET['update'])) {
                        $update = $_GET['update'];
                        $query1 = mysql_query("select * from registered_users where id=$update", $connection);
                        while ($row1 = mysql_fetch_array($query1)) {

                            echo "<form class=\"form\" method=\"get\">";
							echo "<h2>Update Form</h2>";
							echo "<hr/>";
                            echo"<input class=\"input\" type=\"hidden\" name=\"id\" value=\"{$row1['id']}\" />";
                            echo "<br />";
                            echo "<label>" . "First Name:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"first_name\" value=\"{$row1['first_name']}\" />";
                            echo "<br />";
                            echo "<label>" . "Last Name:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"last_name\" value=\"{$row1['last_name']}\" />";
                            echo "<br />";
                            echo "<label>" . "Address:" . "</label>" . "<br />";
                            echo"<input class=\"input\" type=\"text\" name=\"address\" value=\"{$row1['address']}\" />";
                            echo "<br />";
                            echo "<label>" . "Education:" . "</label>" . "<br />";
                            echo "<textarea rows=\"15\" cols=\"15\" name=\"education\">{$row1['education']}";
                            echo "</textarea>";
                            echo "<br />";
                            echo "<input class=\"submit\" type=\"submit\" name=\"submit\" value=\"update\" />";
                            echo "</form>";
                        }
                    }                    
                   if (isset($_GET['submit'])) {
				   echo '<div class="form" id="form3"><br><br><br><br><br><br><Span>Data Updated Successfuly......!!</span></div>';
				   }
                    ?>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            
    </div>
</body>
</html>
<?php
mysql_close($connection);
?>