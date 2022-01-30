# Guess my number game

Problem Domain:

- Create a program that will guess the number chosen by a player/user.

## Game Objectives:

1. The user/player pick a number and writes it down.
2. The program must make a guess and ask the user/player if the guess is correct.
3. If the guess is not correct, the program must ask the user/player, 
   - am i too high
   - am i too low
4. This will continue until the program guesses the correct number.


## Game Algorithm: 
### Binary Search Guessing Game
```
example range: 0 1 2 3 4 5 6 7 8 9
$left_bound = 0
$right_bound = 9
$Average = (n_0 + n_1 + ... + n_n)/N
where is N is the number of values in the set
```

1. At the start of the game set the range/bounds of the game to :
      - $l_bound = 1 and 
      - $r_bound = n
2. Guess the average of $r_bound and $l_bound, rounded down so that it is an integer.
      - floor(($r_bound + $l_bound)/2)
3. If you guessed the number, stop. You found it!
4. If the guess was too low, set $l_bound = ($guess + 1) to be one larger than the guess.
5. If the guess was too high, set $r_bound = ($guess - 1) to be one smaller than the guess.
6. Go back to step two

## Example Implementation:

$l = 1;

$r = 15;

$number_of_tries = 0;

$guess = floor(($l + $r)/2) = 8

too high

$number_of_tries += 1;

$r = 8 - 1 = 7 

$guess = floor(($l + $r)/2) = 4

too low

$number_of_tries += 1;

$l = 4 + 1 = 5

$guess = floor(($l + $r)/2) = 6

too low

$number_of_tries += 1;

$l = 6 + 1 = 7

$guess = floor(($l + $r)/2) = 7


You number is 7;

$number_of_tries is 3;
