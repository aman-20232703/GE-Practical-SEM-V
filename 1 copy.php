<?php
// echo "hello world";

// $name="aman";
// $age= 23;
// $height= 22.2;
// print "my name is $name, iam $age yrs old"."<br>";
// echo "my name is $name, iam $age yrs old";

// /*$globalvar="iam global";
// function testscope(){
//     $localvar='iam local';
//     echo $localvar ."<br>";
//     global $globalvar;
//     echo $globalvar;
// }
// testscope();*/

# constant
/*Only scalar values (int, float, string, bool) can be assigned to constants.
const must be used at the top level of the script or inside a class (not inside functions or conditionals).*/

/*Must start with a letter or underscore (not a number).
By convention, constants are written in UPPERCASE letters.*/

#define
/*define("full_name","aman");
define("age",34);
echo full_name, age."<br>";

#const
const ful_name='aman'."<br>";
echo ful_name;
class test{
    const title=124;
}
echo test::title;*/


#datatypes
// $int=42;
// echo $int;

// $float=45.3;
// echo $float;

// $st1="aman";
// $st2="kumar<br>and<br>singh.\n".
// "kjjhh.";
// echo $st2;
// $multiline = <<<'TEXT'
// This is line one.
// This is line two.
// This is line three.
// TEXT;

// echo $multiline;

// $true=true;
// $false=false;
// echo$true;
// echo $false

/*
#compound types -array

# indexed array
$fruits=["apple","banana","orange"];
$numbers=[2,3,4,5];
// echo $numbers;

#associative array(key value pair)
$person=[
    "name"=>"aman",
    "age"=>21,
    'city'=>'DOS'
];

#multidimensional array(array format)
$students=[
    ['name'=> 'aman', "grade"=>80],
    ['name'=> 'akash', "grade"=>67],
    ['name'=> 'suman', "grade"=>79]

];
echo $fruits[2];
echo $person["age"];
echo $students[1]['grade']
*/

# operators and expressions
# arithimetic operators
/*$a=10; $b=3;
echo $a+$b."<br>";
echo $a-$b."<br>";
echo $a*$b."<br>";
echo $a/$b."<br>";
echo $a%$b."<br>";
echo $a**$b."<br>";*/
# comperision operator
/*
var_dump() = Debugging tool to see type + structure + value
Works with all types: scalar, arrays, objects, etc.
Often used while testing or troubleshooting code
*/
// var_dump($a+$b)."<br>";  // Debugging complex data
// print_r( $a+$b)."<br>";  //  Human-readable output
/*var_dump($a==$b)."<br>"; //value
var_dump($a===$b)."<br>"; //value and type
var_dump($a!=$b)."<br>";  // not equal
var_dump($a>3)."<br>";    // grater than
var_dump($a<=5)."<br>";   //less than or equal

# logical operators
var_dump($a==$b)."<br>";
var_dump($a||$b)."<br>";
var_dump(!$a)."<br>";
var_dump($a xor $b)."<br>";
*/

# decision making statements
/*
# if-else statements
$time=12;
if ($time>=12 && $time<=15){
    echo "Good afternoon";
}elseif($time>24 && $time<12){
    echo "Good morning";
}elseif($time>=18 && $time<=24){
    echo "Good evening";
}else{
    echo "you are late";
}
echo "<br>";*/

/*
# ternary operator
$age=18;
$status=($age>=18)?"Eligible For Vote":"Not Eligible For Vote"
;
echo $status;
echo "<br>";*/


// $_GET--Superglobal array for URL query parameters
// $_GET['something'] will throw a warning if the key doesn't exist.
// $_GET['something'] ?? 'default' avoids that warning — that's why it's useful. 
/*
$name=$_GET['name']??"Guest";
echo $name;
echo "<br>";
# iteration construct
# for loop
for ($i=1; $i<=5; $i++){
    echo "iteration: $i <br>";
}*/


/*
# nested for loop
for ($i=1; $i<=3; $i++){
    for($j=1; $j<=3; $j++){
        echo"($i,$j)";
    }
    echo "<br>";
}*/


/*
# while loop
$count=1;
while($count<=5){
    echo "count: $count <br>";
    $count++;
}

$fruits=["Apple","Banana","Orange"];
$i=0;
while($i<count($fruits)){
    echo $fruits[$i]. "<br>";
    $i++;
}*/


/*
# do-while
$num=1;
do{
    echo "numbers: $num <br>";
    $num++;
}while($num<=5);

do{
    echo "1. option <br>";
    echo "2.option <br>";
    echo "3.exit <br>";
    $choice=3;
}while($choice!=3);*/


# foreach
# indexed array(use numeric indexed t store and get value)
/*$names=['aman','akash','arvind'];
foreach($names as $name){
    echo " $name <br>";
}*/



#associative array(key value pair)
// $person=[
//     "name"=>"aman",
//     "age"=>21,
//     'city'=>'DOS'
// ];
// foreach($person as $key => $value ){
//     echo"$key:$value <br>";
// }


// #multidimensional array(array format)
// $students=[
//     ['name'=> 'aman', "grade"=>80],
//     ['name'=> 'akash', "grade"=>67],
//     ['name'=> 'suman', "grade"=>79]
// ];
// foreach($students as $student){
//     foreach($student as $value){
//         echo  $value." ";  //&nbsp
//     }
//     echo "<br>";
// }

// echo "<h3>Comparison Operators</h3>";
// $x = 10;
// $y = 20;
// echo "x = $x, y = $y<br>";
// echo  "<br>". "x == y: " . var_export($x == $y) . "<br>";
// echo "x != y: " . var_export($x != $y, true) . "<br>";
// echo "x < y: " . var_export($x < $y, true) . "<br>";
// echo "x > y: " . var_export($x > $y, true) . "<br>";
// echo "x <= y: " . var_export($x <= $y, true) . "<br>";
// echo "x >= y: " . var_export($x >= $y, true) . "<br><br>";

// $text1 = "   Hello World   ";
// echo "Original: '$text1'<br>";
// echo "After trim(): '" . trim($text1) . "'<br><br>";

// // explode() - Split string into array
// $sentence = "PHP is a powerful language";
// $words = explode(" ", $sentence);
// print_r($words); // Array of words.

// // implode() - Join array into string
// $fruits = array("Apple", "Banana", "Orange");
// echo "implode():". implode(", ", $fruits)."<br>";
// // echo $result; // "Apple, Banana, Orange"

// // substr() - Extract substring
// $text = "Hello World";
// echo substr($text, 0, 5)."<br>"; // "Hello"

// // str_replace() - Replace text
// $original = "I love Java";
// $new = str_replace("Java", "PHP", $original);
// echo $new."<br>"; // "I love PHP"

// // strrev() - Reverse string
// echo strrev("Hello"); // "olleH"

// // strcmp() - Compare strings (0 if equal)
// $str1 = "Hello";
// $str2 = "Hello";
// echo strcmp($str1, $str2); // 0 (equal)







?>
<!DOCTYPE html>
<html>
<head>
    <title>GET vs POST Demo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
        }
        .form-container {
            background-color: #f9f9f9;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
        input[type="text"] {
            padding: 8px;
            margin: 5px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 8px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .result {
            background-color: #e7f3e7;
            padding: 15px;
            margin: 10px 0;
            border-left: 4px solid #4CAF50;
        }
    </style>
</head>
<body>
    <h1>GET vs POST Methods Demo</h1>
    
    <!-- GET Method Form -->
    <div class="form-container">
        <h2>GET Method (Search Form)</h2>
        <form action="" method="GET">
            <label>Search Query:</label>
            <input type="text" name="search" placeholder="Enter search term">
            <input type="submit" name="get_submit" value="Search (GET)">
        </form>
    </div>
    
    <!-- POST Method Form -->
    <div class="form-container">
        <h2>POST Method (Login Form)</h2>
        <form action="" method="POST">
            <label>Username:</label>
            <input type="text" name="username" placeholder="Enter username"><br>
            <label>Password:</label>
            <input type="text" name="password" placeholder="Enter password"><br>
            <input type="submit" name="post_submit" value="Login (POST)">
        </form>
    </div>
    
    <?php
    // Handle GET request
    if(isset($_GET['get_submit'])) {
        $search = htmlspecialchars($_GET['search']);
        echo "<div class='result'>";
        echo "<h3>GET Method Result:</h3>";
        echo "<p><strong>Search Term:</strong> $search</p>";
        echo "<p><strong>URL:</strong> " . $_SERVER['REQUEST_URI'] . "</p>";
        echo "<p><em>Note: Data is visible in URL - suitable for searches</em></p>";
        echo "</div>";
    }
    
    // Handle POST request
    if(isset($_POST['post_submit'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);
        echo "<div class='result'>";
        echo "<h3>POST Method Result:</h3>";
        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Password:</strong> " . str_repeat('*', strlen($password)) . "</p>";
        echo "<p><strong>URL:</strong> " . $_SERVER['REQUEST_METHOD'] . "</p>";
        echo "<p><em>Note: Data is hidden from URL - suitable for sensitive data</em></p>";
        echo "</div>";
    }
    ?>
</body>
</html>

