<?php include_once '../partials/header.php';?>
<!-- Code below -->

<?php
// For autoloading files
spl_autoload_register(function ($class) {
    include_once '../files/'.$class.'.php';
});
echo "<strong>Result of : </strong> <strong>". __FILE__.'<br>'."</strong>";
echo "<hr>";

class ArrayItration
{

    public function __construct()
    {
        echo '<h2>Result of ArrayItration.</h2>';
        // Code below
        echo '<h4>(1) new ArrayObject($arrayData)() & getIterator()</h4>';
        echo "<p> </p>";

        $arrayData = ['Apple' => 'Good', 'Banana' => 'Excellent', 'Mango' => 'Superb',
        'Pineapple' => 'mediocre', 'Lichi' => 'Traditional'];

        $obj = new ArrayObject($arrayData);
        $itrator = $obj->getIterator();
        if ($itrator != null) {
            foreach ($itrator as $fruit => $taste) {
                echo $fruit.' tastes '.'<b>'.$taste.'</b>'.'<br>';
            }
        }
    }
}

$arrayItration = new ArrayItration();


?>
<!-- Code above -->
<?php include_once '../partials/footer.php';
