<?php include_once '../partials/header.php';?>
<!-- Code below -->

<?php

echo "<strong>Result of : </strong> <strong>". __FILE__.'<br>'."</strong>";
echo "<hr>";

class ImageDisplay
{
    public function __construct()
    {
        // Array containing sample image file names
        $images = ["kites.jpg", "balloons.jpg", "3.jpg", "4.jpg", "5.jpg", "6.jpg"];

        // Loop through array to create image gallery
        foreach ($images as $image) {
            echo '<div class="img-box">';
            echo '<img src="../images/' . $image . '" width="240" height="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'">';
            echo '<p><a href="Imagedownload.php?file=' . urlencode($image) . '"> Download</a></p>';
            echo '</div>';
        }
    }
}

$imageDownload = new ImageDisplay();

?>
<a href="<?php echo $imageDownload->download();?>">Link</a>

<!-- Code above -->
<?php include_once '../partials/footer.php';
