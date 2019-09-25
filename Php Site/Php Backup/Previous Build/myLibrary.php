<html>
<head>

<!--Start session to access arrays-->
<?php
    session_start();
?>

<!--Create style for the table to display songs in library, if any-->
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 2px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>


<body>

<h1>myLibrary</h1>
<h3>My Music: <h3>

<!--Build Table-->
<table>

  <tr>
    <th>Song</th>
    <th>Artist</th>
    <th>Delete</th>
  </tr>

  <?php
    //If the song list is not empty, generate a graph
    if(isset($_SESSION['songsAdded']) && !empty($_SESSION['songsAdded'])) {
        for ($x = 0; $x <= count($_SESSION['songsAdded'])-1; $x++){
            echo "<tr><th>". $_SESSION['songsAdded'][$x] ."</th>
                  <th>". $_SESSION['artistAdded'][$x] ."</th>
                  <th>";
            //If the button is pressed, save index and move to delete site, else display button
            if (!empty($_GET["MYsong$x"])){
                $_SESSION["index"] = $x;
                header('Location: deleteSong.php');
            }else{
                echo "<form action=\"myLibrary.php\" method=get>
                      <input type=\"submit\" name=MYsong$x value=\"Remove\" />
                      </form>
                      </th></tr>";
            }

        }
    }
  ?>

</table>

<br>
<!--Display go to home button-->
<form action="homeSite.php", method=post>
<input type="submit" value="Home">
</form>

<!--Debugging-->
<?php
    //var_dump($_SESSION);
?>

</body>
</html>
