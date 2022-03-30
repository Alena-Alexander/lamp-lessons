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
//  /.;π¬ik,j,l./
//     $n1 = ucfirst(strtolower($n1));
//     $n2 = ucfirst(strtolower($n2));
//     $n3 = ucfirst(strtolower($n3));
// }

  //  $object1       = new User();
  //  $object1->name = "Alice";
  // $object2       = $object1;
  //  $object2->name = "Amy";
  // echo "object1 name = " . $object1->name . "<br>";
  // echo "object2 name = " . $object2->name;
  // class User {
  //    public $name;
  // }

// $object1       = new User();
// $object1->name = "Alice";
// $object2       = clone $object1;
// $object2->name = "Amy";
// echo "object1 name = " . $object1->name . "<br>";
// echo "object2 name = " . $object2->name;
// class User
// {
//   function __destruct()
//   {
//     // Destructor code goes here
//   }
// }

// $object = new User;
// $object->password = "secret";
// echo $object->get_password();
// class User
//   {
//     public $name, $password;

//     function get_password()
//     {
//       return $this->password;
//     }
// }

// $object1       = new User();
// $object1->name = "Alice";
// echo $object1->name;
// class User {}
// class Test
// {
//     public $name  = "Paul Smith"; // Valid
//     public $age   = 42; // valid
//     public $time  = time(); // invalid
//     public $score = $level * 2; //invalid
// }

// Translate::lookup();
//   class Translate
//   {
//     const ENGLISH = 0;
//     const SPANISH = 1;
//     const FRENCH  = 2;
//     const GERMAN  = 3;
//     // ...
//     static function lookup()
//     {
//       echo self::SPANISH;
//     }
// }

// class Example
//   {
//     var $name   = "Michael"; // Same as public but deprecated
//     public $age = 23;        // Public property
//     protected $usercount;    // Protected property
//     private function admin() // Private method
//     {
//       // Admin code goes here
//     }
// }

// User::pwd_string();
// class User 
// {
//     static function pwd_string()
//     {
//       echo "Please enter your password";
//     }
// }

// $temp = new Test();
//   echo "Test A: " . Test::$static_property . "<br>";
//   echo "Test B: " . $temp->get_sp()        . "<br>";
//   echo "Test C: " . $temp->static_property . "<br>";

// class Test 
//  {
//     static $static_property = "I'm static";

//     function get_sp()
//     {
//        return self::$static_property;
//     }
//  } 

//   $object           = new Subscriber;
//   $object->name     = "Fred";
//   $object->password = "pword";
//   $object->phone    = "012 345 6789";
//   $object->email    = "fred@bloggs.com";
//   $object->display();

// class User 
// {
//     public $name, $password;

//     function save_user()
//     {
//       echo "Save User code goes here";
//     }
// }
//   class Subscriber extends User
//   {
//     public $phone, $email;

//     function display()
//     {
//       echo "Name:  " . $this->name     . "<br>";
//       echo "Pass:  " . $this->password . "<br>";
//       echo "Phone: " . $this->phone    . "<br>";
//       echo "Email: " . $this->email;
//     } 
// }

// $object = new Son;
// $object->test();
// $object->test2();

// class Dad 
// {
//   function test()
//   {
//     echo "[Class Dad] I am your Father<br>";
//   }
// }

// class Son extends Dad
// {
//   function test()
//   {
//     echo "[Class Son] I am Luke<br>";
//   }
// function test2()
// {
//   parent::test();
// }
// } 

// $object = new Tiger();
//   echo "Tigers have...<br>";
//   echo "Fur: " . $object->fur . "<br>";
//   echo "Stripes: " . $object->stripes;
//   class Wildcat
//   {
//     public $fur; // Wildcats have fur
//     function __construct()
//     {
//       $this->fur = "TRUE";
//     }
//   }
//   class Tiger extends Wildcat
//    {
//     public $stripes; // Tigers have stripes
//     function __construct()
//     {
//       parent::__construct(); // Call parent constructor first
//       $this->stripes = "TRUE";
//     }
// } 

// class User
//   {
//     final function copyright()
//     {
//       echo "This class was written by Joe Smith";
//     }
//   } 

// $object = new user();
// print_r($object);

// class user
// {
//   public $age, $name;
//   function save_user($age, $name);
//   {
//     this-> age = $age;
//     this-> name = $name;
//     echo "Users' info is saved..";
//   }
// }
// class User
// {
//   public $name, $password;

//   /**
//    * creates the object youve created for
//    * @param mixed $username 
//    * @param mixed $password 
//    * @return void 
//    */
//   public function __construct($username = null,  $password = null)
//   {
//     $this->name = $username;
//     $this ->password = $password;
//   }
//   /**
//    * Saves the username and password.
//    * @param mixed $username 
//    * @param mixed $password 
//    * @return void 
//    */
//   function save_user($username, $password)
//   {
//     $this->name = $username;
//     $this->password = $password;
//     echo "Save successful...<br>";
//   }
// }


//  $object = new User("john", "mypass");

// print_r($object); echo "<br>";

// $object->save_user("nick", "mypass");

// print_r($object); echo "<br>";

// /**
//  * This class creates a CUP. I am not the real cup but a blueprint of 
//  * how to create the cup in code.
//  * @package Cup
//  */
// class Cup {
//   private $height, $width, $diameter, $color, $materials;
//   private bool $handle;
// /**
//  * A function that allows you to add values to the properties of an object
//  * @param string $height 
//  * @param string $width 
//  * @param string $diameter 
//  * @param string $handle 
//  * @param string $color 
//  * @param string $materials 
//  * @return void 
//  */
//   public function __construct($height = "", $width = "", $diameter = "", $handle = "", $color = "", $materials =  "")
//   {
//     $this->height = $height;
//     $this->width = $width;
//     $this->diameter = $diameter;
//     $this->handle = $handle;
//     $this->color = $color;
//     $this->materials = $materials;
//   }
//   /**
//    * An easy way to print the objects parameters but more neatly.
//    * @return string 
//    */
//   public function __toString()
//   {
//     return @"Cup - <br>
//     {<br>
//       Height: $this->height inches, <br>
//       Width: $this->width inches, <br>
//       Diameter: $this->diameter inches, <br>
//       Handle: $this->handle, <br>
//       Color: $this->color <br>
//       Materials: $this->materials <br>
//     }";
//   }
// }



// $mug2 = new Cup(5, 4, 3, true, "blue", "glass");


// printf("<br><br>");
// printf($mug2);

//   $object1       = new User();
//   $object1->name = "Alice";
//   $object2       = $object1;
//   $object2->name = "Amy";

//   echo "object1 name = " . $object1->name . "<br>";
//   echo "object2 name = " . $object2->name;

// class User {
//     public $name;
//   }

$object = new picture;
print_r($picture);

class picture
{
    public $size;
    public $image;
    public $filter;

    function set_size($size){
      $this->size = $size;
    }

    function get_size(){
      return $this-> size;
    }

    function set_image($image) {
      $this->image=$image;
    }

    function get_image() {
      return $this->image;
    }

    function set_filter($filter) {
      $this->filter=$filter;
    }

    function get_filter() {
      return $this->filter;
    }
}

$size = new picture();
$image = new picture();
$filter = new picture();
$size->set_size("medium");
$image->set_image("smol");
$filter->set_filter("blackandwhite");

echo $size->get_size();
echo "<br>";
echo $image->get_image();
echo "<br>";
echo $filter->get_filter();