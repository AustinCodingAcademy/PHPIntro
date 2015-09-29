Day 4 Notes --
    More Loops,
    Associative Arrays
    and User-defined Functions
------------------------------------------------------------------------


Q. Take an array, like this one:

<?php
    $hobbies = array('biking','fishing','dancing','coding');

    # Q. take the array, and print it out like this:

    # biking, fishing, dancing, and coding

    foreach ($hobbies as $hobby) {
        echo $hobby;
    }
?>






Quiz
----

<?php
    $colors = array('red', 'blue', 'yellow', 'green',
                    'pink', 'white', 'black');

    # 1. Go through and echo out all the colors, with <p></p> around them

    foreach ($colors as $color) {
        echo "<p>$color</p>";
    }

    # 2. How many colors are in the array?  (Write code to answer)

    # 3. Add a new color that isn't listed yet into the array.

    # email answers to:
        # ryan@austincodingacademy.com
        # brennon@austincodingacademy.com
        # clofton@austincodingacademy.com

    # 1 minute left
?>

















Associative Arrays
------------------

* all arrays in PHP are key/value pairs


    <?php
    array('hiking','fishing','biking','cooking','going to shows')

    array(
        0 => 'hiking',
        1 => 'fishing',
        2 => 'biking',
        3 => 'cooking',
        4 => 'going to shows'
    )
    ?>


* "normal" (non-associative) arrays have implied keys that are numbers: 0,1,2,3,4,5

* associative arrays have keys that are user-defined strings or numbers

* associative arrays are like a "mapping" between strings and values

    * aka a hash, dictionary or a lookup table

    <?php

    $customerSatisfaction = array(
        'Nick Brown' => 10,
        'Jill White' => 5,
        'Greg Myer' => 8,
        'Grace Jones' => 8,
        'Brandon Lee' => 0,
    );

    # Q. What is the average customer satisfaction?

    # add up the total
    $total = array_sum($customerSatisfaction);

    # divide
    $avg = $total / count($customerSatisfaction);

    echo "<p>The average customer satisfaction rating is $avg</p>";




    # Extra Credit: What is the most common level of satisfaction?

    ?>
























    <?php
    $illnessCases = array(
        "measles" => 1000,
        "mumps" => 500,
        "cold" => 3500,
        "obesity" => 1400,
        "allergies" => 4300,
    );

    # Q. What is the illness with the most cases?

    # Extra Credit: List the illnesses in alphabetical order

    ?>







    <?php
        $accessLog = array(
            array('ip address' => '127.0.0.1', 'uri' => '/cost_script', 'time' => '2015-09-24 00:00:00'),
            array('ip address' => '46.24.36.14', 'uri' => '/', 'time' => '2015-09-24 08:05:43'),
            array('ip address' => '46.24.36.14', 'uri' => '/contact-us', 'time' => '2015-09-24 08:06:00'),
            array('ip address' => '62.51.32.21', 'uri' => '/products?query=candy+bars', 'time' => '2015-09-24 10:05:43'),
        );

    # Look and answer

        # Q. Did anyone access more than one page?
        # Q. How far apart were their visits?

        # Q. Which IP address had a user who was probably hungry?

    # Write code:

        # Q. How many page accesses are there?

        # Q. How many accesses were there for each IP address?

            # create an associative array $numVisits that maps each IP address to the number of visits

        # Q. Which IP address had the most visits?
    
    ?>







User-Defined Functions
----------------------




Possible Extra Stuff to Do
--------------------------

* Loop example using data sets: sessions, users, customer satisfaction stats
* Command Line again, this time with tmux for split screen




Command Line again (20 minutes towards end of class)
------------------

* Too confusing last time
* I used vim in the command line, didn't really need to
* Let's figure out where the directory mappings are in VirtualBox
* Let's use tmux to allow split screen
* Recap about stdin and stdout and readline()


