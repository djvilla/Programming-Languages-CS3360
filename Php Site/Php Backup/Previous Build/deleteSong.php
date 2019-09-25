<html>
<body>

<!--Start session to access arrays-->
<?php
    session_start();
?>


<h1>myLibrary</h1>
<h3>Song Successfully Removed: <h3>


<?php
    $x = $_SESSION["index"];
    $song = $_SESSION['songsAdded'][$x];
    $artist = $_SESSION['artistAdded'][$x];
    $_SESSION['songsAdded'] = array_diff($_SESSION['songsAdded'], array($song));
    $_SESSION['artistAdded'] = array_diff($_SESSION['artistAdded'], array($artist));
    $_SESSION['songsAdded'] = array_values($_SESSION['songsAdded']);
    $_SESSION['artistAdded'] = array_values($_SESSION['artistAdded']);
?>

<!--Click button to go to myLibrary-->
<br>
<form action="myLibrary.php", method=post>
<input type="submit" value="Return to myLibrary">
</form>

<!--Click button to go to homeSite-->
<form action="homeSite.php", method=post>
<input type="submit" value="Return Home">
</form>

</body>
</html>
