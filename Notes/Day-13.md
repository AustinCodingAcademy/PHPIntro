Plan For Class, Day 13
======================

Plan
----

* Revisit `for` and `while`
* Go over the `for` loop homework, try some of them as while loops instead
* Talk about when you should still use `foreach` instead of `while` / `for`
    * It's easier for arrays
    * Doing array stuff with `for` and `while` can be unnecessarily complicated
    * Can introduce bugs
* Built-in functions:
    * Revisit `isset`
    * Learn about `explode`
* Revisit `functions`, look at functions calling other functions


Additional Exercises
--------------------

* `isset` example 1 -
    Let's say you've already included someone else's file, but you're not sure if it's defined
    the global variable $APP_PATH.  If the variable has already been set, you'd like to use the
    value it already has, but if it hasn't been set, you'd like to set it to the value "/var/www"

* `isset` example 2 - Take an array that's missing some keys and figure out which ones they're missing

* functions calling functions example -

    * GOAL:
        * Reinforce the purpose and syntax of creating and using functions
        * Illustrate how functions that do simple things can combine to form functions that do complex tasks,
          without any single function becoming too complex or verbose

    * 1. Create a function called `longest_string` that takes an array strings and returns the one that's longest

    * 2. Create a function `split_into_words` that takes a string and splits it into words,
         returning an array of the words.  (Learn about `explode` function)

    * 3. Create a function `longest_word_in_essay` that takes an "essay" (a string) and returns the longest
         word.  Use your other functions `longest_string` and `split_into_words`

