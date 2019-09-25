<html>
<body>

<h1>Music R Us</h1>
<h2>Please select what you want to do:<h2>

<!-- Create Array to fill Song List -->
<?php
  //Start the session. If a new session, create the arrays to hold the song and artist
  session_start();
  if(empty($_SESSION['songsAdded'])){
    $_SESSION['songsAdded'] = array();
    $_SESSION['artistAdded'] = array();
  }
?>

<!--Click button to go to zTunes-->
<form action="zTunes.php", method=post>
<input type="submit" value="zTunes">
</form>

<!--Click button to go to Zmazon-->
<form action="Zmazon.php", method=post>
<input type="submit" value="Zmazon">
</form>

<!--Click button to go to myLibrary-->
<form action="myLibrary.php", method=post>
<input type="submit" value="myLibrary">
</form>


</body>
</html>
