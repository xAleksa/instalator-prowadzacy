Import tabel do bazy danych


if (file_exists("sql/sql.php")) {
        include("sql/sql.php");
        echo "Tworzę tabele bazy: ".$dbname.".<br>\n";
        mysqli_select_db($link, $dbname) or die(mysqli_error($link));
        for($i=0;$i<count($create);$i++){
                echo "<p>".$i.". <code>".$create[$i]."</code></p>\n";
                mysqli_query($link, $create[$i]);
        }

Plik sql/sql.php dostępny w kroku 3.1