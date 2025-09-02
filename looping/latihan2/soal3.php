<?php

$n = 3;

while ($n > 0) {

    echo "Game Masih Berjalan $n <br>";
    $n--;

    do {
        echo "Game Masih Berjalan $n <br>";
        $n--;
        
    }
    while ($n > 0); 
     if ($n == 0) {
          echo "Game Over";
        }
}
?>
<?php
