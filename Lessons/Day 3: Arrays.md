# Day 3: Arrays

## Daily objective

* Students will understand the concept of arrays as being variables that can hold a collection of values instead of just 1
* Students will know how to create a new array and store it in a variable
* Students will know how to add new items to an existing array
* Students will know how to loop through an array and print out the values inside

## Instructional plan

* Uses of arrays
* Creating arrays
* Adding new items to an array
* Simple loop example that displays the contents of an array

### Examples

From the last class I told you some of my hobbies:

    <?php
    $name = "Ryan";
    $hobbies = array("music", "hiking", "reading");
    ?>
    
My `$hobbies` are stored as an array.  What if I took on another hobby, say dancing?

    $hobbies[] = "dancing";
    
To see all the values that are now contained in the array, use `print_r()`:

    print_r($hobbies);

## Assessment of objective

Ask the students to do the following:

* Create an array called `$friends` that contains 3 of their friends that they've known since their childhoold.
* Append (add) to your `$friends` array a few new friends that they met later on in life.  Don't actually add them to the initial definition - use `$friends[] = ...` to add them after the fact.
* Now loop through your `$friends` array with a `foreach` loop and print out your friends one by one, preferably each on their own line.

## Homework

* Create an array of numbers - 5 or more of whatever numbers you choose
* Create a `foreach` loop that prints out all the numbers
* Were all the numbers smashed together?  Make sure there's a space or a newline between them.
* Write about how you think you might compute the sum of these numbers using a loop
* Extra credit: Go through the loop and compute the sum.
