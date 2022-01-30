<?php
/**
 * The binarySearch aglorithm is an algorithm used to search for an elment in an array.
 * @param string $search represents the search term
 * @param array $array the data to be searched
 * @param int $first the first index in the array
 * @param int $last the last index in the array
 * @return string
 */
function binarySearch (string $search, array $array, int $first, int $last) : string
{
      //  if $first(0) is greater then $last(9) state that the $search term does not exist //
      if ($first > $last) 
      {
        return "Search term does not exist...";  
      }
      //
      else 
      {
        $middle = floor(($last + $first)/2);    

        if (ord($array[$middle]) < ord($search)) 
        {
          return BinarySearch($search, $array, $middle+1, $last);
        }        
        elseif (ord($array[$middle]) == ord($search))
        {
          return $array[$middle];
        }
        else 
        {
          return BinarySearch($search, $array, $first, $middle-1);
        }
      }
}


$alphabets = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "c", "D", "E", "F","G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" );
// for ($i=0; $i < count($alphabets); $i++) { 
// echo $alphabets[$i]." = ".ord($alphabets[$i])."<br/>";
// }
if (binarySearch("z",$alphabets, 0, count($alphabets)-1) == "z"){
  echo "Found...";
}else{
  echo "No value exists...";
}

