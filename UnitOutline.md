Unit Outline
============

Intro to back end unit outline
Last revised: September 7, 2015

PHP Intro Course Syllabus
=========================

## Module 1: Intro to Programming Basics

In the first module, you will get an introduction to what it means to program a computer,
and what to expect as you embark on your journey to learn Backend Web Programming.  We will
discuss and survey broad general concepts that apply to all programming languages, such as
variables, conditionals, loops and functions - and we will learn the specific syntax and
behavior of these features within PHP in particular.  You will likely come away from this
module with a feeling of having learned a little bit of a lot of things, but you may feel
a bit disoriented at not really being able to totally wrap your mind around these concepts
yet, or "do much" with them.

In this module, there will be plenty of simple examples to practice, and plenty of guidance
given to help you get unstuck if you don't know what to do.

* **1A: Intro to Computers, Programming, and This Course**
    * Learn about computing and what programming is
    * See a demo of the Blog application we will create as a project in this course
    * Hear about PHP in the context of web programming and what the LAMP stack is
    * First exposure to some simple Hello World type PHP examples, with `echo`, variables, `if`/`else` conditionals, and `foreach` loops
    * Review of how the ACA Virtual Machine environment works

* **1B: Basic PHP Programming: Variables, Conditionals and Loops**
    * Get into more detail regarding the types of examples we saw in 1A
    * `if`/`else`, getting in and out of `<?php ?>`
    * Basic intro to HTML, discuss tags
    * Learn about variables:
        * What does it mean to assign a value to a variable?
        * Using variables to hold values
        * Using variables' values along with `if`/`else` to test conditions in your program
    * Examining `if`/`else` in closer detail:
        * When would you use an `if` with an `else`, vs when would you just use an `if`?
        * Nested `if`s to implement more complex logic
    * Different types of values in PHP
        * `int`, `float`, `string`, `NULL`, `true`/`false`
        * Also arrays, but we'll get to them later

* **1C: Integers, Floats, and Text Strings in PHP**
    * Numbers: Integers and Floats:
        * Do some examples involving integer arithmetic
        * Learn how rounding is handled in PHP
    * Strings:
        * Difference between `'single-quoted strings'` and `"double-quoted strings with $variable's"`
        * Escaping characters: `'Here\'s an example.'`
        * `strlen`, `strpos`, `strtoupper`, `strtolower`, `trim`,
          and other built-in string-related functions

* **1D: Initial intro to SQL Databases**
    * See a simple `SELECT` query and an `INSERT` query, and how it operates on data
    * See an example of how PHP can use such queries and pull the data into an Array
    * You don't have to get the details at this point,
      this is just an intro so you know what's coming

* **1E: Arrays - collections of values**
    * Learn uses of arrays
    * How to create an arrays
    * Adding new items to an array
    * Simple loop example that displays the contents of an array
    * Learn some of the built-in functions having to do with arrays:
        * `array()`
        * `count()`
        * `array_sum()`
        * `array_merge()`
        * `array_count_values()`
    * See Some more in-depth examples that don't have to make total sense yet
    * Array functions (`array_sum`, `array_replace`, `sort`)

* **1F: Intro to Functions: built-in and user-defined**
    * Definition of a function, relationship to math, diagram of what a function does
    * Learn about inputs ("arguments") and outputs ("return values")
        * Learn about the difference between `return`ing a value and just `echo`ing it
    * Built-in functions
        * Review of string processing functions
        * Review of array functions
    * User-defined functions
        * How to define a function
        * Difference between defining a function and calling it
        * Taking existing "spaghetti" code and factoring it into functions

* **1G: Loops**
    * Using `for` to loop a certain number of times
    * Using `foreach` to loop through an array
        * Using `foreach` to total up an array of numbers
        * Using `foreach` to build up another array
          (e.g. select only certain elements from the first array)
        * Using `foreach` to render repetitive HTML,
          using variables to make it dynamic
    * Using `while` and `do...while` to loop as long as a certain condition is true
        * How to convert a `for` loop to a `while` loop and vice versa

* **1H: Tying the basics together:**
    * Learn how to take a complex problem and break it down into pieces
    * Learn how breaking your program into functions can help keep it simple
    * Bird's-eye view of how variables, arrays, loops, conditionals, and functions
      work together to give you a fundamental toolkit for building applications.

## Module 2:

In the second module, we will revisit all the fundamental pieces of our programming toolkit.
We'll strive to gain a better bird's-eye strategic view of how these tools all fit together
to help us solve complex problems, while also practicing and sharpening our tactical skills
to hone a more detailed understanding of how these tools are used in the wild.  There may be
repeated situations of having a problem in front of you and thinking "How do I even start
with this".  This process is natural and important, and there will be more periods of having
to approach problems on your own without help, so that you can get past your hesitance,
continue to accrue tools and experience points that help you build up your confidence and
problem-solving abilities.

In this module we begin work on the Final Project, and start learning what it's like to work
on a real project with multiple files and lots of moving parts.

* **2A: Arrays in more depth**
    * Learn about how arrays are implemented under the hood as key-value pairs
    * Learn about associative arrays and how they allow you to create a "dictionary"
      or lookup table
    * Learn how to model complex data structures using Nested arrays (arrays in arrays)
    * Learn how to import a CSV file into your PHP scripts and get the data into an array

* **2B: Creating your own functions, revisited**
    * Practice factoring "spaghetti" code into functions
        * Noting variable dependencies
    * Choosing the right interface (arguments and return values) for your functions
    * Talk about `include`, `include_once`, `require`, `require_once`
        * How they are similar to, yet different from, functions
        * Functions provide a tighter, more reliable interface
        * Includes provide a sloppier, more "plug and play" interface
    * Briefly mention `try` and `catch`

* **2C: SQL Databases, continued**
    * Practice `SELECT` queries and `INSERT` query
    * Learn about `WHERE` clauses and `SELECT`ing only certain fields
    * See examples of more advanced SQL functionalities such as
      `GROUP BY` and `JOIN` (do not need to be understood in-depth)
    * Learn how to interact with the MySQL database using PHP
        * Connecting to the database
        * Running queries
        * Fetching the results into arrays

* **2D: Loops, revisited**
    * More practice on `foreach`, `for` and `while`
    * More practice breaking down large problems into bite-sized chunks
      so we can think about them cleanly without getting confused
    * Learn about adding `echo` statements to follow the behavior of
      a complex nested loop
    * `break` and `continue`

* **2E: HTML Crash Course**
    * Learn how to make links with the `<a href="">` tag
    * Learn how to make forms that can capture user data
    * Learn how CSS (Cascading Style Sheets) work
    * Learn about the overall structure of an HTML file:
        * `<html>`, `<head>`, `<body>`
    * Talk about SEO and how to optimize your HTML page

* **2F: Working with multiple files**
    * How breaking your codebase up into multiple files can help keep it simple
    * Discussion of OOP even though we're not using it in this class
    * Discussion of web server setups that route all URLs through index.php
    * Keeping your helper files somewhere else users can't access them directly

* **2G: Begin work on Final Project**
    * Talk about Blogs and brainstorm functionality that a blog would need
    * Create an HTML skeleton for a blog
    * Start out by using arrays to model the blog articles
    * Then begin to move the functionality to the database

# Module 3:

In the third module we take what we've learned in the 1st and 2nd modules and continue
applying them to bigger problems and applications.  We strive to keep simplicity and
consistency in our code even as we tackle harder and more confusing problems that may
require deeply nested arrays or loops.  We continue working on our Final Project and
get done or almost done with the functionalities.

The goal is that by Module 3, you have practiced enough and been exposed to the
fundamentals enough, that when you think about a problem your mind starts to naturally
break it down into pieces and think about how variables, loops, arrays and functions
can model the moving parts of the problem.  You will move towards a place of not being
fazed by complexity, since your ability to break things down and think simply about
complex problems has been well-honed.

* **3A: Getting deeper into the Database**
    * Learn more about how to insert data into a table using an `INSERT` queries
    * Learn how to update existing data with `UPDATE` queries
    * Learn how to remove data with `DELETE` queries
    * Learn how to make a table from scratch:`CREATE TABLE` queries
    * Learn how to import a CSV into a Database
    * Learn why it's valuable in ETL to keep field names the same
    * Storing a database schema as a SQL code file
    * Discuss indexes and database performance
    * See more examples of `JOIN`s and `GROUP BY`'s
    * Discuss 1-to-many and many-to-many relationships

* **2B: Creating readable code, and reading other people's code**
    * Looking at and understanding other people's code
    * Having empathy for other people who have to read your code
    * Practice factoring code into functions
    * Practice taking larger problems and making a plan of what
      functions to implement and how they will interface
    * Discussion of "stubs" - functions you will come back to and
      implement later, but for now leave empty as a reminder of
      your plan

* **2E: more HTML and Javascript**
    * Learn how Javascript interfaces with HTML
    * Learn how to include and use jQuery
    * Learn how PHP and Javascript interact
    * Talk about APIs and how AJAX requests are used to fetch data
      without reloading the page

* **2F: Continue work on Final Project**
    * Build out our database functions for creating, editing and deleting articles
    * Build HTML Forms for creating and editing articles, and hook them to the DB functions
    * Create a Table-of-Contents with Anchor Links pointing to the Articles

# Module 4: Wrapping it Up

* **Presentation of Final Project**
    * Instructors will help students finish the final project and fix any final bugs.
    * In the final days of class, students will present their application
      to the Instructors, showing what it does and how it's implemented.

* **Final Conversations and Debriefing**
    * Answer any open-ended or advanced questions that students may have
    * Suggest topics for further study and talk about cool things going on in computing

