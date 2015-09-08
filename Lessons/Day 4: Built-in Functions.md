# Day 4: Built-in Functions

## Daily objective

* Students will be able to understand and recall the 3 aspects of what a function does:
    1. Take inputs
    2. Do stuff (can have side effects)
    3. Return an output
* Students will be able to identify what a function call looks like in an excerpt PHP code

## Instructional plan

* Definition of a function, relationship to math, diagram of what a function does
* String processing functions (`strtolower`, `strtoupper`, `strlen`, `trim`, etc)
* Array functions (`array_sum`, `array_replace`, `sort`)

### Examples

Suppose I had sloppily entered my name like in lowercase like this:

    $name = 'ryan';

But then later on I wanted my program to say "Hey Ryan!", and I didn't want it to be capitalized properly.  I could use the builtin `ucfirst()` function:

    $capName = ucfirst($name);
    echo "Hey $capName";

## Assessment of objective

* How do you know students can do the objective?

* Students will be asked to name the 3 aspects of what a function does
* Students will be given an excerpt of PHP code and asked to circle / identify all the function calls
* Students will be given a list of built-in function names and a list of descriptions of what they do, and be asked to connect the function names with the correct descriptions
* Students will be given a short programming assignment that requires the correct use of a few builtin functions, such as string processing functions or array functions

## Homework

* Is there a builtin function that would have helped you with your sum computation from the last homework?  Google it and see what you find.
* If you let the user input text and then you print it out on the web page later, it's dangerous because the user could have inputted HTML and javascript!  Can you find a builtin function that would Strip the Tags away from the string so that it no longer poses a threat?
* Find a function that tells you if a variable has been set or not.
