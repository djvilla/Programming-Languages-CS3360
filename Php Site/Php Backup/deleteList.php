<html>
<body>

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


<h1>myPlayList</h1>
<h3>Song Successfully Removed: <h3>


<?php
    $x = $_SESSION["index"];
    $song = $_SESSION["user$q"]['playlistSongs'][$x];
    $artist = $_SESSION["user$q"]['playlistArtist'][$x];
    $_SESSION["user$q"]['playlistSongs'] = array_diff($_SESSION["user$q"]['playlistSongs'], array($song));
    $_SESSION["user$q"]['playlistArtist'] = array_diff($_SESSION["user$q"]['playlistArtist'], array($artist));
    $_SESSION["user$q"]['playlistSongs'] = array_values($_SESSION["user$q"]['playlistSongs']);
    $_SESSION["user$q"]['playlistArtist'] = array_values($_SESSION["user$q"]['playlistArtist']);
?>

<!--Click button to go to myLibrary-->
<br>
<form action="myPlayList.php", method=post>
<input type="submit" value="Return to myPlayList">
</form>

<!--Click button to go to myLibrary-->
<form action="myLibrary.php", method=post>
<input type="submit" value="Return to myLibrary">
</form>

<!--Click button to go to homeSite-->
<form action="homeSite.php", method=post>
<input type="submit" value="Return Home">
</form>

</body>
</html>
