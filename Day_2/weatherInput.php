<html>
    <head>
        <title>Arrays weather input</title>
    </head>
    <body>
    <h2>Member the weather</h2>
    <?php
    function chBox()
    {
        $arrays = func_get_args();
        foreach ($arrays as $w) {
            echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$w\" />"
                . $w . "<br />";
        }
    }
            ?>
    <?php
    if(!isset($_POST['submit'])) {
        //display
        ?>
    <form method="post" action="weatherInput.php">
            <?php
            $weather = array(1 => 'Sunshine', 'Clouds', 'Rain',
                'Hail', 'Windy', 'Snow', 'Heatwave');
            ?>
        <select name="weatherType">
            <?php
            foreach($weather as $w => $value)
                echo "<option value=$w>" . $value . "</option>";
         ?>
        </select>
        <p>Please enter your information:</p>
        City: <input type="text" name="city" />
        Date: <input type="text" name="date" />
        Month: <input type="text" name="month" />
        Year: <input type="text" name="year" />
        <p>Please choose the kinds of weather you have experienced:</p>
            <?php chBox('Sunshine', 'Rain', 'Snow', 'Hail', 'Windy', 'Heatwave'); ?>
        <input type="submit" name="submit" value="Submit" />
    </form>
    <?php } else {
        $inputData = array($_POST['city'], $_POST['date'],
                            $_POST['month'],
                            $_POST['year']);
        echo "In $inputData[0] on the $inputData[1] of $inputData[2] $inputData[3], you observed the following weather: <br /><ul>";
        $weathers = $_POST['weather'];
        foreach ($weathers as $w)
            echo "<li>$w</li>\n";

echo "</ul>";
    }
    ?>

    </body>
</html>
