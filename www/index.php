<?php

/**
 *Col->0 1 2 3 ...
 *Row  -------
 *0  | 0 1 0 1
 *1  | 1 1 0 1
 *2  | 0 0 1 1
 *3  | 0 1 0 1
 *...
 * 1D_Array[rows]
 * 2D_Array[rows][columns]
 */
// $calc_2d = array('0', '1', '0', '1');

// $calc = array(array('0', '1', '0', '1'),
//                    array('1', '1', '0', '1'),
//                    array('0', '0', '1', '1'),
//                    array('0', '1', '0', '1'));


// echo $calc[0][0];
// echo $calc[0][1];
// echo $calc[0][2];
// echo $calc[0][3];
// echo "<br>";
// echo $calc[1][0];
// echo $calc[1][1];
// echo $calc[1][2];
// echo $calc[1][3];
// echo "<br>";
// echo $calc[2][0];
// echo $calc[2][1];
// echo $calc[2][2];
// echo $calc[2][3];
// echo "<br>";
// echo $calc[3][0];
// echo $calc[3][1];
// echo $calc[3][2];
// echo $calc[3][3];
// echo "<br>";
// echo "<br>";

// foreach($calc as $array => $values) 
// {
//   foreach($values as $key => $value) 
//   {
//     echo "$value";
    
//   }
//   echo "<br/>";
// }


// echo "<br>";
// echo "<br>";

/**
 * 
 * 0 | 1 | 1 
 * ----------
 * 0 | 1 | 0 
 * ----------
 * 1 | 1 | 0 
 * 
 */

// $tiktak = array('0', '1', '1', '0', '1', '0', '1', '1', '0');


// echo $tiktak[0];
// echo "|";
// echo $tiktak[1];
// echo "|";
// echo $tiktak[2];
// echo "<br>";
// echo "--------";
// echo "<br>";
// echo $tiktak[3];
// echo "|";
// echo $tiktak[4];
// echo "|";
// echo $tiktak[5];
// echo "<br>";
// echo "--------";
// echo "<br>";
// echo $tiktak[6];
// echo "|";
// echo $tiktak[7];
// echo "|";
// echo $tiktak[8];
// echo "<br>";
// echo "<br>";
// echo "<br>";


// for($j=0; $j < count($tiktak); $j++) 
// {
  
//   if ($j < 2){ // If the variable j is less then 2 echo the variable tiktak //
//     echo $tiktak[$j];
//     echo "|";
//   }

//   if ($j == 2) {
//     echo $tiktak[$j];
//     echo "<br>";
//     echo "--------";
//   }

//   if ($j == 3) {
//     echo "<br>";
//     echo $tiktak[$j];
//     echo "|";
//   }

//   if ($j == 4) {
//     echo $tiktak[$j];
//     echo "|";
//   }

//   if ($j == 5) {
//     echo $tiktak[$j];
//     echo "<br>";
//     echo "--------";
//   }

//   if ($j == 6) {
//     echo "<br>";
//     echo $tiktak[$j];
//     echo "|";
//   }

//   if ($j == 7) {
//     echo $tiktak[$j];
//     echo "|";
//   }

//   if ($j == 8) {
//     echo $tiktak[$j];
//   }  

// }
 

// echo "<br>";
// echo "<br>";

// Sort this array in alphabetic order
// $arr = ["a","c","g","f","e","i","j","k","h","","d","b"];
// echo "HELLO";

// echo "<br>";
// echo strrev(" .dlrow olleH"); // Reverse string
// echo "<br>";
// echo str_repeat("Hip ", 2);
// echo "<br>";
// echo strtoupper("hooray!");
// echo "<br>";
// $lowered = strtolower("aNY # of Letters and Punctuation you WANT");
// echo $lowered;
// echo "<br>";
// $ucfixed = ucfirst("any # of letters and punctuation you want");
// echo $ucfixed;
// echo "<br>";
// print(abs(5-8));
// echo "<br>";
// print(5-8);
// $ucfirst = ucfirst(strtolower("aNY # of Letters and Punctuation you WANT"));
// echo"<br>";

// echo fix_names("WILLIAM", "henry", "gatES");
// function fix_names($n1, $n2, $n3)
// {
//   $n1 = ucfirst(strtolower($n1));
//   $n2 = ucfirst(strtolower($n2));
//   $n3 = ucfirst(strtolower($n3));
//   return $n1 . " " . $n2 . " " . $n3;
// }
// echo "<br>";
// $a1 = "WILLIAM";
// $a2 = "henry";
// $a3 = "gatES";
// echo $a1 . " " . $a2 . " " . $a3 . "<br>";
// fix_names($a1, $a2, $a3);
  

// include "guess.php";
// echo"<br>";
// include_once "guess.php";
// echo"<br>";
// require_once "guess.php";
// echo"<br>";
// $object = new User;
// print_r($object);
// // the method that a class needs in order to place an object onto a webserver // 
// class User 
// {
//     public $name, $password; // porperties   of the user object //num_ $
//     function save_user()
//     {
//       echo "Save User code goes here";
//     }
// }
/////////////////////////////////////////////////////////////////////
// include_once "room.php";
// include_once "bathroom.php";

// /////////////////////////////////////////////////////////////////////
// /**
//  * prints associative array 
//  * @param array $arr the array
//  * @param mixed $message [optional]
//  * @return void 
//  */
// function printAssociateArray(array $arr, $message)
// {
//   echo "<pre>";
//   echo "</br>$message";
//   foreach ($arr as $name => $value) {
//     echo "</br>$name:\t $value";
//   }
//   echo "</pre>";
// }
// /////////////////////////////////////////////////////////////////////
// $Alena = new bathroom();
// $Alena->setColor("red");
// $Alena->setwindow(1);  
// $Alena->setbed("double");
// $Alena->setdoor("Wood","white");
// $Alena->settv("samsung");
// $Alena->setfan(1);
// $Alena->setdesk("oakwood");
// $Alena-> setlamp("cylinder","ceramic","brown/red");
// $Alena->setDimension(14,13,10);
// $Alena->setsink("oval", "stone");
// $Alena->setbathtub("stone", "rectangle");
// $Alena->setshower("stone", "cyclinder");
// $Alena->settoilet("onepiece", "stone");
// $Alena->setcarpet("soft", "rectangle", "teal");
// print_r($Alena);
// echo "</br></br>";
// printAssociateArray($Alena->getlamp(),"");
// echo "</br></br>";
// echo "</br></br>";
// echo "</br></br>";
//////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
//   /**
//    * this function takes all of the letters of the string and makes them lowercase.
//    */
//   echo "</br></br>";
//   $lowered = strtolower("aNY # of Letters and Punctuation you WANT");
//   echo $lowered;
//   echo "</br></br>";
//   /**
//    * this function takes the first letter of the string and makes it uppercase
//    */
//   $ucfixed = ucfirst("any # of letters and punctuation you want");
//   echo $ucfixed;
//   echo "</br></br>";
//   /**
//    * this uses the function abs to take the original answer to 5-8 and print is absolute value onto display.
//    */
//   print(abs(5-8));
//   echo "</br></br>";
//   /***
//    * this function makes the the strings' first letters uppercase and also makes the 
//    * rest of the letters after it lowercase.
//    */
//   $names = correct_names("WILLIAM", "henry", "gatES");
//   echo $names[0] . " " . $names[1] . " " . $names[2];
//   function correct_names($n1, $n2, $n3)
//   {
//     $n1 = ucfirst(strtolower($n1));
//     $n2 = ucfirst(strtolower($n2));
//     $n3 = ucfirst(strtolower($n3));
//     return array($n1, $n2, $n3);
//   }
//   /**
//    * 
//    */
//   echo "</br></br>";
//   $a1 = "WILLIAM";
//   $a2 = "henry";
//   $a3 = "gatES";
//   echo $a1 . " " . $a2 . " " . $a3 . "<br>";
//   fix_names($a1, $a2, $a3);
//   echo $a1 . " " . $a2 . " " . $a3;
//   function fix_names(&$n1, &$n2, &$n3)
//   {
//     $n1 = ucfirst(strtolower($n1));
//     $n2 = ucfirst(strtolower($n2));
//     $n3 = ucfirst(strtolower($n3));
// }

$object = new User;
  print_r($object);

class User {
    public $name, $password;
    function save_user()
    {
      echo "Save User code goes here";
    }
}