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


<h1>myLibrary</h1>
<h3>Song Successfully Removed: <h3>


<?php
    $x = $_SESSION["index"];
    $song = $_SESSION["user$q"]['songsAdded'][$x];
    $artist = $_SESSION["user$q"]['artistAdded'][$x];
    $_SESSION["user$q"]['songsAdded'] = array_diff($_SESSION["user$q"]['songsAdded'], array($song));
    $_SESSION["user$q"]['artistAdded'] = array_diff($_SESSION["user$q"]['artistAdded'], array($artist));
    $_SESSION["user$q"]['songsAdded'] = array_values($_SESSION["user$q"]['songsAdded']);
    $_SESSION["user$q"]['artistAdded'] = array_values($_SESSION["user$q"]['artistAdded']);
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
