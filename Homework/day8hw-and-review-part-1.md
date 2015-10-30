Day 8 Homework and Review for MidTerm
-------------------------------------

0. For each code example, what will the code output when run?

    a)

        <?php
        echo "Hello World";
        ?>

    b)

        <?php
        $world = "Earth";
        echo "Hello $world";
        ?>

    c)

        <?php
        $world = "Earth";
        echo 'Hello $world';
        ?>

    d)

        <?php
        $name = "Ryan";
        $verb1 = "teach";
        $verb2 = "code";
        echo "My name is $name, and I love to $verb1 and $verb2!";
        ?>

0. Look at the below code sample.

        <?php
        if ($site == "Facebook") {
            $what = "social network";
        }
        else if ($site == "Google") {
            $what = "search engine";
        }
        else if ($site == "Wikipedia") {
            $what = "encyclopedia";
        }
        else {
            $what = "unknown";
        }

        echo "$site is the world's leading online $what.";
        ?>

   ...Given that code sample, what will be the output if the variable `$site` has the value:

    a) `"Facebook"`

    b) `"Wikipedia"`

    c) `"Craigslist"`

0. Write PHP code to assign a value to the following variables:

    a) `$name`

    b) `$cityOfBirth`

    b) `$favoriteColor`

    c) `$hobbies`

0. Come up with 3 example variable names and values for the following applications,
   and then use the `echo` command to print out a sentence that uses the variables' values:

    a) A social network

    b) A restaurant order system

    c) A calendar

    d) A fitness app

    e) A spam filter

0. For the following code excerpts, find and correct the error in each one.

    a)

        <?php
        echo hello;
        ?>

    b)

        <?php
        $x = 5;
        if $x == 5 {
            echo '$x is 5';
        }
        ?>

    c)

        <?php
        $colors = array('red','blue','green');
        $favColor = $colors[3];
        echo "My favorite color is $favColor.";
        ?>

    c)

        <?php
        $carBrands = array('Honda','Toyota','Ford','VW')
        $company = $carBrands[3];
        echo "$company had a 'bug' in their emissions system.";
        ?>

    d)

        <?php
        $birthYear = 1983;
        $age = 2015 - $birthYear;
        if ($age = 21) {
            echo "Yay, you can drink alcohol now!";
        }
        ?>

    e)

        <?php
        $todo = array(
            "ASAP" => "make review problems",
            "later" => "chill with friends",
        );

        echo "I want to " . $todo[1] . " but I want to " . $todo[0] . " too.";
        ?>

Problem Formats
    Here's some code, what will it output?
    Here's some code, find the error in it.
    Comment this code to explain what it does
    Refactor the code - wrap it in a function so it can be reused
    Conceptual free response (keep to a minimum)
    Code free response

Getting in and out of PHP
    <?php and ?>
    short-form for echoing a var: <?= $var ?>
    foreach loop with HTML in the middle

arrays and foreach loops
    Concepts
        vocabulary
        index
        key
        value
        element
    Accessing an array by index
    Accessing an associative array by key
    Getting the size of an Array
    Adding an element to the end of an Array
    Example problems
        given an array, go through a foreach loop and print out each element on its own line
        given an array

Associative and Nested Arrays
    given an Array, is this an associative or sequential array?
    given a Nested Array, how do you get to this part of data within it?
    create a Nested Array representing something ...

conditionals (if / else)
    basic relational expressions (no compound)
    if+else vs if+if

CSV imports
    Concepts
        what are CSVs used for?
    Example problem
        Extra Credit: given an example of while (($row = fgetcsv()) !== FALSE) {...}, comment it and explain what it does (hard, grade leniently)

user-defined functions
    Concepts
        inputs / arguments
        return value
    Example problems
        given this code, turn it into a function which takes inputs $x, $y, ... and returns blah
        define a function sum2($x,$y) that returns the sum of 2 numbers

built-in functions
    count()
    isset()
    print_r()
    echo

HTML
    <br>
    <p>
    <h1>

Comprehensive Coding Problem
    may incorporate
        variables
        arrays
        a conditional
        function
    Extra Credit - get the mode of an array

