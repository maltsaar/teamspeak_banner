<?php

// the directory where you will store all your banner images
$bannerSubDirectory  = "banners";

// currently we can only display one type of image at a time (no mixing .gif and .png files for example)
$bannerExtension = "gif";

$fullPath = getcwd() . DIRECTORY_SEPARATOR . $bannerSubDirectory;

$pictureList = glob($fullPath . DIRECTORY_SEPARATOR . "*" . $bannerExtension);
shuffle($pictureList);

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    // display one randomly selected image and changes the header type because teamspeak can't handle redirects
    if (isset($_GET["teamspeak"])) {
        $picture = file_get_contents($pictureList[0]);
        header('Content-Type: image/gif');

        echo $picture;
    }

    // display all images with html so you can test them in a browser
    else if (isset($_GET["web"])) {
        echo "<h1>Displaying all images...</h1>";

        foreach ($pictureList as $picture) {
            echo "<h3>$picture</h3><img src=\"data:image/gif;base64," . base64_encode(file_get_contents($picture)) . "\">";
        }
    }

    // display a generic "fuck you" message for regular GET requests
    else {
        echo "<h1>You're not a teamspeak client!💢 What are you doing here?</h1>";
    }
}

?>
