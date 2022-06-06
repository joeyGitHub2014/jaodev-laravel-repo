<?php

/* input:  ab-CDe-f-GHi */
/* output: iH-Gfe-D-Cba */

class MyReverse
{

    function reverseStuff($s)
    {

        // split orginal string to get length of each array element
        $splitArray = preg_split('/-/', $s, -1, PREG_SPLIT_OFFSET_CAPTURE);

        // explode the string into an array 
        $arr = explode("-", $s);

        // reverse each element 
        $arrRev = array_reverse($arr);

        // reverse each string value in the array
        $len = count($arrRev);
        for ($i = 0; $i < $len; $i++) {
            $arrRevLetters[$i]  = strrev($arrRev[$i]);
        }

        // now bring string back together in reverse order
        $revString = implode($arrRevLetters);

        // based on orginal string lengths in splitArray, add the delimeter/seperator "-"
        $startPos = 0;
        $outputStr = "";
        $count = 1;
        $len = count($splitArray);
        for ($j = 0; $j < $len; $j++) {
            $arrRev[$j] = substr($revString, $startPos, strlen($splitArray[$j][0]));
                                  // handle end cases
            ($arrRev[$j] != "") ? (($count != $len) ? $outputStr .= $arrRev[$j] . "-" :  $outputStr .= $arrRev[$j] ) : 
                                  (($count != $len) ? $outputStr .= "-" : "");
            $startPos =  $startPos + strlen($splitArray[$j][0]);

            $count++;
        }

        return($outputStr);

    }
}

$myReverse = new MyReverse;

$revesedLetterInPos = $myReverse->reverseStuff("ab-CDe-f-GHi");

print_r($revesedLetterInPos);

?>
