<?php
//
///**
// * This is class that uses a binary search.
// */
//Class BinarySearch {
//    private array $wordList, $upperAlphabet, $lowerAlphabet;
//    private static int $itteration = 0;
//
//    public function __construct(array $files=null)
//    {
//        $this->wordList = file("./data/wordlist.txt");
//        $this->lowerAlphabet = $this->setKeyValue(file("./data/lower.txt"));
//        $this->upperAlphabet = $this->setKeyValue(file("./data/upper.txt"));
//
//    }
//    private function setKeyValue(array $arr): array
//    {
//        $temp = array();
//        foreach ($arr as $key => $value)
//        {
//            $temp["$key"] ="$value";
//        }
//        return $temp;
//    }
//    function getWordList(): array {return $this->wordList;}
//    function getLowerAlphabet(): array {return $this->lowerAlphabet;}
//    function getUpperAlphabet(): array {return $this->upperAlphabet;}
//
//    function printArr(array $arr)
//    {
//        foreach ($arr as $key => $value)
//        {
//            echo $key . ": " . $value . "<br/>";
//        }
//    }
//
//    /**
//     * Gets the index location of a letter in the Alphabet [a-zA-Z] arrays
//     * lower/upper Alphabet from [0..25]
//     * @param string $x a character or string word
//     * @return integer|mixed
//     */
//    function getAlphabetIndex(string $x): mixed
//    {   // create a temp array
//        $temp = array();
//        if(strlen($x) > 1){ // check if $x is a word or character
//            // get the index of each character in the word
//            for($i=0; $i < strlen($x); $i++)
//            {
//                $temp[$i] = $this->getAlphabetIndex($x[$i]);
//            }
//        }else{
//            foreach ($this->lowerAlphabet as $key => $value)
//            {
//                if (trim($x) == trim($value))
//                {
//                    return $key;
//                }
//            }
//
//            foreach ($this->upperAlphabet as $key => $value)
//            {
//                if (trim($x) == trim($value))
//                {
//                    return $key;
//                }
//            }
//        }
//
//        return $temp;
//    }
//    function isGreater(string $word,string $word2){
//
//        $word_index_arr = $this->getAlphabetIndex($word);
//        $word2_index_arr = $this->getAlphabetIndex($word2);
//        print_r($word_index_arr);
//        print_r($word2_index_arr);
//
//    }
//
//    /**
//     * @param array $arr This is the array of digits in the binary.
//     * @param int $start is the first index in the array.
//     * @param int $end  is the last digit in the array.
//     * @param string $x This is the digit chosen in the array.
//     * @return string
//     */
//
//    function binarySearch(Array $arr, int $start, int $end, string $x): string
//    {
//        BinarySearch::$itteration = BinarySearch::$itteration + 1;
//        $temp = array();
//        if ($end == -1){$end = count($this->getWordList()) - 1;}
//
//        // pass our wordlist into the array if it is empty
//        if (count($arr) == 0){
////            echo "<br> Array is empty...first run...";
//            $arr = $this->getWordList();
////            echo "Array Count: " . count($arr) . "<br>";
//            echo <<<EOF
//<div class="card border-primary text-primary">
//<table class="table table-dark">
//    <thead>
//      <tr>
//        <th>Start</th>
//        <th>End</th>
//        <th>Mid-Point</th>
//        <th>Search Volume</th>
//        <th>Current Test Word</th>
//        <th>Search Word</th>
//        <th>Itteration</th>
//      </tr>
//    </thead>
//    <tbody>
//EOF;
//        }
//        /**
//         * This is an if statement that returns true if the middle digit in the array is equal to $x.
//         */
//
//        $mid = floor(($end + $start)/2);
//        $itt = BinarySearch::$itteration;
//        $vol = ($end - $start);
//        echo <<<EOF
//<tr>
//    <td>$start</td>
//    <td>$end</td>
//    <td>$mid</td>
//    <td>$vol</td>
//    <td>$arr[$mid]</td>
//    <td>$x</td>
//    <td>$itt</td>
//</tr>
//EOF;
//
////        echo ",<br/>". __LINE__ . " - Start: " . $start . ", End: " . $end . "<br>";
//
//        if ($end < $start) { // EXIT if we can't find the search word
//            echo <<<EOF
//    </tbody>
// </table>
// <div class='container-fluid card border-primary text-center fw-bold' >Unable to Locate: $x </div>
// <br>
// <div class='container-fluid card border-primary text-primary fw-bold' ><input type='reset' value='Reset' onclick='redirect()'></div>
//</div>
//<script>
//    function redirect(){
//        window.location.replace("index.php")
//    }
//</script>
//EOF;
//
////            echo "<br><br><div class='container fw-bold'>Unable to Locate: ". $x . "</div>";
////            echo "<div class='container fw-bold'>Number of Itterations: " . Binary::$itteration . "</div><br>";
//            return false;
//        }
//
////        echo  __LINE__ . " - New Mid-Point: " . $end . " + " . $start . " = " . $mid . "<br/>";
//        if (trim($arr[$mid]) == $x){ // we have found our search word
//            echo <<<EOF
//    </tbody>
// </table>
// <div class='container-fluid card border-primary text-center fw-bold'>$arr[$mid] found......</div>
// <br>
// <div class='container-fluid card border-primary text-primary fw-bold' ><input type='reset' value='Reset' onclick='redirect()'></div>
//</div>
//<script>
//    function redirect(){
//        window.location.replace("index.php")
//    }
//</script>
//EOF;
////            echo "<br><br><div class='container fw-bold'>Found word: " . $arr[$mid] . ", Search word: " . $x . "</div>";
////            echo "<div class='container fw-bold'>Number of Itterations: " . Binary::$itteration . "</div><br>";
//            return true;
//        }
////        echo "<br><div class='container fw-bold'>Testing word: " . $arr[$mid] . " == " . $x . "</div><br>";
//
//        /**
//         * This is an elseif statement that decrements the middle digit if $x is less than it.
//         */
//        if ("$arr[$mid]" > "$x"){
////            echo  __LINE__ . " - Same Start: ". $start . ", Mid-Point Greater, New End: " . $mid . "<br/>";
//            return $this->binarySearch ($arr, $start, $mid - 1, $x);
//        }
//
//        /**
//         * this is an else statement that increments the middle digit if $x is greater than it.
//         */
//        if ("$arr[$mid]" < "$x") {
////            echo  __LINE__ . " - Mid-Point Lesser, New Start: " . $mid . ", Same End: ". $end . "<br/>";
//            return $this->binarySearch ($arr, $mid + 1, $end, $x);
//        }
//
//        return $arr[$mid];
//    }
//
//    static function webform(): string {
//        return <<<EOF
//    <div class="card border-primary text-primary">
//        <form class="container-fluid" action="index.php" method="post">
//            <div class="row">
//                <label for="guess" class="text-center fw-bold fs-1">Type a Word to Search Wordlist</label>
//                <input type="text" name="guess" class="fs-3">
//            </div>
//            <div class="row">
//                 <input type="submit" autocomplete="on" class="fw-bold fs-3">
//            </div>
//        </form>
//    </div>
//    EOF;
//    }
//}
?>