<?php
/**
 * Created by PhpStorm.
 * User: alexnguyen
 * Date: 13/11/2018
 * Time: 21:20
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    foreach ($dictionary as $word => $description) {
        if ($word == $searchword) {
            echo "Từ: " . $word . ". <br/>Dịch: " . $description;
            echo "<br/>";
        }
    }
}