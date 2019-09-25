<html>
<body>

<h1>Welcome to Music R Us</h1>
<h2>Please select your profile:<h2>

<!-- Create Array to store users info Song List -->
<?php
  //Start the session. If a new session, create the arrays to hold the song and artist and playlist
  session_start();
  if(empty($_SESSION['user1']['songsAdded'])){
    $_SESSION['user1']['songsAdded'] = array();
    $_SESSION['user1']['artistAdded'] = array();
    $_SESSION['user1']['playlistSongs'] = array();
    $_SESSION['user1']['playlistArtist'] = array();
  }
  if(empty($_SESSION['user2']['songsAdded'])){
    $_SESSION['user2']['songsAdded'] = array();
    $_SESSION['user2']['artistAdded'] = array();
    $_SESSION['user2']['playlistSongs'] = array();
    $_SESSION['user2']['playlistArtist'] = array();
  }
  //USer is set to be signed off when they enter this page
  $_SESSION['user1']['signIn']= 0;
  $_SESSION['user2']['signIn']= 0;
?>

<!--Click button to go to zTunes-->
<?php
    //Button for user1 to sign in
      if (!empty($_GET["user1"])){
          $_SESSION['user1']['signIn']= 1;
          header('Location: homeSite.php');
      }else{
          echo "<form action=\"signIn.php\" method=get>
                <input type=\"submit\" name=user1 value=\"I_L0VE_PHP\" />
                </form>
                </th></tr>";
      }

      //button for user2 to sign in
      if (!empty($_GET["user2"])){
          $_SESSION['user2']['signIn']= 1;
          header('Location: homeSite.php');
      }else{
          echo "<form action=\"signIn.php\" method=get>
                <input type=\"submit\" name=user2 value=\"coding_Wizz\" />
                </form>
                </th></tr>";
      }


?>

</body>
</html>
