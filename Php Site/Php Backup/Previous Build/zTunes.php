<html>
<head>

<!--Start session to access arrays-->
<?php
    session_start();
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

<h1>zTunes</h1>
<h3>Music List:</h3>


<!--Build Table-->
<table>

  <tr>
    <th>Song</th>
    <th>Artist</th>
    <th>Purchase</th>
  </tr>

  <tr>
    <th>Ben Franklin's Song</th>
    <th>The Decemberist</th>
    <th>
        <?php
            //If button is clicked
            if (!empty($_GET['Tsong1'])){
                $song = "Ben Franklin's Song";
                $artist = "The Decemberist";
                array_push($_SESSION['songsAdded'], $song);
                array_push($_SESSION['artistAdded'], $artist);
            }
            //If song is already in the library, hide button. Else, show the button.
            if(in_array("Ben Franklin's Song", $_SESSION['songsAdded'])) {
                echo "<form action=\"zTunes.php\" method=get>
                     <input type=\"hidden\" name=Tsong1 value=\"Owned\">
                     </form>";
            }else{
                echo "<form action=\"zTunes.php\" method=get>
                      <input type=\"submit\" name=Tsong1 value=\"Buy\" />
                      </form>";
            }
        ?>
    </th>
  </tr>

  <tr>
    <th>Ow! My Face</th>
    <th>Mystik Spiral</th>
    <th>
        <?php
            //If button is clicked
            if (!empty($_GET['Tsong2'])){
                $song = "Ow! My Face";
                $artist = "Mystik Spiral";
                array_push($_SESSION['songsAdded'], $song);
                array_push($_SESSION['artistAdded'], $artist);
            }
            //If song is already in the library, hide button. Else, show the button.
            if(in_array("Ow! My Face", $_SESSION['songsAdded'])) {
                echo "<form action=\"zTunes.php\" method=get>
                     <input type=\"hidden\" name=Tsong2 value=\"Owned\">
                     </form>";
            }else{
                echo "<form action=\"zTunes.php\" method=get>
                      <input type=\"submit\" name=Tsong2 value=\"Buy\" />
                      </form>";
            }
        ?>
    </th>
  </tr>

  <tr>
    <th>We Got the Meat</th>
    <th>Arby's</th>
    <th>
        <?php
            //If button is clicked
            if (!empty($_GET['Tsong3'])){
                $song = "We Got the Meat";
                $artist = "Arby's";
                array_push($_SESSION['songsAdded'], $song);
                array_push($_SESSION['artistAdded'], $artist);
            }
            //If song is already in the library, hide button. Else, show the button.
            if(in_array("We Got the Meat", $_SESSION['songsAdded'])) {
                echo "<form action=\"zTunes.php\" method=get>
                     <input type=\"hidden\" name=Tsong3 value=\"Owned\">
                     </form>";
            }else{
                echo "<form action=\"zTunes.php\" method=get>
                      <input type=\"submit\" name=Tsong3 value=\"Buy\" />
                      </form>";
            }
        ?>
    </th>
  </tr>

  <tr>
    <th>Neon Cat</th>
    <th>Boot's & Meow</th>
    <th>
        <?php
            //If button is clicked
            if (!empty($_GET['Tsong4'])){
                $song = "Neon Cat";
                $artist = "Boot's & Meow";
                array_push($_SESSION['songsAdded'], $song);
                array_push($_SESSION['artistAdded'], $artist);
            }
            //If song is already in the library, hide button. Else, show the button.
            if(in_array("Neon Cat", $_SESSION['songsAdded'])) {
                echo "<form action=\"zTunes.php\" method=get>
                     <input type=\"hidden\" name=Tsong4 value=\"Owned\">
                     </form>";
            }else{
                echo "<form action=\"zTunes.php\" method=get>
                      <input type=\"submit\" name=Tsong4 value=\"Buy\" />
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
