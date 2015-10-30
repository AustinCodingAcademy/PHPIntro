Back End MidTerm Review, Continued
==================================

Section 1 - Data types
----------------------

### Problem

For each of the following data types, provide 2 example values:

a) integer:

    1)
    2)

b) float (aka decimal numbers):

    1)
    2)

c) string:

    1)
    2)

d) boolean (just providing 2 is ok):

    1)
    2)

### Problem

For each of the following situations, select the data type that best represents
the situation:

    Examples:

    Question: "The number of kids a person has"
    Answer: integer

    Question: "The name of a restaurant"
    Answer: string


1. The number of pizzas you should order for the office

   Answer:


2. A person's Status Update on Facebook

   Answer:


3. A list of colors to use in a drawing

   Answer:

4. The percentage of the population that is interested in Product X

   Answer:



Section 2 - Variables
---------------------

### Problem

What will the following program print?

    <?php

        $x = 10;
        $y = 5;
        $x = $y;

        echo "x is $x<br>";
        echo "y is $y<br>";

    ?>

Answer:



### Problem

For each statement, create a variable assignment that clearly represents the
situation:

1. Joe's favorite hobby is going to the arcade

    <?php

        $joesFavHobby = __________________________;

    ?>

2. The capital of Texas is Austin

    <?php

        _____________ = "Austin";

    ?>

3. The user has 20 unread emails

    <?php

        _____________ = ________________;

    ?>

4. The post got 10 likes

    <?php

        _____________ = ________________;

    ?>

5. The class's topics include PHP, HTML and Javascript

    <?php

        _____________ = __________________________________________;

    ?>


Section 3 - Operators
---------------------

### Problem

What is the output of the following program?

    <?php

        echo "Cats train their" . "humans to do " . "cool tricks<br>";
        echo "Some humans give" . "their cats food" . " after being slapped";

    ?>

Answer:


### Problem

Create two string variables $s1 and $s2. Assign the concatenation of the two
strings to a variable $s3

Answer:


### Extra Credit Problem

Observe the following code:

    <?php
        $x = 5.2;
        $y = 5 . 2;
    ?>

What are the values of $x and $y? What is the data type of $x? What is the
data type of $y?  Explain why they are different.

Answer:



### Problem

What is the output of the following program?

    <?php
        $name = "Bob";
        echo "Hello! My name is" . $name;
    ?>

Answer:






Section 4 - Getting in and out of PHP
-------------------------------------

### Problem

What symbols do you have to type to get into PHP mode so you can type PHP code?

Answer:


What happens if you just type stuff directly into a .php file
without typing the special symbols to get into PHP mode?

Answer:


### Problem

Is the following legal PHP code? Why or why not?

    <?php

    $headline = "Eclipse to occur tonight";
    <h1>echo $headline</h1>

    ?>

Answer:






Section 5 - Arrays
------------------

### Problem

Explain the difference between a sequential array and an associative array

Answer:






### Problem

Define the following terms:

1) array element

Definition:



3) array key

Definition:



4) key-value pair

Definition:



5) foreach loop

Definition:



### Problem

What function can you use to see how many elements are in the array $grades?
Write PHP code that gets the answer without needing to actually see the array.

Answer:



### Problem

How would you access the first element of an array called $tweets?

Answer:



### Problem

How can you find the last element of an array?
Given an array $hobbies, write code that gets the last element of it.

Answer:



### Problem

Consider the following array

    $arr = [4,2,1,3,0];

What are the values of the following expressions?


$arr[2]


$arr[2] * $arr[4]


$arr[0]


count($arr)




### Problem

For each of the pieces of data, create an array that best represents the data.
Assign the array to an appropriately named variable.

1) The students in the class are Bob, Jill, Jack, and Jaime.

Answer:






### Problem

For the following array, write code that could be used to
retrieve the requested values within the array:

    $patients = array(
        array(
            'name' => 'Sean Connery',
            'illness' => 'High fever',
            'admittance_time' => '07:30 PM'
        ),
        array(
            'name' => 'Robert Frost',
            'illness' => 'Broken leg',
            'admittance_time' => '08:30 AM'
        ),
        array(
            'name' => 'Hacker McHackerson',
            'illness' => 'Carpel Tunnel',
            'admittance_time' => '12:30 PM'
        )
    )

1)   'High fever': ___________________

2)     '12:30 PM': ___________________

3) 'Robert Frost': ___________________





### Extra Credit Problem

Suppose we are given the following user information from querying a social
network database:

Query results:

    USER table
    +----+------------+------------------+--------------+
    | id | profile_id | email            | join_date    |
    +----+------------+------------------+--------------+
    |  1 |          5 | john@example.com | Feb 13, 2012 |
    |  4 |         15 | jack12@yahoo.com | Mar 01, 2013 |
    | 10 |         97 | meghan@yahoo.com | Sep 22, 2015 |
    +----+------------+------------------+--------------+

We can read the first row as "The user with id 1 has a profile_id of 5, an
email of john@example.com, and a join_date of Feb 13, 2012"

Create an array $users representing the information contained in the query
results. If your array is structured correctly, the following expressions
will be true:

* $users[4]['email'] == 'jack12@yahoo.com'
* $users[10]['profile_id'] == 97

Answer:
















### Extra Credit Problem

Suppose we are making a more complex query to the same social network
database. In addition to results from the USER table, we have also been
provided with data from a related PROFILE table.

Query results:

    USER table
    +----+------------+------------------+--------------+
    | id | profile_id | email            | join_date    |
    +----+------------+------------------+--------------+
    |  1 |          5 | john@example.com | Feb 13, 2012 |
    |  4 |         15 | jack12@yahoo.com | Mar 01, 2013 |
    | 10 |         97 | meghan@yahoo.com | Sep 22, 2015 |
    +----+------------+------------------+--------------+

    PROFILE table
    +----+------------+-----------+--------------+
    | id | first_name | last_name | phone_number |
    +----+------------+-----------+--------------+
    |  5 |       John |       Doe | 512-111-2211 |
    | 15 |       Jack |   Daniels | 512-555-2323 |
    | 97 |     Meghan | McDaniels | 512-987-5434 |
    +----+------------+------------------+-------+

The two tables are structured such that the profile_id in the USER table is
associated with the id in the PROFILE table. According to this structure, the
last name of the user with id 10 is "McDaniels".

Create an array $users representing the information contained in the query
results. Each individual user in the $users array should have a 'profile' key
containing their information from the PROFILE table.

Answer:


























Section 6 - Conditionals
------------------------


### Problem

Given the following code snippet...

    <?php
    echo "I am an animal";
    if ($animal == "whale") {
        echo " and I have a spout!";
    }
    else if ($animal == "elephant") {
        echo " and I have a trunk!";
    }
    ?>

...what will it output if the value of $animal is...

* "whale" ?

* "elephant" ?

* "peacock" ?




Section 7 - CSV
---------------

### Problem

What are CSV files?  What are they used for?

Answer:


### Problem

In class, we used 2 different methods to import a CSV file into our PHP code as an array.
The 1st method we used produced a sequential array of sequential arrays.
The 2nd method was a bit more complicated but it produced a sequential array of associative arrays.

Why would we want to use the 2nd method?  Why might the associative arrays be a more useful result?
Give examples if you can.


Section 8 - Functions
---------------------

Given the following code snippets, create a function out of them with an appropriate name
based on what the code snippet does (a.k.a. write a Function Definition).

Then, after you've created the function definition, write an extra
line of code that actually *uses* the function (a.k.a. a Function Call).

### Problem

    <?php
    if ($age >= 21) {
        echo "Congrats, you can drink alcohol!\n";
    }
    else {
        echo "Congrats, you can drink chocolate milk!\n";
    }
    ?>

    Function Definition:







    Function Call:






### Problem

    <?php
    echo $array[0];
    ?>

    Function Definition:




    Function Call:






### Problem

    <?php
    if (count($array) > 10) {
        echo "That's a big array!";
    }
    elseif (count($array) > 5) {
        echo "Meh, that array is kinda medium";
    }
    else {
        echo "That array is small potatoes...";
    }
    ?>

    Function Definition:




    Function Call:


