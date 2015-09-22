<?php
# let's learn more about the command line!

# Review:   command line - place to run commands
#   mv      - move files and directories around
#   mkdir   - create new directories
#   rm      - delete files
#   rmdir   - delete directory, only if it's empty
#   rm -rf  - delete directory (even if it has stuff in it)
    
# you can run php scripts directly using the `php` command
# let's run this one!

# $ php ./learning-script.php

# what's the difference between running a php script directly at the command line
# vs running it through requesting a web page from the web server?


# variable assignment
$animal1 = 'cat';
$animal2 = 'dog';
# variable printing
print($animal1);
print($animal2); # catdog


# numbers
$x = 5;
$y = 6
$z = 3 + 5 + 4; # 12 - can do arithmetic
# order it does things: PEMDAS from math class: Paren Exponent Mult Div Add Sub
$z = 3 + 5 * 4; # 23, not 36, mult happened first
echo "x=$x, y=$y, z=$z\n"; # print them out


# string concatentation (putting strings together)
echo $cat . $dog . "\n";        # catdog
echo $cat . ' ' . $dog . "\n";  # cat dog

# double quoted string does easy automatic concatenation
echo "$cat $dog\n";             # cat dog (same thing, easier to type)


# arrays - collection of values, not just one
#--------------------------------------------
# can have arrays inside of arrays
$friends = array('Samir', 'Rowan', 'John', 'Jacqueline');

# can write it on multiple lines too
$friends = array(
    'Samir',
    'Rowan',
    'John',
    'Jacqueline'
);

# they are numbered from 0
echo $friends[0] . "\n";    # Samir
echo $friends[1] . "\n";    # Rowan
echo $friends[2] . "\n";    # John
echo $friends[3] . "\n";    # Jacqueline
# what about going further?
echo $friends[4] . "\n";    # ERROR

# how many items are in there?
echo count($friends);       # 4

# looping through the items in an array
foreach ($friends as $friend) {
?>
        <p>My buddy <?= $friend ?></p>
<?php  
}

?>

<!-- (btw, this is an html comment)
remember <?= $var ?>, the short form for echoing a variable?
it's the same as <?php echo $var; ?>, but the code is shorter and nicer looking
-->

