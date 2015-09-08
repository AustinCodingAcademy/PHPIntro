# Day 2: Basic PHP Programming: Strings, Conditionals, Ints

## Daily objective

* Students will learn about what variables are, how to assign values to them, and how to echo those values or use them in computations
* Students will see examples of PHP Code, and learn about getting in and out of `<?php ?>` and using `if`/`else` for logic

## Instructional plan

* Continue programming examples: assignments, `if`/`else`, getting in and out of `<?php ?>`
* Difference between `'single-quoted strings'` and `"double-quoted strings with $variable's"`
* Mention escaping characters: `'Here\'s an example.'`
* Do an example involving integer arithmetic
* BRIEF intro to Database: show them a `SELECT` query and an `INSERT` query, but they don't have to "get it" yet

### Examples

#### Assigning values to variables

    <?php
    $name = "Ryan";
    $age = 31;
    $role = "Instructor";
    $organization = "Austin Coding Academy";
    $hobbies = array("music", "hiking", "reading");
    ?>
    
#### Echoing/printing values of variables

    <?php
    echo "Hello, my name is $name, and I am fulfilling the role of $role at $organization.  My hobbies include $hobbies[0], $hobbies[1], and $hobbies[2], and I am $age years old."
    ?>

## Assessment of objective

* Students will be asked to make up variables and give them values, in response to questions like "What is your favorite color?", "What is your name?", etc., to fit them into a template they are given that looks like this:

        echo "Hello, my name is $name.  My favorite color is $color."; # etc etc

* They will then be asked to do the reverse: several variables and their assiged values will be given like so:

        $business = "Microsoft";
        $pointsGained = 2;
        $shareholderMood = "excitement";

  ...and they will have to come up with an `echo` statement that turns these variables into a story.

* Students will be asked the difference between the 3 basic types in PHP - String, Number and Array.

## Homework

* Read through the [Glossary of Terms](/Glossary.md), and write down 1-3 questions you have upon reading it
* Read the [Wikipedia Page on Variables](https://en.wikipedia.org/wiki/Variable_(computer_science))
* Some short exercises to come

