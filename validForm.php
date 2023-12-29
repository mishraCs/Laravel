


<?php
//echo $_SERVER ['SERVER_SOFTWARE'];
$var1;
$go = 1;

// ============== time wish ===========
function timewish(){
    $name = $_POST['name'];
    date_default_timezone_set('Asia/Kolkata');
    $hour = date('H');
    
    if ($hour >= 5 && $hour < 12) {
        echo "Good morning $name!"."<br>";
    } elseif ($hour >= 12 && $hour < 18) {
        echo "Good afternoon $name!"."<br>";
    } elseif ($hour >= 18 && $hour < 22) {
        echo "Good evening! $name"."<br>";
    } else {
        echo "Good night $name!"."<br>";
    } 
}
 //timewish();


// ======================= to form===================
function toform() {
    $age = $_POST['age'];
     
    echo "Your age :$age " ."<br>";
    $country = $_POST['country'];

    if ($age >= 18 && $country == "India"){
        echo "You are eligible to vote"."<br>";
    } else {
       echo "You are not eligible to vote"."<br>";

    }

    $_get = $_POST['valufi'];
    $_post = $_POST['valuse'];
    
    $THIRD = $_get + $_post;
    echo "sum of two variable: $THIRD "."<br>";
    echo "My name is Aakash Mishra....! "."<br>";
}
//toform();

// ============= Loop in php ===============
// loop for
function FunctionName(){
    echo "<table border='1'>";
    for ($i = 1; $i <= 100; $i+=9) {
        for ($i = 1; $i <= 100; $i++) {
            echo "<td>" . $i ." </td>";
        }echo "</table> <br>";

    }

}

//FunctionName();

// loop while
function whilee() {
    $a = 1;
while($a<=5){
    echo "Hello world...!.<br>" ;
     $a++;
}
  
}
//whilee();

// do while loop;
function dowhilee(){
    $a = 1;
do {
echo $a."<br>";
  $a++;
}while($a<=5);

}
//dowhilee();

// ============  variable =================
//php global variable
    $x = 5;
    $y = 10;
    
    function myTest() {
    global $x, $y;
      
     echo $y = $x + $y; 
    } 
    //myTest();

//  static variable
function funstatoc() {
    static $var1 = 125;
    $a = 23;
    echo $sum =  $var1 +  $a;

    }
    //funstatoc();

// variable
 

// ============php data type;================
// integer;
function datatype() {
    $x = 5985; // int;
    $a = 10.365; //float;
    $y = "Hello World"; // string;

   var_dump($x)."<br>";
   var_dump($a);
   var_dump($y);
   }
   //datatype();

//============== current date =============
function datecmdy()
{
    $glovar = 10;
    echo gmdate ("M D Y");
} 
//datemdy();

// ============ valid ==================
function tranglev ()
{
    $cone1 = 60;
    $cone2 = 60;
    $cone3 = 60;
    $conefinal = $cone1+$cone2+$cone3;
    if ($conefinal == 180)
    {
        echo "Triangale is valid";
    }
}

//tranglev ();

function salary ()
{
    $name = $_POST['employen'];
    $SALARY = $_POST['salary'];
    $fnlsalary = $SALARY*2;

    echo "MR. $name your salary is $SALARY"."<br>";

    if ($SALARY >15000)
    {
        $bonus = $fnlsalary - $SALARY;
        echo "Congratulations Mr. $name your bonus is $bonus "."<br>";
    } else
    { echo "Take care ";
    }

    echo "Mr. $name, Now your total salary is  $fnlsalary";

}
//salary ();

function show()
{
    $year = 2023;
    $month = 2;
    $days;
    switch ($month) 
    {
        case 2:  $days = ($year % 4 == 4 ) ? 28 : 29;
        break;
        case 4;
        case 6;
        case 9;
        case 11; $days = 30;
    break;
    default : $days = 30;

        } 
        echo $days;

}
//show();

// ============ to check leap year
function leapyear(){
$year = $_POST['year'];
function is_leap_year($year) {
    if ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0))) {
        echo "$year is a leap year" ;
    } else {
        echo "$year is not a leap year" ;
    }
}
}
//leapyear(is_leap_year($year));

// any year which days count whate i want. if any days date 0000 for monday ;


// find the style on that is your ability according to your age
function casual()
{
    $name = $_POST['name'];
    $year = $_POST['age'];
     
    if ($year <= 6)
    {
        echo "child";
    } else if ($year >6 && $year <=100)
    {
        echo "man";
    }
   
}
//casual();

// write a programe to display cube, from 1 to till 10 no. 2 = 8 2*2 1
// $num1 = 1;
function cube()
{
    $num2 = 1;
    $num3 = 1;
    $num4 = 1;
    $num5 = 1;
    
    for($num1 = 1; $num1 <=10; $num1++)
    {
      $num5 = $num2 * $num3 * $num4;
    
      echo $num5."<br>";
      $num2++;
      $num3++;
      $num4++;
     
    }
}
//cube();

//=================== Date function ====================;
function datee()
{
    date_default_timezone_set('Asia/Kolkata');
    echo date("l jS \of F Y h:i:s A");
}
//datee();

// =========== php in array ====================;
// indexd array;
// associative array (key & value);
// multi dimentional array;

// hard;
function looparraye()
{
    $a[0] = 42;
    $a[1] = 12;
    $a[2] = 24;
    $a[3] = 22;
  echo "The length of array : ". count($a)."<br>";
    for ($b = 0; $b<count($a); $b++){
        echo $a[$b]."<br>";
    }
}
//looparraye();

// By array function;
function arrayfun()
{
    $a = array("aakash", "vikas", "badal", "bramhos");
    
    $country = array ("India"=> array ("village"=>"benipur", "post"=>"kurha"),
                 "Noida"=> array ("sector"=>15, "gali"=>25));
                 $c = array_merge($a, $country);
                // echo $c;
    for ($b = 0; $b<count($a); $b++){
        echo $a[$b]."<br>";
    }
}
//arrayfun();


// Easy;
function arrayy()
{
    $country = array ("India"=> array ("village"=>"benipur", "post"=>"kurha"),
                 "Noida"=> array ("sector"=>15, "gali"=>25));
echo  $country["India"]["village"] ;
}
//arrayy();

// multidimentional array;

function multeiarraye()
{
    $group  = array (
        array(23,22,18),
        array(12,15,13),
        array(14,5,2),
        array(23,17,15)
      );
          
      for ($first = 0; $first < 4; $first++) {
        echo "<p><b>Row number $first</b></p>";
        echo "<ol>";
        for ($second = 0; $second < 3; $second++) {
          echo "<li>".$group[$first][$second]."</li>";
        }
        echo "</ol>";
      }
}
//multeiarraye();

//sortarray;
function sortarray ()
{
    $a = array("aakash", "vikas", "badal", "bramhos");
    sort($a); 
    for ($first = 0; $first < 4; $first++) {
        $b = $first;
        echo $b."=>";
       echo $a[$first]."<br>";
    }
}

//sortarray ();

// rsort;
function rsortarray ()
{
    $a = array("aakash", "aakash", "vikas", "badal", "bramhos");
   // rsort($a);
  print_r(array_count_values($a)); 
    //array_count_values("aakash");
    for ($first = 0; $first < 5; $first++) {
        $b = $first;
        echo $b."=>";
       echo $a[$first]."<br>";
    }
}
//rsortarray ();
//arrayflip;
function arrayf()
{
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a = array_flip( $a1);
    echo $a;
}
//arrayf();

//  the array_push() is a php function that are use to add one or more element at the end of an array;
function arraypush ()
{
    $a = array("aakash", "aakash", "vikas", "badal", "bramhos");
    array_push($a, "bill", "off");
    $b = array("mango", "grapes", "papaya", "guvava");
    print_r($a);
    echo "<br>";
    print_r(array_merge($a,$b));
    echo "<br>";
}
//arraypush ();

// array function which is execute the boolean value;
function arrayexit ()
{
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");

    if (array_key_exists("a", $a1))
    {
       echo "a";
    
    }
     else
    {
       echo "v";
    }
}
//arrayexit ();

// the in_array function searches an array for a specific value;
// note - if the search parameter is a string and the type parameter is set to true the search is case_sensitive;

//======== php program to calculate and display string vowels and consonants ============
function calvovcons ()
{
    $string = $_POST["name"];
    $vowels = 0;
    $consonants = 0;
$a = 0;
$i = 0;
$e = 0;
$o = 0;
$u = 0;
$c = 0;
    
    // for ($i = 0; $i < strlen($string); $i++) {
    //     if (stripos("aeiou", $string[$i]) !== false) {

    //         $vowels++;
    //     } else {
    //         $consonants++;
    //     }
    // }
    // echo "The string contains " . $vowels . " vowels and " . $consonants . " consonants.";
    for ($v = 0; $v < strlen($string); $v++){
        if (stripos("aA", $string[$v]) !== false){
            $a++;
        }else if (stripos("eE", $string[$v]) !== false){
            $e++;
        }else if (stripos("iI", $string[$v]) !== false){
            $i++;
        }else if (stripos("oO", $string[$v]) !== false){
            $o++;
        }else if (stripos("uU", $string[$v]) !== false){
            $u++;
        }else {
            $c++;
        }
    }
    echo "a". $a."<br>";
    echo "e". $e."<br>";
    echo "i". $i."<br>";
    echo "o". $o."<br>";
    echo "u". $u."<br>";
    echo "All consonants  in this string :". $c."<br>";
    $all_vov = $a+$e+ $i+ $o+ $u; 
    echo "All vovel in this string:".$all_vov;
}
//calvovcons ();

class Employee
{
  public $name;
  public $slary;

    function __instantiated ()
    {
        echo "Hello wold";
    }
}
$aakash = new Employee();





  ?>




 


