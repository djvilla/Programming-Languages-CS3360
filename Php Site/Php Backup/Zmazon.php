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

<!--Create style for the table to display songs to buy-->
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

<h1>Zmazon</h1>
<h3>Music List:</h3>


<!--Build Table-->
<table>

  <tr>
    <th>Song</th>
    <th>Artist</th>
    <th>Purchase</th>
  </tr>

  <tr>
    <th>My Code</th>
    <th>HP Sinatra</th>
    <th>
        <?php
            //If button is clicked
            if (!empty($_GET['Zsong1'])){
                $song = "My Code";
                $artist = "HP Sinatra";
                array_push($_SESSION["user$q"]['songsAdded'], $song);
                array_push($_SESSION["user$q"]['artistAdded'], $artist);
            }
            //If song is already in the library, hide button. Else, show the button.
            if(in_array("My Code", $_SESSION["user$q"]['songsAdded'])) {
                echo "<form action=\"Zmazon.php\" method=get>
                     <input type=\"hidden\" name=Zsong1 value=\"Owned\">
                     </form>";
            }else{
                echo "<form action=\"Zmazon.php\" method=get>
                      <input type=\"submit\" name=Zsong1 value=\"Buy\" />
                      </form>";
            }
        ?>
    </th>
  </tr>

  <tr>
    <th>Five Dolla Ft Long</th>
    <th>SubWay</th>
    <th>
        <?php
            //If button is clicked
            if (!empty($_GET['Zsong2'])){
                $song = "Five Dolla Ft Long";
                $artist = "SubWay";
                array_push($_SESSION["user$q"]['songsAdded'], $song);
                array_push($_SESSION["user$q"]['artistAdded'], $artist);
            }
            //If song is already in the library, hide button. Else, show the button.
            if(in_array("Five Dolla Ft Long", $_SESSION["user$q"]['songsAdded'])) {
                echo "<form action=\"Zmazon.php\" method=get>
                     <input type=\"hidden\" name=Zsong2 value=\"Owned\">
                     </form>";
            }else{
                echo "<form action=\"Zmazon.php\" method=get>
                      <input type=\"submit\" name=Zsong2 value=\"Buy\" />
                      </form>";
            }
        ?>
    </th>
  </tr>

  <tr>
    <th>Lice Breakers</th>
    <th>Ticky Sneks</th>
    <th>
        <?php
            //If button is clicked
            if (!empty($_GET['Zsong3'])){
                $song = "Lice Breakers";
                $artist = "Ticky Sneks";
                array_push($_SESSION["user$q"]['songsAdded'], $song);
                array_push($_SESSION["user$q"]['artistAdded'], $artist);
            }
            //If song is already in the library, hide button. Else, show the button.
            if(in_array("Lice Breakers", $_SESSION["user$q"]['songsAdded'])) {
                echo "<form action=\"Zmazon.php\" method=get>
                     <input type=\"hidden\" name=Zsong3 value=\"Owned\">
                     </form>";
            }else{
                echo "<form action=\"Zmazon.php\" method=get>
                      <input type=\"submit\" name=Zsong3 value=\"Buy\" />
                      </form>";
            }
        ?>
    </th>
  </tr>

  <tr>
    <th>Soothing Sounds of Dolphin Screams</th>
    <th>Nature Isn't Alright</th>
    <th>
        <?php
            //If button is clicked
            if (!empty($_GET['Zsong4'])){
                $song = "Soothing Sounds of Dolphin Screams";
                $artist = "Nature Isn't Alright";
                array_push($_SESSION["user$q"]['songsAdded'], $song);
                array_push($_SESSION["user$q"]['artistAdded'], $artist);
            }
            //If song is already in the library, hide button. Else, show the button.
            if(in_array("Soothing Sounds of Dolphin Screams", $_SESSION["user$q"]['songsAdded'])) {
                echo "<form action=\"Zmazon.php\" method=get>
                     <input type=\"hidden\" name=Zsong4 value=\"Owned\">
                     </form>";
            }else{
                echo "<form action=\"Zmazon.php\" method=get>
                      <input type=\"submit\" name=Zsong4 value=\"Buy\" />
                      </form>";
            }
        ?>
    </th>
  </tr>

</table>

<!--Display go to home button-->
<br>
<form action="homeSite.php", method=post>
<input type="submit" value="Home">
</form>

</body>
</html>
