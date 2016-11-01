<?php

if(!isset($_POST['submit'])) {
    ?>
    Please enter a number:
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="height" />
        <input type="submit" name="submit" value="Build" />
    </form>

<?php }

else {

    $height = $_POST['height'];
    for($count = 0; $count <= $height; $count++) {
        //7 times
        //produce space
        $blanks = $height - $count;
        for($b = 0; $b < $blanks; $b++)
            echo "&nbsp;";
        //loop integer number
        for($v = 0; $v < $count; $v++)
            echo $count . "&nbsp;";
        if($count < $height)
            echo "<br />";
    }
}

