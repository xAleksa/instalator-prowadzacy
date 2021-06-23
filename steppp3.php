Zapis do pliku


$file=fopen($config_file,"w");
$config = "<?php
 \$host=\"".$_POST['host']."\";
 \$user=\"".$_POST['user']."\";
 \$password=\"".$_POST['passwd']."\";
 \$dbname=\"".$_POST['dbname']."\";
 \$prefix=\"".$_POST['prefix']."\";
 \$link = mysqli_connect(\$host, \$user, \$password, \$dbname);\n";
   if (!fwrite($file, $config)) { 
       print "Nie mogę zapisać do pliku ($file)"; 
       exit; 
   } 
   echo "<p>Krok 2 zakończony: \n";
   echo "Plik konfiguracyjny utworzony</p>"; 
    
   fclose($file); 
