<?php 

    echo "<h1>Functions -</h1>";

    // how to create a function

    // function firstFunc() {  // defining a function
    //     echo "<p>Hello World!</p>";
    // }
    // firstFunc();    // calling a function   

    // passing a value to a function

    function greet($name, $color) { // accepting values
        echo "<p>Hi, my name is $name, and my favorate color is $color.</p>"; // adding variables/values
    }

        greet("Vaibhaw", "Yellow"); // Passing a value to a function
        greet("Vipul", "Black");
?>

<p>Site name: <strong><?php bloginfo('name'); ?></strong></p>
<p>Site description: <strong><?php bloginfo('description'); ?></strong></p>

<hr>

<h1>Arrays -</h1>

<?php 
    $user_names = array("Vaibhaw", "Vipul", "XYZ", "ABC", "Someone");   // creates an array of names

    function CallNames($n, $user_names){    // since $user_names is out of scope we accept $user_names here
        $count = 0; // counter
        while($count < $n-1){   // implementation of while loop
            echo "<li>$user_names[$count] </li>";
            $count++;
        }
    }
?>

<p>Hello, here's my name again: <?php echo $user_names[0] ?>.</p>
<p>And here's names of all the users: <?php echo CallNames(5, $user_names) ?>.</p>  <!-- Passing Length of array and the array itself -->