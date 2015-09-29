Examples of Datasets that can be stored in Nested Arrays
--------------------------------------------------------

## Blue Book Listings of Cars ##

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

**Questions**

1) Make a folder in your htdocs: `htdocs/day5`

2) Copy the code of the above array into your `htdocs/day5/ex1.php`.
   Add a `print_r()` to print out the array.  Go to `{YOUR_IP_ADDRESS}/day5/ex1.php}`
   and see if you can see the array or if you get an error of some kind.

3) What do you think those 


*Finding Data in a Nested Array*

3) Write the PHP code for accessing the Blue Book information
   for the Honda Civic in 2002.

4) Write the PHP code for accessing the dealership price 
   for the Ford Explorer in 2003.

5) Write the PHP code for accessing the dealership price 
   for the Ford Explorer in 2003.


* Deciding on a Car to Buy => Criteria => Importance level 0-10

    <?php
    $carBuyingCriteriaImportance = array(
        'affordability' => 6,
        'sportiness' => 5,
        'reliability' => 8,
        'interior space' => 4,
        'maintainability' => 5,
    );

    $carCriteria = array(
        'Honda Accord' => array(
            'affordability' => 5,
            'sportiness' => 4,
            'reliability' => 7,
            'interior space' => 5,
            'maintainability' => 6,
        ),
        'Miata' => array(
            'affordability' => 4,
            'sportiness' => 8,
            'reliability' => 4,
            'interior space' => 3,
            'maintainability' => 4,
        ),
        'Ford Explorer' => array(
            'affordability' => 4,
            'sportiness' => 5,
            'reliability' => 5,
            'interior space' => 9,
            'maintainability' => 5,
        ),
    );
    ?>

* Classes => Students => Assignments => Grades

* Social Posts => Content, Comments (=> user, content, time), Likes (=> user, time), Post Time

* Drinks / Cocktails => array of (Quantity, Unit, Ingredient)

* Restaurant Orders => (Table #, Items, Time, Server, Delivered y/n)

* Issue Tracker => (subject, steps to reproduce, owner, date submitted, due date, reproduced y/n, feature)

