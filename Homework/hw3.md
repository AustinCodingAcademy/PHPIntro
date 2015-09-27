PHP Intro Assignment 3
======================

Directions
----------

Create a directory within your `htdocs` directory named `HW3`. Your answer/solution
to each problem in this assignment should have its own designated file within the `HW3`
directory. The desired file name will be written beside the problem.

Compress (zip) the directory when you are finished and email the zip to [ryan@austincodingacademy.com](mailto:ryan@austincodingacademy.com) and 
[clofton@austincodingacademy.com](mailto:clofton@austincodingacademy.com).
The subject of the email should be `PHP Intro Assignment 3`.

Topics covered
--------------

* arrays
* associative arrays
* foreach loops
* built in functions

Problem 0 - Conceptual - conceptual.txt
----------------------------------

Follow along with each of the following PHP tutorials:

0. [PHP Arrays - First steps][0]
0. [PHP Arrays - Associative Arrays][1]
0. [PHP Arrays - Iterating through arrays][2]
0. [PHP Arrays - The array operator][3]
0. [(Video) The PHP Foreach Loop][4]

### Questions

1) Define the following terms (Some may need to be googled):

* Array
* Sequential php array
* Associative php array
* Element
* Array size
* Index
* Loop body
* Key/value pair

2) Why are Arrays useful? Why not just use multiple simple variables?

3) What is a characterstic exhibited by every non-empty Array?

4) What is the size of the array `$myArray`? Do you need to know the contents of
the array in order to answer this question?

5) Assuming the array `$hobbies` is non-empty, what is the index of its last
element? Do you need to know the contents of the array in order to answer this
question?

6) Assuming the array `$cars` is non-empty, what is the index of its first
element? Do you need to know the contents of the array in order to answer this
question?

7) For the following foreach loops, fill in the blank with an appropriately named
variable:

a.

    foreach($people as _______){
        ...
    }

b.

    foreach($hobbies as _______){
        ...
    }


c.

    foreach(______ as $cat){
        ...
    }


d.

    foreach(______ as $order){
        ...
    }

8) Provide 10 examples of real-life objects or situations that could be
represented by a PHP Array (either associative or sequential)

9) Assuming the array `$games` is non-empty, what is the **value** of its last
element? Do you need to know the contents of the array in order to answer this
question?

10) (Discussion question): Regarding foreach loops, explain what the "current iteration"
or the "current element" means.

11) (Bonus question): True or False: An array of 100 numbers takes up memory than
100 individual numeric variables. Justify your answer.

Problem 1 - Arrays - problem1.jpg
---------------------------------

Either using your phone's camera with pen+paper or an image editor like MSPaint,
visually justify your answer to Problem 0 question 5. (Hint: What would you draw
on a whiteboard in front of a class if you were teaching the concept?)

Problem 2 - Foreach - problem2.php
----------------------------------

"Loop unrolling" is a technique used by compilers to optimize execution speed of a program.
The process is to take a loop defined in the source code and translate the loop
to equivalent code that does not contain any loops. When a loop is unrolled, the loop body
**must be preserved**. The loop body will appear many times in the unrolled version of the loop.

Suppose a PHP compiler is given the following code:

    <?php
        $nums = array(5,12,7,8,10);
        foreach($nums as $n){
            echo $n;
        }
    ?>

If the compiler were to perform loop unrolling on the code above, what would the resulting
PHP code look like?

(Note: Programmers should not unroll loops in their own source)

Problem 3 - Foreach - problem3.php
----------------------------------

For sequential PHP arrays, foreach loops give you (optional) access to the index of the current
iteration in addition to the element. [View a demo][5].

Consider the following arrays:

    $atx_weekly_forecast = [77, 82, 100, 93, 80, 66, 70];
    $days_of_week = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

Suppose index 0 in the `$atx_weekly_forecast` array represents Sunday.
Create a foreach loop that echos out

    The temperature on Sun will be 77
    The temperature on Mon will be 82
    The temperature on Tue will be 100
    ...
    ...

Problem 4 - Arrays - problem4 directory
---------------------------------------

Create a `problem4` directory within your `HW3` directory. The answers to the
problems below should have their own file within the problem4 directory.
For example, `problem-c.jpg`

Consider the following array:

    $x = [2,0,1,4,3];

For each of the expressions below:

1. Use PHP to echo the value of the expression
2. Either with pen+paper or an image editor like MSPaint, visually justify the value PHP echoes.

EXAMPLE: `$x[2] + $x[1]`
* Code: `echo $x[2] + $x[1]` (prints out 1)
* Visual justification: ![Example visual justification](http://i.imgur.com/bsE7k2G.png)


* A. `2 * $x[0]`
* B. `$x[0] * $x[0]`
* C. `$x[count($x)-1]`
* D. `$x[count($x)-2] + $x[count($x) - count($x)]`
* E. `$x[$x[0]]`
* F. `$x[$x[$x[2]+1]]`

Problem 5 - Associative Arrays - problem5.php
---------------------------------------------

At Austin Coding Academy, we have to keep track of how many students are
in each class. Suppose we've been given the following information:

* Front end intro has 25 students
* Back end intro has 15 students
* Front end intermediate has 12 students
* Back end intermediate has 9 students
* Advanced has 7 students

Create an associative array that stores this class data, using computer
friendly names as the keys (For example "Front End Intro" would be
`front_end_intro`).

Then, for each class in the array, echo how many students there are for the class.

BONUS: Create another associative array that maps the computer friendly course
names to the Human readable course names. Have the program print out the
human readable course names in the output instead of the computer friendly course names.

Problem 6 - Foreach - problem6.php
----------------------------------

PHP gives us a clean alternative syntax for a foreach loop when we intend to use the loop to echo HTML.
[View example here][6]. Click "Run" to see the output.

Create an associative array named `$myself` with the following data:

* Name
* Favorite food
* Favorite hobby
* Favorite movie
* Computer operating system
* Average typing wpm

Use the alternative foreach loop syntax to echo out this information.

Problem 7 - Comprehensive - amazon.php
----------------------------------------

You are working with Amazon.com's front end team to populate the Orders page. The front end team
has given you a PHP document with the styled order page. Download the following php file to your
htdocs directory and navigate to it in your browser: [amazon.php file](https://gist.github.com/joequery/e6975dad8d0ced70b0ad)

This is what you should see:

![amazon image](http://i.imgur.com/OFwtR75.jpg).

Even though the front end team knows how to design and style the page, they do not know how to take
the PHP arrays at the top of the document and make the page dynamic based upon the values of the
arrays.

Use your knowledge of php arrays and foreach loops to populate the document dynamically based upon
the arrays at the top of the php document. Upon success, your document should look like so:

![amazon finished](http://i.imgur.com/Y66edLU.jpg)

Problem 8 - Preparative - conditions.txt
----------------------------------------

To prepare for upcoming classes, read the following articles/videos related to logic
and if-else statements. For each article/video, write a paragraph summarizing
the content.

0. [Relational expressions][7]
0. [intro to php if statements][13]
0. [if-else statements][11]
0. [intro to logical operators][14]
0. [Truth tables][8]
0. [php conditionals][12]
0. [Truth tables 2][9]
0. [DeMorgan's Laws][10]

[0]: http://www.hackingwithphp.com/5/1/0/first-steps
[1]: http://www.hackingwithphp.com/5/2/0/associative-arrays
[2]: http://www.hackingwithphp.com/5/3/0/the-two-ways-of-iterating-through-arrays
[3]: http://www.hackingwithphp.com/5/4/0/the-array-operator
[4]: https://www.youtube.com/watch?v=S1chCEi85NI
[5]: http://ideone.com/vaW3Ga
[6]: http://bit.ly/1LH02WC
[7]: https://www.macs.hw.ac.uk/~pjbk/pathways/cpp1/node78.html
[8]: https://www.youtube.com/watch?v=r6_hIRYeGq8
[9]: https://www.youtube.com/watch?v=PucdPQBdaIQ
[10]: https://www.youtube.com/watch?v=tKnS3s8fOu4
[11]: http://www.tutorialrepublic.com/php-tutorial/php-if-else-statements.php
[12]: http://www.hackingwithphp.com/2/6/8/conditional-statements
[13]: http://www.tizag.com/phpT/if.php
[14]: https://www.youtube.com/watch?v=j9xt9ddFTEk
