<html>
<body>

<h1>Music R Us</h1>
<?php
  //Start the session. If a new session, create the arrays to hold the song and artist
  session_start();
  if ($_SESSION['user1']['signIn'] ==1){
    echo "<h2>Welcome I_L0VE_PHP</h2>";
  }
  if ($_SESSION['user2']['signIn'] ==1){
    echo "<h2>Welcome coding_Wizz";
  }
?>
<h2>Please select what you want to do:</h2>

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

<!--Click button to go to myPlayList-->
<form action="myPlayList.php", method=post>
<input type="submit" value="myPlayList">
</form>

<!--Click button to go to signIn-->
<form action="signIn.php", method=post>
<input type="submit" value="Go back to Choose a Profile">
</form>


</body>
</html>
