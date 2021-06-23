Podobnie jak krok 3, tylko że tym razem importujemy dane.


if (file_exists("sql/insert.php")) {
  include("sql/insert.php");
  echo "<p>Wstawiam dane do tabel bazy: ".$dbname.".</p>\n";
  mysqli_select_db($link, $dbname) or die(mysqli_error($link));
  for($i=0;$i<count($insert);$i++){
    echo "<p>".$i.". <code>".$insert[$i]."</code></p>\n";
    mysqli_query($link, $insert[$i]);
  }
}
