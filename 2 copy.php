<?php
/*echo "hello";
$str1="Double quotes string";
echo "$str1 <br>";
$str2='Single qoutes string';
echo "$str2 <br>";
$name="john";
$str3="Hello, $name";  //interpolation
echo "$str3 <br>";
$str4='Hello, $name';//no interpolation
echo "$str4 <br>";*/

/*
// accessing characters
$word="Hello";
echo $word[0]."<br>";
echo $word[4]."<br>";
echo $word[-2]."<br>";

*/

/*
// string concatenation
$first="Hello";
$second="World";
$combined=$first." ".$second;
echo $combined."<br>";
*/

/*
# essential string function
// Trimming Functions:
$text="    Hello World         \n";
// echo chop($text);//remove right side
// echo rtrim($text);// same as above
echo trim($text);//remove both side
echo ltrim($text);//left hand side
*/

/*
//case conversion functions
$text="Remove both Side";
echo strtoupper($text)."<br>";//uppercse
echo strtolower($text)."<br>";//lowercase
echo ucfirst($text)."<br>";//first chatcaterlower
echo ucwords($text)."<br>";// firt char. of each word
*/

/*
# string manipulation functions
// explode- split string into array
$data="apple,banana,orange";
$fruits=explode(",",$data);
print_r($fruits)."<br>";

*/

/*
//implode- join array into string
$arr=["apple","banana","orange"];
echo implode(", ",$arr)."<br>";
echo join("-",$arr)."<br>";*/

/*
//substr-exctract-substring
$name="Aman Kumar";
echo substr($name,0,6)."<br>";//Aman K
echo substr($name,6)."<br>";//umar
echo substr($name,-5,4)."<br>";//Kum
*/


/*
// str_replace- replace text
$name="Aman Kumar";
echo str_replace("Kumar","singh",$name)."<br>";
//str_repeat-repeat string
echo str_repeat("singh",3)."<br>";
//str_reverse-revrse string
echo strrev($name)."<br>";
//str_split-convert string to array
print_r (str_split($name,4))."<br>";

print_r(explode(" ",$name));
*/


# string comperison and search Functions:
// strcmp-binary safe string comparison
// echo strcmp("Hello","Hello")."<br>";
// echo strcmp("Hello","hello")."<br>";
// echo strcmp("hello","Hello")."<br>";
// //strcasecmp- case-insensitive comparison
// echo strcasecmp("Hello","hello")."<br>";
// //strlen-string length
// echo strlen("Hello World")."<br>";
// //strstr-find first occurance
// $email="username@gmail.com"."<br>";
// echo strstr($email,"@")."<br>";
// //strrchr-find last occurance
// $path="/home/user/file.txt";
// echo strrchr($path,"/")."<br>";
// //strpos-find position of 1st occurance
// $text="Hello World";
// echo strpos($text,"World")."<br>";
// echo strpos($text,"r")."<br>";
// //strrpos-find position of last occurance
// $text="Hello World";
// echo strrpos($text,"o")."<br>";
// echo strrpos($text,"l")."<br>";
// echo substr($text,"l")."<br>";




/*
🔸 Summary Table
Function / Operator	    Purpose	                    Case-Sensitive?
==, ===	                Compare strings	            Yes
strcmp()	            Compare two strings	        Yes
strcasecmp()	        Compare two strings	        No
strpos()	            Find position of substring	Yes
stripos()	            Find position of substring	No
strrpos()	            Find last position	        Yes
str_contains()	        Check if substring exists	Yes (PHP 8+)
str_starts_with()	    Starts with substring?	    Yes (PHP 8+)
str_ends_with()	        Ends with substring?	     (PHP 8+)
*/



# practical string example
//password strength checker
function checkPasswordStrength($password){
    $strength=0;
    if(strlen($password)>=8)$strength++;
    if(preg_match("/[a-z]/",$password))$strength++;
    if(preg_match("/[A-Z]/",$password))$strength++;
    if(preg_match("/[0-9]/",$password))$strength++;
    if(preg_match("/[^a-zA-Z0-9]/",$password))$strength++;

    return "strength: $strength";

}
echo checkPasswordStrength("Abc123!@#");




// email validation example
function validateEmail($email){
    $email=trim($email);
    if(strpos($email,"@")===false){
        return false;
    }
    $parts=explode("@",$email);
    if(count($parts)!=2){
        return false;
    }
    return strlen($parts[0])>0 && strlen($parts[1])>0;
}
echo validateEmail("indiaexplore40@gmail.com");
?>


<!-- form.html -->
<!DOCTYPE html>
<html>
<head>
    <title>$_REQUEST Example</title>
</head>
<body>
    <form method="post" action="2.php">
        Name: <input type="text" name="username"><br><br>
        Email: <input type="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
// request_example.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Using $_REQUEST to collect form data
    $name = $_REQUEST['username'];
    $email = $_REQUEST['email'];
}
?>
