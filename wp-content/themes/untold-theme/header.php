<!-- This file is utilized by WordPress for header component -->

<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head() ?>
    <!-- this functions points to functions.php file -->
</head>

<body>
    <nav class="nav">
        <div class="nav-logo">
            <span>LOGO</span>
        </div>
        <div class="nav-menu">
            <a href="#">Home</a>
            <a href="#">Image</a>
            <a href="#">Table</a>
            <a href="http://localhost/untold-academy/test-page/">Test page</a>
        </div>
        <div class="nav-search">
            <input type="text" placeholder="Search...">
            <button>Go</button>
        </div>
    </nav>

    <!-- the closing body and html tags are moved to footer as it goes from header through index.php to the footer -->