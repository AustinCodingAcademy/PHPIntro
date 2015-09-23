<?php
/*

Day 3 of PHP Intro
------------------

We will:

* Learn how to run php scripts from the Command Line
* Learn some ways programs on the same computer talk to each other
    stdin, stdout
* Learn and practice more about variables, strings, numbers, arrays
* Start talking about loops, e.g. foreach
* Practice using the built-in functions we know and learn some more
* Possibly introduce user-defined functions

*/

# let's learn more about the command line!

# Review:   command line - place to run commands
#   mv      - move files and directories around
#   mkdir   - create new directories
#   rm      - delete files
#   rmdir   - delete directory, only if it's empty
#   rm -rf  - delete directory (even if it has stuff in it)
    
# you can run php scripts directly using the `php` command
# let's run this one!

# $ php ./learning-script.php

# what's the difference between running a php script directly at the command line
# vs running it through requesting a web page from the web server?
?>



<?php
# How do programs talk to each other?
# -----------------------------------
# All command line programs have a Standard In (stdin)
# and a Standard Out (stdout)
#
# Both stdin and stdout are just "pipes" of text known as Streams
# The program as it runs can take the text in through stdin
# and whenever it echo's text it goes out through stdout

# Example of reading input through stdin
$how = readline("How's it going? ");
echo "Ah, I see you're doing $how\n";
?>



<?php
# Review

# variable assignment
$animal1 = 'cat';
$animal2 = 'dog';
# variable printing
print($animal1);
print($animal2); # catdog



# numbers / math
$x = 5;
$y = 6
$z = 3 + 5 + 4; # 12 - can do arithmetic
# order it does things: PEMDAS from math class: Paren Exponent Mult Div Add Sub
$z = 3 + 5 * 4; # 23, not 36, mult happened first
echo "x=$x, y=$y, z=$z\n"; # print them out
?>


<?php
# another math example - calculating my age
$yearOfBirth = 1983;
$currentYear = date('Y');

$age = $currentYear - $yearOfBirth;

echo "I must be $age years old...\n";
?>


<h1>String Concatenation</h1>
<?php
$animal = "zebra";

# this works: "abzebrac"
$overallString = "a" . "b" . $animal . "c";
echo $overallString;

# this doesn't: undefined variable "animalc"
$overallString = "ab$animalc";
echo $overallString;

# but this works: "abzebra c"
$overallString = "ab$animal c";
echo $overallString;
?>




<?php
# arrays - collection of values, not just one
#--------------------------------------------
# can have arrays inside of arrays
?>
<h1>Arrays</h1>

<?php
    $hobbies = array(
        "skiing",
        "surfing",
        "playing chess",
        "coding"
    );

    # print_r() is a way to see what's in an array (good for debugging):
?>
<pre>
<?php print_r($hobbies); ?>
</pre>

<?php
    # one way to print them out
    foreach ($hobbies as $hobby) {
        echo "<p>$hobby</p>";
    }

    # another way to print them out
    foreach ($hobbies as $hobby) {
?>
        <p><?= $hobby ?></p>
<?php
    }


    # arrays keep track of the numbers of each item too
    foreach ($hobbies as $n => $hobby) {
        echo "<p>Hobby $n: $hobby</p>";
    }
?>






<?php
    # an example of nested arrays - imagine if your Facebook Feed was an array
    $newsFeed = array(
        array(
            "name" => "Melvin",
            "content" => "Here's a picture of what I ate for lunch",
            "image" => "lunch01.jpg",
        ),
        array(
            "name" => "Jenny",
            "content" => "Just went surfing, the beach is awesome on the coast!",
        ),
    );

    # we don't have any code to print it out though
?>






<h1>Arrays continued</h1>

<p>Challenge: Calculate the average of an array of numbers</p>

<?php

# Hint:
# $x = 0;
# $x = $x + 5;
# $x = $x + 5;

$grades = array(80,95,73,91);
$numGrades = count($grades);

# ... start off with 0
$total = 0;
foreach ($grades as $grade) {
    # ... add up the total
    $total = $total + $grade;
}
# ... divide by the number of grades
$avgGrade = $total / $numGrades;

?>
<p>
    The average grade is <?= $avgGrade ?>
</p>


