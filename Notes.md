# Learning PHP Notes


---

### Assets inside of www container
- php manual: /usr/local/php
- php php.ini-[ development | production ]: /usr/local/etc/php
- php binary: /usr/local/bin

---

## Basic CommandLine commands

```bash
cd: cd [-L|[-P [-e]] [-@]] [dir]
    Change the shell working directory.    
    Change the current directory to DIR.  The default DIR is the value of the
    HOME shell variable.

ls: ls [OPTION]... [FILE]...
    List information about the FILEs (the current directory by default).
    Sort entries alphabetically if none of -cftuvSUX nor --sort is specified.

pwd: pwd [-LP]
    Print the name of the current working directory.

```

---
---

<br/>

<br/><br/>

---
---
# Chapter 3 Introduction to PHP
PHP is the language that you use to make the server
generate dynamic output.

## Incorporating PHP Within HTML
A process of where you include php into html language or code as long as its between the php closing and opening tags.
### php closing opening and closing tag

```php
<?php
echo "Hello world";
?>

or 

<?
echo "Hello world";
?>
```

## Basic Syntax
### Semicolons
```php
$x += 10;
```
### The $ symbol
you must place a $ in front of all variables. This is required to make
the PHP parser faster, as it instantly knows whenever it comes across a variable.
```php
<?php
$mycounter = 1;
$mystring = "Hello";
$myarray = array("One", "Two", "Three");
?>
```
## Variables
### String variables
Imagine you have a matchbox on which you have written the word username. You
then write Fred Smith on a piece of paper and place it into the box

### Your first php statement
```php
$username = "Fred Smith";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;
```
### Numeric Variable
A variable that contains a number.

## Arrays
An array is a special variable, which can hold more than one value at a time.

### Two-dimensional arrays
A two-dimensional array is an array of arrays.

### Defining a two-dimensional array
```php
$oxo = array(array('x', ' ', 'o'),
array('o', 'o', 'x'),
array('x', 'o', ' '));
```
## Variable-naming rules
• Variable names, after the dollar sign, must start with a letter of the alphabet or the _ (underscore) character.

• Variable names can contain only the characters a-z , A-Z , 0-9 , and _ (underscore).

• Variable names may not contain spaces. If a variable name must comprise more than one word, a good idea is to separate the words with the _ (underscore) char‐acter (e.g., $user_name ).

• Variable names are case-sensitive. The variable $High_Score is not the same as the variable $high_score .

## Operators
Operators are used to perform operations on variables and values.

### Arithmetic operators
Opertors that are used to perform mathematics.


### Table 3-1. Arithmetic operators


| Operator | Description | Example |
| :--- | :--- | :--- |
| + | Addition | $j + 1 |
| - | Subtraction | $j - 6 |
| * | Multiplication | $j * 11 |
| / | Division | $j / 4|
| % | Modulus (the remainder after a division is performed) | $j % 9 | 
| ++ | Increment | ++$j |
| -- | Decrement | --$j |
| ** | Exponentiation (or power) | $j**2 |

<br/><br/>

### Assignment Operators
opertors that are used to assign values to variables.

### Table 3-2. Assignment operators


| Operator | Example | Equivalent to |
| :--- | :--- | :--- |
| = | $j = 15 | $j = 15 |
| += | $j += 5 | $j = $j + 5 |
| -= | $j -= 3 | $j = $j - 3 |
| *= | $j *= 8 | $j = $j * 8 |
| /= | $j /= 16 | $j = $j / 16 |
| .= | $j .= $k | $j = $j . $k |
| %= | $j %= 4 | $j = $j % 4 |

<br/><br/>

### Comparison Operaters
Opertors that can be used inside of a construct like an if statement to compare things.

### Table 3-3. Comparison operators


| Operator | Description | Example |
| :--- | :--- | :--- |
| == | Is equal to | $j == 4 |
| != | Is not equal to | $j != 21 |
| > | Is greater than | $j > 3 |
| < | Is less than | $j < 100 |
| >= | Is greater than or equal to | $j >= 15 |
| <= | Is less than or equal to | $j <= 8 |
| <> | Is not equal to to | $j <> 23 |
| === | Is identical to to | $j === "987" |
| !== | Is not identical to to | $j !== "1.2e3" |

<br/><br/>

### Logical operators
An operators that functions by using logic.
### Table 3-4. Logical operators


| Operator | Description | Example |
| --- | --- | --- |
| && | And | $j == 3 && $k == 2 |
| and | Low-precedence and | $j == 3 and $k == 2 |
| 
| \|\| | Or | $j < 5 || $j > 10 |
| or | Low-precedence or | $j < 5 or $j > 10 |
| ! | Not | ! ($j == $k) |
| xor | Exclusive or | $j xor $k |

<br/><br/>


### Table 3-5. PHP’s magic constants

| Magic Constant | Description |
| --- | --- |
| __LINE__ | The current line number of the file. |
| __FILE__ | The full path and filename of the file. If used inside an include , the name of the included file is returned. Some operating systems allow aliases for directories, called symbolic links; in __FILE__ these are always changed to the actual directories. |
| __DIR__ | The directory of the file. (Added in PHP 5.3.0.) If used inside an include , the directory of the included file is returned. This is equivalent to dirname(__FILE__) . This directory name does not have a trailing slash unless it is the root directory. |
| __FUNCTION__ | The function name. (Added in PHP 4.3.0.) As of PHP 5, returns the function name as it was declared (case-sensitive). In PHP 4, its value is always lowercase. |
| __CLASS__ | The class name. (Added in PHP 4.3.0.) As of PHP 5, returns the class name as it was declared (case-sensitive). In PHP 4, its value is always lowercased. |
| __METHOD__ | The class method name. (Added in PHP 5.0.0.) The method name is returned as it was declared (case-sensitive). |
| __NAMESPACE__ | The name of the current namespace. (Added in PHP 5.3.0.) This constant is defined at compile time (case-sensitive). |

<br/><br/>

### Variable Assignment
The syntax to assign a value to a variable.

### Variable incrementing and decrementing
A syntax that involves you increasing and decreasing the variable using an operator.

### String concatenation
A string that involves you puttingm1 string next to another using a period.

### String types
If you wish to assign a literal string, preserving the exact contents, you
should use single quotation marks (apostrophes)

On the other hand, when you want to include the value of a variable inside a string,
you do so by using double-quoted strings


### Escaping characters
A sign used to tell the sytem to treat a character literally

### Multiple-Line Commands
A command that involves you putting multiple between quotation marks.

### Example 3-6. A multiline string echo statement
```php
$author = "Steve Ballmer";
echo "Developers, developers, developers, developers,developers,
developers, developers, developers, developers!
- $author.";
```

### Example 3-7. A multiline string assignment
```php
$author = "Bill Gates";

$text = "Measuring programming progress by lines of code is like
Measuring aircraft building progress by weight.
- $author.";
```
### Example 3-8. Alternative multiline echo statement
```php
$author = "Brian W. Kernighan";

echo <<<_END
Debugging is twice as hard as writing the code in the first place. Therefore, if you write the code as cleverly as possible, you are, by definition, not smart enough to debug it.

    - $author.
_END;
```

### Example 3-9. A multiline string variable assignment
```php
$author = "Scott Adams";
$out = <<<_END
Normal people believe that if it ain't broke, don't fix it.
Engineers believe that if it ain't broke, it doesn't have enough
features yet.
- $author.
_END;
echo $out;
```

### Variable Typing
This means that variables do not have to be
declared before they are used, and that PHP always converts variables to the type
required by their context when they are accessed.

### Example 3-11. Automatically converting a string to a number
```php
$pi    = "3.1415927";
$radius = 5;
echo $pi * ($radius * $radius);
```

### Constants
Constants are similar to variables, holding information to be accessed later, except that they are what they sound like—constant. In other words, once you have defined one, its value is set for the remainder of the program and cannot be altered.

### Predefined Constant
| Magic constant | Description |
|---|---|
| \__LINE__ | The current line number of the file. |
| \__FILE__ | The full path and filename of the file. If used inside an include , the name of the included file is returned. Some operating systems allow aliases for directories, called symbolic links; in __FILE__these are always changed to the actual directories. |
| \__DIR__ | The directory of the file. (Added in PHP 5.3.0.) If used inside an include , the directory of the included file is returned. This is equivalent to dirname(__FILE__) . This directory name does not have a trailing slash unless it is the root directory. |
| \__FUNCTION__ | The function name. (Added in PHP 4.3.0.) As of PHP 5, returns the function name as it was declared (case-sensitive). In PHP 4, its value is always lowercase. |
| \__CLASS__ | The class name. (Added in PHP 4.3.0.) As of PHP 5, returns the class name as it was declared (case-sensitive). In PHP 4, its value is always lowercased. |
| \__METHOD__ | The class method name. (Added in PHP 5.0.0.) The method name is returned as it was declared (case-sensitive). |
| \__NAMESPACE__ | The name of the current namespace. (Added in PHP 5.3.0.) This constant is defined at compile tim (case-sensitive). |

<br/><br/>

### The Difference Between the echo and print Commands

print is a function-like construct that takes a single parameter and
has a return value (which is always 1 ), whereas echo is purely a PHP language con‐
struct. Since both commands are constructs, neither requires parentheses.

### Functions
Functions separate sections of code that perform a particular task.

### Example 3-12. A simple function declaration
```php
<?php
function longdate($timestamp)
{
return date("l F jS Y", $timestamp);
}
?>
```
### Variable Scope
A process of when you tell php if you want the variable $temp to be used only
inside a particular function and to forget it was ever used when the function returns.
In fact, this is the default scope for PHP variables.

### Local variables
Local variables are variables that are created within, and can be accessed only by, a
function.

### Example 3-13. An expanded version of the longdate function
```php
function longdate($timestamp)
{
$temp = date("l F jS Y", $timestamp);
return "The date is $temp";
}
```
### Example 3-14. This attempt to access $temp in function longdate will fail
```php
$temp = "The date is ";
echo longdate(time());
function longdate($timestamp)
{
return $temp . date("l F jS Y", $timestamp);
}
```

### Example 3-15. Rewriting to refer to $temp within its local scope fixes the problem
```php
$temp = "The date is ";
echo $temp . longdate(time());
function longdate($timestamp)
{
return date("l F jS Y", $timestamp);
}
```

### Example 3-16. An alternative solution: passing $temp as an argument
```php
$temp = "The date is ";
echo longdate($temp, time());
function longdate($text, $timestamp)
{
return $text . date("l F jS Y", $timestamp);
}
```

### Global variables
A variable where all of its code will be able to be accessed.

### Static variables
A variable that involves it being in function except for the fact that you
don’t want any other parts of your code to have access to, but you would also like to
keep its value

---
---

---
---

# CHAPTER 4

## Expressions
An `expression` is a combination of values, variables, operators, and functions that
results in a value.

### Example:
```php
y = 3 (|2x| + 4)
```

Which in PHP would be:
```php
$y = 3 * (abs(2 * $x) + 4);
```
## TRUE or FALSE?
A Boolean value is used to determine if whether an expression is true or false.

### Example 4-1:
```php
<?php // test2.php
echo "a: [" . TRUE . "]<br>";
echo "b: [" . FALSE . "]<br>";
?>
```
 ### Example 4-2:
```php
<?php
    echo "a: [" . (20 < 9) . "]<br>";
    echo "b: [" . (5 == 6) . "]<br>";
    echo "c: [" . (1 == 0) . "]<br>";
    echo "d: [" . (1 == 1) . "]<br>";
?>
```
## Literals and Variables
These are the most basic elements of programming, and the building blocks of
expressions. A literal simply is something that evaluates to itself. 
And a variable evaluates the value it's been assigned to.

### Example 4-3:
```php
$myname = "Brian";
$myage = 37;
echo "a: " . 73 . "<br>"; //Numeric literal
echo "b: " . "Hello" . "<br>"; //String literal
echo "c: " . FALSE . "<br>"; //Constant literal
echo "d: " . $myname . "<br>"; //String Variable
echo "e: " . $myage  . "<br>"; //Numeric Variable
```

### Example 4-4:
```php
$days_to_new_year = 366 - $day_number; // Expression
if ($days_to_new_year < 30)
{
echo "Not long now till new year";
}
// Statement
```

## Operators
Symbols that offer a lot of powerful `operators` of different types like arithmetic, string, logical,
assignment, comparison, and more.

<br/><br/>

### Table 4-1. PHP operator types

---
| Operator | Description | Example |
| --- | --- | --- |
| Arithmetic | Basic mathematics | $a + $b |
| Array | Array union | $a + $b |
| Assignment | Assign values | $a = $b + 23 |
| Bitwise | Manipulate bits within bytes | 12 ^ 9 |
| Comparison | Compare two values | $a < $b |
| Execution | Execute contents of backticks | \`ls -al` |
| Increment/decrement | Add or subtract 1 | $a++ |
| Logical | Boolean | $a and $b |
| String  | Concatenation | $a . $b |
---

<br/><br/>

## Operator Precedence
Operator precedence determines how operators are parsed concerning each other.

### Example 4-5. Three equivalent expressions
```php
1 + 2 + 3 - 4 + 5
2 - 4 + 5 + 3 + 1
5 + 2 - 4 + 1 + 3
```
### Example 4-6. Three expressions that are also equivalent
```php
1 * 2 * 3 / 4 * 5
2 / 4 * 5 * 3 * 1
5 * 2 / 4 * 1 * 3
```
### Example 4-7. Three expressions using operators of mixed precedence
```php
1 + 2 * 3 - 4 * 5
2 - 4 * 5 * 3 + 1
5 + 2 - 4 + 1 * 3
```
### Example 4-8. Three expressions showing implied parentheses
```php
1 + (2 * 3) - (4 * 5)
2 - (4 * 5 * 3) + 1
5 + 2 -0 12.914 + (1 * 3)
```

### Table 4-2. The precedence of PHP operators (high to low)
---
| Operator(s) | Type |
| -- | -- | 
| () | Parentheses |
| ++ -- | Increment/decrement |
| ! | Logical |
| * / % | Arithmetic |
| + - . | Arithmetic and string |
| << >> | Bitwise | 
| < <= > >= <> | Comparison |
| == != === !== | Comparison |
| & | Bitwise (and references) |
| ^ | Bitwise |
| \| | Bitwise |
| && | Logical | 
| \|\| |  logical |
| ? : | ternary |
| = += -= *= /= .= %= &= != ^= <<= >>= |Assignment 
| and | logical | 
| xor | logical |
|or | logical |
---

## Associativity
Operators that require processing from right to left, and this direction of processing.
<br/><br/>
### Table 4-3. Operator associativity
---
| Operator | Description | Assosiativity | 
| --- | --- | --- |
| < <= >= == != === !== <> | Comparison | None | 
| ! | Logical not | right |
| ~ | Bitwise not | Right |
| ++ -- | increment amd decrement | Right |
| (int) | cast to an integer | Right |
| (double) (float) (real) | Cast to a floating-point number | Right |
| (string) | Cast to a string | Right |
| (array) | Cast to an array | Right |
| (object) | Cast to an object | Right |
| @ | inhibit error reporting | Right |
| = += -= *= /= | Assignment | Right |
| .= %= &= |= ^= <<= >>= | Assignment | Right |
|  + | Addition and unary plus | Left |
| - | Subtraction and negation | Left |
| * | Multiplication | Left |
| / | division | left |
| % |  modulus | left | 
| . | string contatenation | left |
| << >> & ^ \| | bitwise | left |
| ?: | ternary | left | 
| \|\| && and or xor | logical | left |
| , | separator | left |
---

<br/><br/>

# Relational Operators
operators that test two operands
and return a Boolean result of either TRUE or FALSE . 

## Equality 
the equality operator is == (two
equals signs).


### Example 4-12. Assigning a value and testing for equality
```php
<?php
$month = "March";
if ($month == "March") echo "It's springtime";
?>
```
### Example 4-13. The equality and identity operators
```php
<?php
$a = "1000";
$b = "+1000";
if ($a == $b) echo "1";
if ($a === $b) echo "2";
?>
```

### Example 4-14. The inequality and not-identical operators
```php
<?php
$a = "1000";
$b = "+1000";

if ($a != $b) echo "1";
if ($a !== $b) echo "2";
?>
```
## Comparison operators
comparison operators that you can test for more than just equality and inequality.

### Example 4-15. The four comparison operators
```php
<?php
$a = 2; $b = 3;

if ($a > $b) echo "$a is greater than $b<br>";
if ($a < $b) echo "$a is less than $b<br>";
if ($a >= $b) echo "$a is greater than or equal to $b<br>";
if ($a <= $b) echo "$a is less than or equal to $b<br>";
?>
```

## Logical operators
operators produce that true or false results  known as
Boolean operators.

### Table 4-4. The logical operators
---
| Logical operator | Description |
| --- | -- |
| AND | RUE if both operands are TRUE |
| OR | TRUE if either operand is TRUE |
| XOR | TRUE if one of the two operands is TRUE |
| ! (NOT) | TRUE if the operand is FALSE , or FALSE if the operand is TRUE |
---

<br/><br/>

### Example 4-16. The logical operators in use
```php
$a = 1; $b = 0;

echo ($a AND $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a XOR $b) . "<br>";
echo !$a . "<br>";
```

### Example 4-17. A statement using the OR operator
```php
if ($finished == 1 OR getnext() == 1) exit;
```
<br/><br/>

### Table 4-5. All possible PHP logical expressions
---
| Inputs |    | operators | and | results |
| --- | --- | --- | --- | --- |
| a | b | AND | OR | XOR |
| TRUE | TRUE | TRUE | TRUE | FALSE |
| TRUE | FALSE | FALSE | TRUE | TRUE |
| FALSE | TRUE | FALSE | TRUE | TRUE |
| FALSE | FALSE | FALSE | FALSE | FALSE |
---

## Conditionals
A function that enables you to ask questions about certain things and respond to the answers you get in different ways.

## The if statement
A statement that automatically determines if a expression is true or false.

### Example 4-19. An if statement with curly braces

```php
<?php
if ($bank_balance < 100)
{
$money
= 1000;
$bank_balance += $money;
}
?>
```

## The else Statement
The statement that would execute if the 1st were to be false.

### Example 4-20. An if...else statement with curly braces
```php
<?php
if ($bank_balance < 100)
{
$money= 1000;
$bank_balance += $money;
}
else
{
$savings+= 50;
$bank_balance -= 50; 

}
?>
```
## The elseif Statement
A statement that would be executed if the 2nd statement were to be false.

### Example 4-21. An if...elseif...else statement with curly braces
```php
<?php
if ($bank_balance < 100)
{
$money= 1000;
$bank_balance += $money;
}
elseif ($bank_balance > 200)
{
$savings+= 100;
$bank_balance -= 100;
}
else
{
$savings+= 50;
$bank_balance -= 50;
}
?>
```

## The switch Statement

A statement that envolves a variable or a result of an expression having multiple values that would each trigger a different activity.

### Example 4-22. A multiple-line if...elseif...else statement
```php
if     ($page == "Home") echo "You selected home";
elseif ($page == "About") echo "You selected About";
elseif ($page == "News") echo "You selected News";
elseif ($page == "Login") echo "You selected Login";
elseif ($page == "Links") echo "You selected Links";
else                      echo "Unrecognized selection";
```

### Example 4-23. A switch statement
```php
  switch ($page)
  {
    case "Home":
        echo "You selected Home";
        break;
    case "About":
        echo "You selected About";
        break;
    case "News":
        echo "You selected News";
        break;
    case "Login":
        echo "You selected Login";
        break;
    case "Links":
        echo "You selected Links";
        break;
  }
```
## Breaking out
A method used to break out of switch command involving a break command telling PHP to exit the switch and move on to another statement.

## Default action
An action used in switch statements for when none of the conditions are met.
<br/><br/>

### Example 4-24. A default statement to add to Example 4-23 
```PHP
default:
    echo "Unrecognized selection";
    break;
```
<br/><br/>

## Alternative syntax
An expression that includes you replacing the curly brace in a switch statement with a single colon and the final curly brace with an endswitch command.

### Example 4-25. Alternate switch statement syntax
```php
   switch ($page):
    case "Home":
        echo "You selected Home";
        break;
    // etc
    case "Links":
        echo "You selected Links";
        break;
   endswitch;
```

## The ? Operator
An operator used for when you want to avoid verbosity of the if and else operators.

### Example 4-26. Using the ? operator
```php
  echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
```

### Example 4-27. Assigning a ? conditional result to a variable
```php
 $enough = $fuel <= 1 ? FALSE : TRUE;
```

## Looping
Code that you can use to execute a code block multiple times.

## while loops
Loops that you can use to execute a block code as long as its been executed before.

### Example 4-28. A while loop
```php
$fuel = 10;
while ($fuel > 1)
{
// Keep driving...
echo "There's enough fuel";
}
```
### Example 4-29. A while loop to print the 12 times table
```php
$count = 1;
while ($count <= 12)
{
echo "$count times 12 is " . $count * 12 . "<br>";
++$count;
}
```

## Do while loops
A loop that will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.

### Example 4-31. A do...while loop for printing the 12 times table
```php
$count = 1;
do
echo "$count times 12 is " . $count * 12 . "<br>";
while (++$count <= 12);
```
## For loops
A loop that is used for iterating over a sequence.

### Example 4-33. Outputting the 12 times table from a for loop
```php
for ($count = 1 ; $count <= 12 ; ++$count)
echo "$count times 12 is " . $count * 12 . "<br>";
```
## Breaing out of a loop
Code the terminates a loop allowing the program to move on to the next statement of the loop.

### Example 4-35. Writing a file using a for loop with error trapping
```php
$fp = fopen("text.txt", 'wb');
for ($j = 0 ; $j < 100 ; ++$j)
{
$written = fwrite($fp, "data");
if ($written == FALSE) break;
}
fclose($fp);
```
## The continue Statement
The continue statement is like a break statment except for the fact that it instructs PHP to stop processing the current iteration of the loop and move right to its next iteration.

### Example 4-36. Trapping division-by-zero errors using continue
```php
$j = 10;
while ($j > -10)
{
$j--;
if ($j == 0) continue;
echo (10 / $j) . "<br>";
}
```

## Implicit and Explicit Casting
PHP langauage that automatically converts values from one type to another when ever required.

### Example 4-37. This expression returns a floating-point number
```php
$a = 56;
$b = 12;
$c = $a / $b;

echo $c;
```

### Table 4-6. PHP’s cast types
---
| Cast type | Description |
| --- | ---|
| (int) (integer) | Cast to an integer by dropping the decimal portion. |
| (bool) (boolean) | Cast to a Boolean. |
| (float) (double) (real) | Cast to a floating-point number. |
| (string) | Cast to a string. |
| (array) | Cast to an array. |
| (object) | Cast to an object. |
---
<br/><br/>

## PHP Dynamic Linking
a dynamic linker is a special part of an operating system that loads external shared libraries into a running process and then binds those shared libraries dynamically to the running process.


## Dynamic Linking in Action
linking that calls the external files as needed during execution.

# CHAPTER 5
The basic requirements of any programming language include somewhere to store data, a means of directing program flow, and a fext output. PHP has all these, plus tools like else and elseif to make lifw bits and pieces such as expression evaluation, file management, and tee easier. 

Objects take this concept a step further. An object incorporates one or more functions, and the data they use, into a single structure called a class. In this chapter, you’ll learn all about using functions, from defining and calling them to passing arguments back and forth. With that knowledge under your belt, you’ll start creating functions and using them in your own objects (where they will be referred to as methods).

## PHP Functions
PHP comes with hundreds of ready-made, built-in functions, making it a very rich language. To use a function, call it by name.

For example, you can see the date func‐ tion in action here:

    echo date("l"); // Displays the day of the week

The parentheses tell PHP that you’re referring to a function. Otherwise, it thinks you’re referring to a constant.

### Example 5-1. Three string functions
```
<?php
  echo strrev(" .dlrow olleH"); // Reverse string
  echo str_repeat("Hip ", 2);   // Repeat string
  echo strtoupper("hooray!");   // String to uppercase
?>
```
This example uses three string functions to output the following text:
    Hello world. Hip Hip HOORAY!

## Defining a Function
The general syntax for a function is as follows:
function function_name([parameter [, ...]]) {
// Statements }

The first line of the syntax indicates the following:

• A definition starts with the word function.

• A name follows, which must start with a letter or underscore, followed by any
number of letters, numbers, or underscores.

• The parentheses are required.

• One or more parameters, separated by commas, are optional (as indicated by the square brackets).

Function names are case-insensitive, so all of the following strings can refer to the print function: PRINT, Print, and PrInT.


## Returning a Value

Let’s take a look at a simple function to convert a person’s full name to lowercase and then capitalize the first letter of each part of the name.

We’ve already seen an example of PHP’s built-in strtoupper function in Example 5-1. For our current function, we’ll use its counterpart, strtolower:

    $lowered = strtolower("aNY # of Letters and Punctuation you WANT");
    echo $lowered;
The output of this experiment is as follows:
    any # of letters and punctuation you want

    $ucfixed = ucfirst("any # of letters and punctuation you want");
    echo $ucfixed;
The output is as follows:
    Any # of letters and punctuation you want

Say you make a simple call to the print function: 

    print(5-8);

The expression 5-8 is evaluated first, and the output is –3. (As you saw in the previ‐ ous chapter, PHP converts the result to a string in order to display it.) If the expres‐ sion contains a function, that function is evaluated first as well:

    print(abs(5-8));

PHP is doing several things in executing that short statement:

1. Evaluate 5-8 to produce –3.
2. Use the abs function to turn –3 into 3.
3. Convert the result to a string and output it using the print function.

### Example 5-2. Cleaning up a full name

```php
  echo fix_names("WILLIAM", "henry", "gatES");
  function fix_names($n1, $n2, $n3)
  {
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
    return $n1 . " " . $n2 . " " . $n3;
  }
?>
```

## Returning an Array
We just saw a function returning a single value. There are also ways of getting multi‐ ple values from a function.
The first method is to return them within an array. 
```php
$names = fix_names("WILLIAM", "henry", "gatES");
  echo $names[0] . " " . $names[1] . " " . $names[2];

  function fix_names($n1, $n2, $n3)
  {
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return array($n1, $n2, $n3);
  }
  ```

  ## Passing Arguments by Referenc
  In PHP versions prior to 5.3, you used to be able to preface a variable with the & symbol at the time of calling a function (for example, increment(&$myvar);) to tell the parser to pass a reference to the variable, not the variable’s value. This granted a function access to the variable (allowing different values to be written back to it).

However, within a function definition, you may continue to access arguments by ref‐ erence. This concept can be hard to get your head around, so let’s go back to the matchbox metaphor from Chapter 3.

### Example 5-4. Passing values to a function by reference
```php
$a1 = "WILLIAM";
  $a2 = "henry";
  $a3 = "gatES";
  echo $a1 . " " . $a2 . " " . $a3 . "<br>";
  fix_names($a1, $a2, $a3);
  echo $a1 . " " . $a2 . " " . $a3;
```
## Returning Global Variables
The better way to give a function access to an externally created variable is by declar‐ ing it to have global access from within the function. The global keyword followed by the variable name gives every part of your code full access to it 

### Example 5-5. Returning values in global variables
```php
  $a1 = "WILLIAM";
  $a2 = "henry";
  $a3 = "gatES";
  echo $a1 . " " . $a2 . " " . $a3 . "<br>";
  fix_names();
  echo $a1 . " " . $a2 . " " . $a3;
  function fix_names()
  {
    global $a1; $a1 = ucfirst(strtolower($a1));
    global $a2; $a2 = ucfirst(strtolower($a2));
    global $a3; $a3 = ucfirst(strtolower($a3));

```

## Recap of Variable Scope

Recap of Variable Scope
:
Local variables are accessible just from the part of your code where you define
them. If they’re outside of a function, they can be accessed by all code outside of functions, classes, and so on. If a variable is inside a function, only that function can access the variable, and its value is lost when the function returns.

• Global variables are accessible from all parts of your code.

• Static variables are accessible only within the function that declared them but
retain their value over multiple calls.

## The include Statement
Using include, you can tell PHP to fetch a particular file and load all its contents. It’s as if you pasted the included file into the current file at the insertion point.

### Example 5-6. Including a PHP file
```php
include "library.php";
  // Your code goes here
```
## Using include_once
Each time you issue the include directive, it includes the requested file again, even if you’ve already inserted it. For instance, suppose that library.php contains a lot of use‐ ful functions, so you include it in your file, but you also include another library that includes library.php.

### Example 5-7. Including a PHP file only once
```php
include_once "library.php";
  // Your code goes here
```

## Using require and require_once
A potential problem with include and include_once is that PHP will only attempt to include the requested file. Program execution continues even if the file is not found.
When it is absolutely essential to include a file, require it. For the same reasons I gave for using include_once, I recommend that you generally stick with require_once whenever you need to require a file

### Example 5-8. Requiring a PHP file only once
```php
require_once "library.php";
  // Your code goes here
```

## PHP Version Compatibility
PHP is in an ongoing process of development, and there are multiple versions. If you need to check whether a particular function is available to your code, you can use the function_exists function, which checks all predefined and user-created functions.

### Example 5-9. Checking for a function’s existence
```php
if (function_exists("array_combine"))
  {
    echo "Function exists";
  }
else {
    echo "Function does not exist - better write our own";
  }
```

## PHP Objects
In much the same way that functions represent a huge increase in programming power over the early days of computing, where sometimes the best program naviga‐ tion available was a very basic GOTO or GOSUB statement, object-oriented programming (OOP) takes the use of functions to a whole new level.
Once you get the hang of condensing reusable bits of code into functions, it’s not that great a leap to consider bundling the functions and their data into objects.
Let’s take a social networking site that has many parts. One handles all user functions —that is, code to enable new users to sign up and existing users to modify their details. In standard PHP, you might create a few functions to handle this and embed some calls to the MySQL database to keep track of all the users.
Imagine how much easier it would be to create an object to represent the current user. To do this, you could create a class, perhaps called User, that would contain all the code required for handling users and all the variables needed for manipulating the data within the class. Then, whenever you need to manipulate a user’s data, you could simply create a new object with the User class.


## Terminology
When creating a program to use objects, you need to design a composite of data and code called a class. Each new object based on this class is called an instance (or occur‐ rence) of that class.
The data associated with an object is called its properties; the functions it uses are called methods. In defining a class, you supply the names of its properties and the code for its methods. 

## Declaring a Class
Before you can use an object, you must define a class with the class keyword. Class definitions contain the class name (which is case-sensitive), its properties, and its methods. 

### Example 5-10. Declaring a class and examining an object
```php
$object = new User; // the method that a class needs in order to place an object onto a webserver //
  print_r($object);
class User {
    public $name, $password;// porperties of the object //
    function save_user()// method used to print the object //
    {
      echo "Save User code goes here";
    }
}
```
 
 ## Creating an Object
 To create an object with a specified class, use the new keyword, like this: $object = new Class. Here are a couple of ways in which we could do this:
```php
    $object = new User;
    $temp   = new User('name', 'password');
```

