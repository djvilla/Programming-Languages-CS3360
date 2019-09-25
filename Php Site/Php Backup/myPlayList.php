<html>
<head>

<!--Start session to access arrays and set which user is logged in-->
<?php
    session_start();
    if ($_SESSION['user1']['signIn'] ==1){
        $q = 1;
    }
    if ($_SESSION['user2']['signIn'] ==1){
        $q = 2;
    }
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

<!--Display Headings-->
<h1>myPlayList</h1>
<?php
    if ($_SESSION['user1']['signIn'] ==1){
        echo "<h3>I_L0VE_PHP's Music: <h3>";
    }
    if ($_SESSION['user2']['signIn'] ==1){
        echo "<h3>coding_Wizz's Music: <h3>";
    }
?>


<!--Build Table-->
<table>

  <tr>
    <th>Song</th>
    <th>Artist</th>
    <th>Delete</th>
  </tr>

  <?php
    //If the song list is not empty, generate a graph
    if(isset($_SESSION["user$q"]['songsAdded']) && !empty($_SESSION["user$q"]['songsAdded'])) {
        for ($x = 0; $x <= count($_SESSION["user$q"]['playlistSongs'])-1; $x++){
            echo "<tr><th>". $_SESSION["user$q"]['playlistSongs'][$x] ."
                  <th>". $_SESSION["user$q"]['playlistArtist'][$x] ."</th>
                  <th>";
            //If the button is pressed, save index and move to delete site, else display button
            if (!empty($_GET["MYsong$x"])){
                $_SESSION["index"] = $x;
                header('Location: deleteList.php');
            }else {
                echo "<form action=\"myPLayList.php\" method=get>
                      <input type=\"submit\" name=MYsong$x value=\"Remove\" />
                      </form>
                      </th></tr>";
            }

        }
    }
  ?>

</table>

<br>
<!--Click button to go to myLibrary-->
<form action="myLibrary.php", method=post>
<input type="submit" value="myLibrary">
</form>

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
