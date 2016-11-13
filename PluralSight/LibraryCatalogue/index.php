<!DOCTYPE HTML>
<html>

    <head>
        <title>Library Home Page</title>
    </head>
    <body>
        <img src="https://gerryco23.files.wordpress.com/2013/01/jeanette-winterson-outside-accrington-library.jpg" width="300" height="200" >
        <?php
        date_default_timezone_set('UTC');
        echo date("d/m/Y H:i:s") . "<br />";
        ?>
    <hr>
        <h3> Welcome to the Library! </h3>
        <form action="booksearch.php" method="get">
            <input type="text" name="query" placeholder="Author or Title">
            <input type="submit" value="Search Books">

        </form>

    <!--- put a <form> here with <input type=text /> for search box
       action="booksearch.php
       link is using GET, hence the error -->

    </body>
    <p style="position:absolute;bottom: 0"><a href="ContactUs.php">Contact Us</a></p>


    </html>