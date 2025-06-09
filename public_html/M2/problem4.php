<?php

require_once "base.php";

$ucid = "wg99"; // <-- set your ucid

// Don't edit the arrays below, they are used to test your code
$array1 = ["hello world!", "php programming", "special@#$%^&characters", "numbers 123 456", "mIxEd CaSe InPut!"];
$array2 = ["hello world", "php programming", "this is a title case test", "capitalize every word", "mixEd CASE input"];
$array3 = ["  hello   world  ", "php    programming  ", "  extra    spaces  between   words   ",
    "      leading and trailing spaces      ", "multiple      spaces"];
$array4 = ["hello world", "php programming", "short", "a", "even"];


function transformText($arr, $arrayNumber) {
    // Only make edits between the designated "Start" and "End" comments
    printArrayInfoBasic($arr, $arrayNumber);

    // Challenge 1: Remove non-alphanumeric characters except spaces
    // Challenge 2: Convert text to Title Case
    // Challenge 3: Trim leading/trailing spaces and remove duplicate spaces
    // Result 1-3: Assign final phrase to `$placeholderForModifiedPhrase`
    // Challenge 4 (extra credit): Extract up to the middle 3 characters (middle index and +/- 1 if it's not the first/last character),
    // Do not include the first or last character of the phrase/word. (e.g., oven should show as ve)
    // assign the result to `$placeholderForMiddleCharacters`
    // If the phrase is shorter than 3 characters, return "Not enough characters"

    // Plan - UCID: wg99 | Date: 2025-06-08
    // 1. Loop through each text string in the array.
    // 2. Remove all characters except letters, numbers, and spaces using regex.
    // 3. Trim leading and trailing spaces.
    // 4. Remove duplicate spaces between words.
    // 5. Convert to Title Case.
    // 6. Save this to placeholderForModifiedPhrase.
    // 7. For extra credit:
    //    - Remove first and last characters of the final phrase.
    //    - If length >= 3, grab 3 middle characters.
    //    - Else return "Not enough characters"

    foreach ($arr as $index => $text) {
        // Start Solution Edits

        // Step 1: Remove non-alphanumeric characters except spaces
        $cleaned = preg_replace("/[^a-zA-Z0-9 ]/", "", $text);

        // Step 2: Trim and remove duplicate spaces
        $cleaned = trim($cleaned);
        $cleaned = preg_replace("/\s+/", " ", $cleaned);

        // Step 3: Convert to title case
        $placeholderForModifiedPhrase = ucwords(strtolower($cleaned));

        // Step 4 (Extra Credit): Get middle 3 characters (excluding first and last)
        $noEdges = substr($placeholderForModifiedPhrase, 1, -1);
        $length = strlen($noEdges);

        if ($length < 3) {
            $placeholderForMiddleCharacters = "Not enough characters";
        } else {
            $mid = floor($length / 2);
            $placeholderForMiddleCharacters = substr($noEdges, $mid - 1, 3);
        }

        // End Solution Edits

        echo "<div>";
        printStringTransformations($index, $placeholderForModifiedPhrase, $placeholderForMiddleCharacters);
        echo "</div>";
    }

    echo "<br>______________________________________<br>";
}

// Run the problem
printHeader($ucid, 4);
transformText($array1, 1);
transformText($array2, 2);
transformText($array3, 3);
transformText($array4, 4);
printFooter($ucid, 4);

?>