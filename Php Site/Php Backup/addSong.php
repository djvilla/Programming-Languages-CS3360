<html>
<body>

<h1>Hello World</h1>


</body>
</html>





$song = $_SESSION['songsAdded'][$x];
$artist = $_SESSION['artistAdded'][$x];
$_SESSION['songsAdded'] = array_diff($_SESSION['songsAdded'], array($song));
$_SESSION['artistAdded'] = array_diff($_SESSION['artistAdded'], array($artist));
$_SESSION['songsAdded'] = array_values($_SESSION['songsAdded']);
$_SESSION['artistAdded'] = array_values($_SESSION['artistAdded']);









<form action=\"myLibrary.php\" method=get>
     <input type=\"hidden\" name=song1 value=\"owned\">
     <input type=\"submit\" value=\"Remove\" />
     </form>
   </th></tr>";


<input type=\"submit\" value=\"Buy\" />




if(isset($_SESSION["music"]) && !empty($_SESSION["music"])) {
      for ($x = 0; $x <= $_SESSION["index"]; $x+= 2){
          echo "<th>". $_SESSION["music"][$x] ."</th>
                <th>". $_SESSION["music"][$x+1] ."</th>
                <th>
                  <form action=\"myLibrary.php\" method=get>
                  <input type=\"hidden\" name=song1 value=\"owned\">
                  <input type=\"submit\" value=\"Remove\" />
                  </form>
                </th>";
      }
  }



  $addButton = 1;
foreach ($_SESSION as $song){
   foreach($_SESSION[$song] as $value){
        if ($addButton % 3 != 0){
           echo "<th>". $value ."</th>";
           $addButton++;
        }else {
           echo "<th>
                    <form action=\"myLibrary.php\" method=get>
                    <input type=\"hidden\" name=song1 value=\"owned\">
                    <input type=\"submit\" value=\"Remove\" />
                    </form>
                 </th>";

           echo "<th>". $value ."</th>";
           $addButton+=2;
        }
   }
}
if ($addButton % 2 == 0){
   echo "<th>
           <form action=\"myLibrary.php\" method=get>
           <input type=\"hidden\" name=song1 value=\"owned\">
           <input type=\"submit\" value=\"Remove\" />
           </form>
        </th>";
}
