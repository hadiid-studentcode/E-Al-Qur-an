<?php
    include "koneksi.php";
    $query = "SELECT * FROM alfatihah";
    $result = mysqli_query($koneksi, $query);

    echo "<b>Database Output</b> <br><br>";
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo "no ayat: " . $row["no_ayat"] . "<br>";
            echo "ayat: " . $row["ayat"] . "<br>";
            echo "terjemahan" . $row["terjemahan"] . "<br>";
        }
    }
