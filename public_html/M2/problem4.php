<?php

require_once "base.php";

$ucid = "wg99"; // <-- set your UCID

// Test arrays (do not edit)
$array1 = ["hello world!", "php programming", "special@#$%^&characters", "numbers 123 456", "mIxEd CaSe InPut!"];
$array2 = ["hello world", "php programming", "this is a title case test", "capitalize every word", "mixEd CASE input"];
$array3 = ["  hello   world  ", "php    programming  ", "  extra    spaces  between   words   ",
    "      leading and trailing spaces      ", "multiple      spaces"];
$array4 = ["hello world", "php programming", "short", "a", "even"];

function transformText($arr, $arrayNumber) {
    // Display original input
    printArrayInfoBasic($arr, $arrayNumber);

    foreach ($arr as $index => $text) {
        // Step 1: Remove non-alphanumeric characters except spaces
        $clean = preg_replace("/[^a-zA-Z0-9 ]/", "", $text);

        // Step 2: Remove duplicate spaces and trim
        $clean = preg_replace('/\s+/', ' ', $clean);
        $clean = trim($clean);

        // Step 3: Convert to Title Case
        $placeholderForModifiedPhrase = ucwords(strtolower($clean));

        
        $placeholderForMiddleCharacters = "";

        echo "<div>";
        printStringTransformations($index, $placeholderForModifiedPhrase, $placeholderForMiddleCharacters);
        echo "</div>";
    }

    echo "<br>______________________________________<br>";
}

// Run the function on all arrays
printHeader($ucid, 4);
transformText($array1, 1);
transformText($array2, 2);
transformText($array3, 3);
transformText($array4, 4);
printFooter($ucid, 4);

?>
