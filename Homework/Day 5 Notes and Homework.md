Day 5 Notes and Homework
------------------------
by Ryan Murphy

**Covers:** Nested Arrays, Associative Arrays, Functions

**Due date:** Please turn this in by class on Tuesday, Sep 6, 2015.



Unified Notes and Homework: An Experment
----------------------------------------
Today I'm trying out a change to the way we've been doing notes and homework.
Instead of separate documents they will be the same one.

We will work on these examples in class, to illustrate and clarify the concepts
we are studying.  When class is over, whatever we haven't gone over is the
homework.  Since you already have a lot of homework due this Thursday, this
homework is not due until Tuesday Sep 6, 2015.

You are welcome to start early on the homework, but understand that we will
cover many of these in class before the due date.  As I continue coming up with examples,
I will add them to this document, and they will become future lecture examples
and/or homework.

By Friday evening, I'll stop adding examples to this homework, and start adding
any new examples to the next homework.

Get as far as you can in the homeworks.  The repetition will be very helpful
to solidifying the concepts for you.  If you can't get all the way through
the homework by the deadline, don't worry.  We understand that life happens
and that not everyone is going to be 100% with the homework.  However, it's
important for your growth as a dev that you do to things with these homeworks:

1) Get as far as you can and turn it in

and

2) If you're getting stuck, tell me so I can help

If I'm not available to help at the time then ask Brennon or Joe.  They are both
very knowledgable and are here to help.


Examples of Datasets that can be stored in Nested Arrays
--------------------------------------------------------

### Example 0. Blue Book Listings of Cars ###

```php
   <?php
    $blueBookListings = array(
        2000 => array(
            'Honda' => array(
                'Accord' => array(
                    'dealer price' => 5000,
                    'private party price' => 4000,
                    'trade-in price' => 3000
                ),
                'Civic' => array(
                    'dealer price' => 4300,
                    'private party price' => 3600,
                    'trade-in price' => 2500
                ),
            ),
            'Ford' => array(
                'Taurus' => array(
                    'dealer price' => 4000,
                    'private party price' => 3500,
                    'trade-in price' => 2000
                ),
                'Explorer' => array(
                    'dealer price' => 6500,
                    'private party price' => 5000,
                    'trade-in price' => 4300
                ),
            ),
            'Toyota' => array(
                # ...
            ),
        ),
        2001 => array(
            'Honda' => array(
                'Accord' => array(
                    'dealer price' => 5500,
                    'private party price' => 4500,
                    'trade-in price' => 3500
                ),
                'Civic' => array(
                    'dealer price' => 4700,
                    'private party price' => 3900,
                    'trade-in price' => 2800
                ),
            ),
            'Ford' => array(
                'Taurus' => array(
                    'dealer price' => 4400,
                    'private party price' => 3800,
                    'trade-in price' => 2400
                ),
                'Explorer' => array(
                    'dealer price' => 6900,
                    'private party price' => 5500,
                    'trade-in price' => 4700
                ),
            ),
            'Toyota' => array(
                # ...
            ),
        ),
        2002 => array(
            'Honda' => array(
                'Accord' => array(
                    'dealer price' => 5800,
                    'private party price' => 4800,
                    'trade-in price' => 3800
                ),
                'Civic' => array(
                    'dealer price' => 5000,
                    'private party price' => 4200,
                    'trade-in price' => 3100
                ),
            ),
            'Ford' => array(
                'Taurus' => array(
                    'dealer price' => 4800,
                    'private party price' => 4100,
                    'trade-in price' => 2800
                ),
                'Explorer' => array(
                    'dealer price' => 7200,
                    'private party price' => 5900,
                    'trade-in price' => 5000
                ),
            ),
            'Toyota' => array(
                # ...
            ),
        ),
        2003 => array(
            # ...
        ),
        # ...
    );
    ?>
```

**Setup**

a) Make a folder in your htdocs: `htdocs/day5`


**Preliminary Questions**

b) Copy the code of the above array into your `htdocs/day5/ex0.php`.
   Add a `print_r()` to print out the array.  Go to `{YOUR_IP_ADDRESS}/day5/ex0.php}`
   and see if you can see the array or if you get an error of some kind.

c) What are those lines that say "# ..."?  Why are they most likely included?


**Finding Data in a Nested Array**

d) Write the PHP code for accessing the Blue Book information
   for the Honda Civic in 2002.

    <?php
    echo $blueBookListings[2002]['Honda']['Civic'];
    ?>

e) Write the PHP code for accessing the dealership price 
   for the Ford Explorer in 2001.

    $blueBookListings[2001]['Ford']['Explorer']['dealer price']

f) Write the PHP code for accessing the trade-in price 
   for the Honda Accord in 2000.

    $blueBookListings[2000]['Honda']['Accord']['trade-in price']

g) Set the dealer price for the 2000 Honda Civic to $500 more than it is now.

    $blueBookListings[2000]['Honda']['Civic']['dealer price'] += 500;

h) EXTRA CREDIT Write code that finds the maximum dealer price in the whole array.

i) Define a function getDealerPrice($year, $make, $model) that takes as input
   a Year, Make and Model and returns the dealer price for that car.

j) Define a function setTradeInPrice($year, $make, $model, $newPrice)
   that overwrites the value of the trade-in price for that
   particular car.  It doesn't need to return anything, it just
   needs to overwrite that variable.




## Example 1. Football Teams ##

a) Create a nested array that store some NFL teams and players.  Here's an example structure:

    $NFL = array of Conference
        => array of Team
            => array('name', 'player no', 'position')

    or

    array of Countries 
        => array of States/Provinces
            => Cities
                => Population

    $NFL = array(
        'NFC' => array(
            'Dallas Cowboys' => array(
                array(
                    'name' => 'Tony Romo',
                    'player no' => 9,
                    'position' => 'quarterback',
                ),
                array(
                    'name' => 'Dez Bryant',
                    'player no' => 88,
                    'position' => 'wide receiver',
                ),
                array(
                    'name' => 'Kellen Moore',
                    'player no' => 17,
                    'position' => 'quarterback',
                ),
            ),
            'New Orleans Saints' => array(
                array(
                    'name' => 'Drew Brees',
                    'player no' => 9,
                    'position' => 'quarterback',
                ),
            ),
        ),
        'AFC' => array(
            'New England Patriots' => array(
            ),
        ),
    );


Once you have your array, write the php code the get the following data from it:

b) Pick a Player and write the PHP code to access his player number.

c) Pick a Team and write the PHP code to go through a foreach loop and echo all
   the players' names.



## See also ##

* [Lesson Summary Day 5](/Lessons/Day 5: Nested Arrays, Associative Arrays and Functions.md)

