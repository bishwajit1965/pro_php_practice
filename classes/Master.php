<?php include_once '../partials/header.php';?>
<!-- Code below -->

<?php
// For autoloading files
spl_autoload_register(function ($class) {
    include_once '../files/'.$class.'.php';
});
echo "<strong>Result of : </strong> <strong>". __FILE__.'<br>'."</strong>";
echo "<hr>";

class Master
{
    public function __construct()
    {
    }
}

$master = new Master();


?>
<!-- Code above -->
<?php include_once '../partials/footer.php';
