<?php include_once '../partials/header.php';?>
<?php
// Array containing sample image file names
$images = array("kites.jpg", "balloons.jpg");

// Loop through array to create image gallery
foreach ($images as $image) {
    echo '<div class="img-box">';
    echo '<img src="../images/' . $image . '" width="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'">';
    echo '<p><a href="download.php?file=' . urlencode($image) . '"> Download</a></p>';
    echo '</div>';
}
?>
<?php include_once '../partials/footer.php';
