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

    // since $user_names is out of scope we accept $user_names here
    function CallNames($user_names){
        $count = 0; // counter
        while($count < count($user_names)){   // implementation of while loop
            // count() function returns length of Array
            echo "<li>$user_names[$count] </li>";
            $count++;
        }
    }
?>

<p>Hello, here's my name again: <?php echo $user_names[0] ?>.</p>
<p>And here's names of all the users: <?php echo CallNames($user_names) ?>.</p>  <!-- Calling function and passing array -->