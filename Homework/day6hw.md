Day 6 Homework - Importing CSVs into Arrays
===========================================
*Due Tue Oct 6 2015*


Instructions and Setup
----------------------

This homework is to help solidify the CSV and array concepts we learned in Thursday class.  If you have any questions please ask me at [ryan@austincodingacademy.com](mailto:ryan@austincodingacademy.com).

0. Consult the [Notes from Day 6](/Notes/day6notes) of class to remind yourself of the different ways we worked with CSV files in class. We will refer to these examples in the homework problems below.

1. Create a folder called `day6hw` in your `htdocs`.  You will put all files related to this homework in this folder.

2. When you are done with the homework, zip up all the files into a zip file called `day6hw-<YOUR-NAME>.zip`.

3. Email your finished zip file to [ryan@austincodingacademy.com](mailto:ryan@austincodingacademy.com), [brennon@austincodingacademy.com](mailto:brennon@austincodingacademy.com), [joe@austincodingacademy.com](mailto:joe@austincodingacademy.com), and [clofton@austincodingacademy.com](mailto:clofton@austincodingacademy.com)



Exercises: CSV Import - Austin Weather
--------------------------------------

1. Download the dataset [Data/austin-weather-sep-2015.csv](https://raw.githubusercontent.com/AustinCodingAcademy/PHPIntro/master/Data/austin-weather-sep-2015.csv) from the PHPIntro GitHub, and put it in your `day6w` folder.  The CSV file contains some Weather Data for Austin during September 2015.

2. Using a method similar to the first CSV import we did in class (look at [Notes/day6notes/csv2.php](/Notes/day6notes/csv2.php) for reference), import this weather CSV into a PHP array, and `print_r()` the results.  Put your work in a file called `day6hw/ex2.php`.

3. Look at the array you now have (called `$rows` in the csv2.php example).  Is this a nested array?  If so, how deeply nested?  Is this an associative array or a sequential array?  Put your answers in a file called `day6hw/ex3`.

4. Where are the column / field names stored in your array?  Define a variable called `$fieldNames` and store the field names in it.  Try to automatically get the field names without having to manually type them in in your code.  Copy your `ex2.php` to `ex4.php` and add the `$fieldNames` to your code and `print_r()` it.

5. Using a method similar to the associative array CSV import that we did later in class, (look at [Notes/day6notes/csv-assoc.php](/Notes/day6notes/csv-assoc.php) for reference), import the same CSV file into an associative array and `print_r()` the result.  (Save as `ex5+6.php`)

6. Use a foreach loop to find the day with the highest Max Humidity.  You can add it to the end of `ex5+6.php`.

