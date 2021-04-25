<?php
if (isset($_POST)) {
    if (isset($_POST["rodo"])) {
        $dane = $_POST["dane"];
        $klub = $_POST["klub"];
        $konkurencje = "";
        if (isset($_POST["ksp"])) {
            $konkurencje .= "Karabin sportowy ";
        }
        if (isset($_POST["kcz"])) {
            $konkurencje .= "Karabin centralnego zapłonu ";
        }
        if (isset($_POST["kczOP"])) {
            $konkurencje .= "Karabin centralnego zapłonu OPEN ";
        }
        if (isset($_POST["optyka"])) {
            $konkurencje .= "Optyka ";
        }
        if (isset($_POST["psp"])) {
            $konkurencje .= "Pistolet sportowy ";
        }
        if (isset($_POST["pcz"])) {
            $konkurencje .= "Pistolet centralnego zapłonu ";
        }
        if (isset($_POST["strzOP"])) {
            $konkurencje .= "Strzelba OPEN ";
        }
        if (isset($_POST["strzST"])) {
            $konkurencje .= "Strzelba STANDARD ";
        }
        echo $dane."<hr>";
        echo $klub."<hr>";
        echo $konkurencje;
    }
    else {
        echo "Musisz zaznaczyc rodo";
    }
}
?>