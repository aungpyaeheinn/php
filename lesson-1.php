<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    #practice
    echo "testing php code in html";
    echo "<br>";
    echo 1 /* + 2 + 3 + 4 */ + 5;
    ?>
    <h1>
        <?
        echo "testing php code in html's h1 attribute"
            ?>
    </h1>
    <?
    echo "<h1>testing h1 attribute in php open and close tag</h1>"
        /* ggwp
         */
        ?>
    <?
    echo ("Hello parenthesis <br>");
    echo "hello ", "hey ", "hi", "<br>";
    print ('hello print <br>');
    print_r([1, 2, 3, 4, 5, "<br>"]);
    print "<br>";
    var_dump([1, 2, 3, 4, 5, "hello", "<br>"]);
    //die("test die");
    echo "<br>";
    echo "test die";
    echo "<br>";
    $var = "variable";
    $var = 20;
    $var = true;
    echo ($var);
    echo "<br>";
    var_dump($var);
    echo "<br>";
    define("Name", "define method test = ");
    define("Age", "23");
    echo Name, Age;
    $age = 23;
    echo "<br>";
    echo isset($age);
    echo "<br>";
    var_dump(isset($age));
    echo "<br>";
    var_dump(isset($name));
    echo "<br>";
    $var = 5.5;
    var_dump($var);
    echo "<br>";
    $name = 'Aung Pyae Hein';
    $job = "Laravel Developer";
    echo $name . '  is a ' . $job . '.';
    echo "<br>";
    echo "$name is a $job";
    echo "<br>";
    echo "{$name} is {$job}";
    echo '<br>';
    $price = 5;
    echo "This shirt is $price\$";
    echo '<br>';
    echo "\"Aung Pyae Hein\" is my name";
    echo '<br>';
    echo 'You\'re Beautiful';
    echo '<br>';
    $string = "Happy Birthday!";
    echo strlen($string);
    echo '<br>';
    echo str_word_count($string);
    echo '<br>';
    echo strrev($string);
    echo '<br>';
    echo strpos($string, 'B');
    echo '<br>';
    echo strrpos($string, '!');
    echo '<br>';
    $string = "hello world";
    echo strtoupper($string);
    echo '<br>';
    $string = "Miss You!";
    echo strtolower($string);
    echo '<br>';
    $string = "hello world";
    echo ucwords($string);
    echo '<br>';
    $string = "hello world";
    echo str_replace('world', 'everyone!', $string);
    echo '<br>';
    $string = "hello world";
    echo substr($string, 0, 7);
    echo '<br>';
    $var = 23;
    echo is_integer($var);
    var_dump(is_int($var));
    echo is_numeric($var);
    echo '<br>';
    $var = 23.5;
    echo is_double($var);
    var_dump(is_int($var));
    echo '<br>';
    $var = "23";
    echo is_numeric($var);
    var_dump(is_float($var));
    echo '<br>';
    $var = "23";
    echo is_numeric($var);
    echo '<br>';
    var_dump((string) ($var));
    echo '<br>';
    echo (int) ($var);
    echo '<br>';
    var_dump(5 == 5);
    var_dump(5 === 6);
    var_dump(5 === "5");
    var_dump(5 != 6);
    var_dump(5 > 6);
    echo '<br>';
    var_dump(is_bool($var));
    $null = null;
    var_dump(is_null($null));
    $null;
    var_dump($null);
    echo '<br>';
    $indexArray = array('Jennie', 'Rose', 'Lisa');
    print_r($indexArray);
    $indexArray = ['Apple', 'Orange', 'Mango'];
    echo '<br>';
    echo "<pre>";
    print_r($indexArray);
    echo "</pre>";
    echo $indexArray[0];
    echo '<br>';
    echo $indexArray[2];
    echo count($indexArray);
    echo isset($indexArray[0]);
    echo is_array($indexArray);
    echo '<br>';

    $associatedArray = ["name" => "Aung Pyae Hein", "age" => "22", "job" => "Laravel Developer"];
    echo $associatedArray['name'];
    echo '<br>';
    echo $associatedArray['job'];
    echo '<br>';

    $multiDimensionalArray = [['Jennie', 'Jisoo', 'Lisa', 'Rose'], ['Karina', 'Winter', 'Ningning', 'Giselle']];
    echo $multiDimensionalArray[1][3];
    echo '<br>';
    echo $multiDimensionalArray[0][2];
    echo '<br>';
    echo $multiDimensionalArray[1][2];
    echo '<br>';
    echo "<pre>";
    print_r($multiDimensionalArray);

    $fruits = ['mango', 'apple', 'pineapple'];

    $fruits[0] = 'jackfruit';
    $fruits[3] = 'orange';
    $fruits[] = 'lemon';
    $fruits[5] = 'watermelon';
    echo $fruits[0];
    echo "<pre>";
    print_r($fruits);

    $address = ["Yangon", "Myanmar"];

    list($city, $country) = $address;
    // echo $city;
    // echo $country;
    [$city, $country] = $address;
    echo $city;
    echo '<br>';
    echo $country;

    $User = ["name" => "Aung Pyae Hein", "age" => "22", "job" => "Laravel Developer"];

    ["name" => $name, "age" => $age, "job" => $job] = $User;
    echo '<br>';
    echo $name;
    echo '<br>';
    echo $age;
    echo '<br>';
    echo $job;
    echo '<br>';
    $numberone = [1, 3, 5, 7];
    $numbertwo = [...$numberone, 9];
    print_r($numbertwo);
    $numberthree = [...$numberone, ...$numbertwo];
    print_r($numberthree);
    echo count($numberthree);
    echo isset($numberthree[10]);
    echo is_array($numberthree);
    echo in_array(10, $numberthree);
    echo array_search(7, $numberthree);
    echo '<br>';

    $count = 1;

    while ($count <= 3) {
        echo "$count while loop <br>";
        $count++;
    }

    $number = 0;

    do {
        echo "$count do while loop <br>";
        $number++;
    } while ($number < 5);

    for ($i = 0; $i < 5; $i++) {
        echo "<br> $i for loop";
    }
    ;

    $bands = ['Spiritbox', 'Megadeth', 'AvengedSevenfold', 'Korn', 'Linkin Park'];

    foreach ($bands as $index => $artist) {
        echo $index . $artist . "<br>";
    }

    echo "<br>";

    for ($i = 0; $i < 10; $i++) {
        if ($i == 10) {
            break;
        }else {
            if (($i == 5) ){
            continue;
            }
        }
        echo "$i Hello World <br>";
    }

    echo "<br>";

    // $count = 0;

    // // Disable output buffering
    // while (ob_get_level()) {
    //     ob_end_flush();
    // }
    // ob_implicit_flush(true);

    // while ($count < 1000) {
    //     echo "I love you so much my bby Su Myat Htet ❤️ <br>";
    //     $count++;
    //     sleep(1); // wait 1 second
    // }

    while ($count < 10) {
        echo "I love you so much my bby Su Myat Htet ❤️ <br>";
        $count++;
    }

    $flowers = [['Roses', 'Tulips', 'Lilies'],['Daisies', 'Orchids', 'Sunflowers']];

    foreach ($flowers as $f) {
        echo $f[0] . ' ' . $f[2] . "<br>";
    }

    function hello() {
        echo "test function";
    }

    hello();

    echo "<br>";

    function hey($name){
        echo "Hey!";
    }

    hey($name);

    function heyo($name){
        echo "Hey $name!";
    }

    heyo('Luis');

    function test(){
        return "haha";
    }

    echo test();

    echo "<br>";

    function restParameter($parameter1, ...$parameter2) {
        echo "Hello $parameter1";
        echo "<br>";
        var_dump($parameter2[0]);
    }

    restParameter("World!", "I love Programming.", "I code everyday.");

    function nameArgument($name, $job) {
        echo "Hello! My name is $name. I'm $job";
    }

    nameArgument(job: "Junior PHP(Laravel) Developer", name: "Aung Pyae Hein");

    echo "<br>";

    $name = "Aung Pyae Hein"; // Global Scope Variable

    function LocalScope() {
        global $name;
        $age = 22;
        // echo "Hello! My Name is $name. I'm $age years old.";
        echo "Hello! " . $GLOBALS['name'] ." . I'm $age years old";
    } // Local Scope Function

    LocalScope();

    // echo $age;

    echo "<br>";

    function scalarTypeHinting(int | string $value) {
        echo $value;
    }

    scalarTypeHinting("GGWP");

    echo "<br>";

    function returnTypeHinting($value): int {
        echo $value;
        return $value;
    }

    returnTypeHinting(9);

    echo "<br>";

    if(function_exists('returnTypeHinting')) {
        echo "Yes,it exists";
    } else {
        echo "No,It isn't";
    }
    ?>
</body>

</html>