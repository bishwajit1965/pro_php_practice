<?php
// declare(encoding='UTF-8')
?>
<?php include_once '../partials/header.php';?>
<!-- Code below -->

<?php
// For autoloading files
spl_autoload_register(function ($class) {
    include_once '../files/'.$class.'.php';
});
echo "<strong>Result of : </strong> <strong>". __FILE__.'<br>'."</strong>";
echo "<hr>";

class StringFunctions
{

    public function __construct()
    {
        echo '<h2>Result of String Functions.</h2>';
        // Code below
        // *****************************
        echo '<h4>(1) addcslashes()</h4>';
        echo "<p>Returns a string with backslashes before characters that are listed in charlist parameter.</p>";
        $string = 'Bangladesh is my homeland';
        echo 'Output : '. addcslashes($string, 'A..z');
        // *****************************
        echo '<h4>(2)  addslashes()</h4>';
        echo "<p>Returns a string with backslashes added before characters that need to be escaped. These characters are:
				single quote , double quote,  backslash & NUL (the NUL byte)
        </p>";
        $string = "Banglades'h's  is my homeland";
        echo 'Output : '. addslashes($string);
        // *****************************
        echo '<h4>(3)  chop()</h4>';
        echo '<p></p>';
        echo "<pre>";//without <pre> you cann't see desired output in your browser
            echo 'Output : '. chop("Ramkir").'<br>';//right spaces are eliminated
            echo 'Output : '. chop("Ramkrishna", "a..z");
        echo "</pre>";
        // *****************************
        echo '<h4>(4)  char()</h4>';
        echo '<p>Returns a one-character string containing the character specified by interpreting bytevalue as an unsigned integer.</p>';
        $str = chr(240) . chr(159) . chr(144) . chr(152);
        echo 'Output : '. $str;
        // *****************************
        echo '<h4>(5)  char()</h4>';
        echo '<p>count_chars() — Return information about the occurances of characters used in a string.</p>';
        echo "<pre>";
        $string = "information";
        foreach (count_chars($string, 1) as $id => $value) {
            echo "There were $value instance(s) of \"" , chr($id) , "\" in the string.\n";
        }
        echo "</pre>";
        // *****************************
        echo '<h4>(6)  explode()</h4>';
        echo '<p>explode() — Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter.</p>';

        $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
        $pieces = explode(" ", $pizza);
        echo "<pre>";
        print_r($pieces);
        echo "</pre>";
        echo $pieces[0]; // piece1
        echo $pieces[1]; // piece2
        // *****************************
        echo '<h4>(7)  htmlentities() & html_entity_decode()</h4>';
        echo '<p>html_entity_decode() is the opposite of htmlentities() in that it converts HTML entities in the string to their corresponding characters.</p>';

        $orig = "I'll \"walk\" the <b>dog</b> now";

        $a = htmlentities($orig).'<br>';

        $b = html_entity_decode($a);

        echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

        echo $b; // I'll "walk" the <b>dog</b> now

        // *****************************
        echo '<h4>(8)  htmlspecialchars_decode()</h4>';
        echo '<p>This function is the opposite of htmlspecialchars(). It converts special HTML entities back to characters.
			The converted entities are: &amp;, &quot; (when ENT_NOQUOTES is not set), &#039; (when ENT_QUOTES is set), &lt; and &gt;.</p>';

        $str = "<p>this -&gt; &quot;</p>\n";

        echo htmlspecialchars_decode($str);

        // note that here the quotes aren't converted
        echo htmlspecialchars_decode($str, ENT_NOQUOTES);

        // *****************************
        echo '<h4>(9)  htmlspecialchars()</h4>';
        echo '<p>Certain characters have special significance in HTML, and should be represented by HTML entities if they are to preserve their meanings. This function returns a string with these conversions made. If you require all input substrings that have associated named entities to be translated, use htmlentities() instead.</p>';

        $new = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
        echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;

        // *****************************
        echo '<h4>(10)  implode()</h4>';
        echo '<p>Returns a string containing a string representation of all the array elements in the same order, with the glue string between each element.</p>';

        $array = ['fairstname', 'lastname', 'email', 'phone', 'address'];
        $comma_separated = implode(", ", $array).'<br>';

        echo $comma_separated; // lastname,email,phone

        // Empty string when using an empty array:
        var_dump(implode('hello', [])); // string(0) ""
        // *****************************
        echo '<h4>(11)  md5()</h4>';
        echo '<p>Returns the hash as a 32-character hexadecimal number.</p>';
        $string = 'hello';
        if (md5($string) === '5d41402abc4b2a76b9719d911017c592') {
            echo 'Hello<br>';
        }
        echo md5($string);

        // *****************************
        echo '<h4>(12)  lcfirst()</h4>';
        echo '<p>Returns a string with the first character of str lowercased if that character is alphabetic.</p>';

        $foo = 'HelloWorld';
        echo $foo = lcfirst($foo).'<br>'; // helloWorld

        $bar = 'HELLO WORLD!';
        echo $bar = lcfirst($bar).'<br>'; // hELLO WORLD!
        echo $bar = lcfirst(strtoupper($bar)); // hELLO WORLD!

        // *****************************
        echo '<h4>(13)  strtoupper()</h4>';
        echo '<p>Returns a string with the first character of str lowercased if that character is alphabetic.</p>';
        $bar = 'HELLO WORLD!';
        echo $bar = strtoupper($bar).'<br>';
        echo $bar = lcfirst(strtoupper($bar)); // hELLO WORLD!

        // *****************************
        echo '<h4>(14)  str_repeat()</h4>';
        echo '<p>Returns a string with the first character of str lowercased if that character is alphabetic.</p>';
        $string = "****@ ";
        echo str_repeat($string, 15);

        // *****************************
        echo '<h4>(15)  str_replace()</h4>';
        echo '<p>This function returns a string or an array with the replaced values.</p>';
        // Outputs Hll Wrld f PHP
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        echo $onlyconsonants = str_replace($vowels, "", "Hello World of PHP").'<br>';

        // Outputs F because A is replaced with B, then B is replaced with C, and so on...
        // Finally E is replaced with F, because of left to right replacements.
        $search  = array('A', 'B', 'C', 'D', 'E');
        $replace = array('B', 'C', 'D', 'E', 'F');
        $subject = 'A';
        echo str_replace($search, $replace, $subject).'<br>';

        // Outputs: apearpearle pear
        // For the same reason mentioned above
        $letters = array('a', 'p');
        $fruit   = array(' apple ', ' pear ');
        $text    = 'a p';
        $output  = str_replace($letters, $fruit, $text);
        echo $output;

        // *****************************
        echo '<h4>(16)  str_word_count()</h4>';
        echo '<p>Returns an array or an integer, depending on the format chosen.</p>';

        $string = "Hello Bangladesh! I love you very much";
        print_r(str_word_count($string, 0)).'<br>';// 0 - returns the number of words found
        echo '<pre>';
        print_r(str_word_count($string, 1)).'<br>';// 1 - returns an array containing all the words found inside the string
        print_r(str_word_count($string, 2)).'<br>';// 2 - returns an associative array, where the key is the numeric position of the word inside the string and the value is the actual word itself
        echo '</pre>';

        // *****************************
        echo '<h4>(17)  strlen()</h4>';
        echo '<p>The length of the string on success, and 0 if the string is empty.</p>';

        $string = "The length of the string on success, and 0 if the string is empty";
        echo strlen($string);

        echo '<h4>(18)  strlen()</h4>';
        echo '<p>The length of the string on success, and 0 if the string is empty.</p>';

        // *****************************
        echo '<h4>(19)  strrev()</h4>';
        echo '<p>Returns the reversed string.</p>';
        $string = "The length of the string on success, and 0 if the string is empty";
        echo strrev($string);

        // *****************************
        echo '<h4>(20)  substr()</h4>';
        echo '<p>Returns the portion of string specified by the start and length parameters.</p>';
        echo $rest = substr("abcdef", -1).'<br>';    // returns "f"
        echo $rest = substr("abcdef", -2).'<br>';    // returns "ef"
        echo $rest = substr("abcdef", -3, 1).'<br>'; // returns "d"

        echo $rest = substr("abcdef", -1).'<br>';    // returns "f"
        echo $rest = substr("abcdef", -2).'<br>';    // returns "ef"
        echo $rest = substr("abcdef", -3, 1).'<br>'; // returns "d"








        // Code above
    }
}
// Class instantiated
$stringFunctions = new StringFunctions();
?>
<!-- Code above -->
<?php include_once '../partials/footer.php';
