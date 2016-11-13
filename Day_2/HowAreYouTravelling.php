<html>
    <head>
        <title>How are you Travelling?</title>
    </head>
    <body>
    <h2>How are you Travelling</h2>
    <p>Travel takes many forms, whether across town, across the country, or around the world.
    Here is a list of some common modes of transportation:</p>
    <?php
    if(!isset($_POST['submit'])) {
    //Array
    ?>
        <?php
        $travel = array(
            "Speed Boat",
            "Caravan",
            "Submarine",
            "Magic Carpet");
        ?>
        <?php
        foreach ($travel as $t) {
            echo"<li>$t</li>\n";
        }
        ?>
    <form method="post" action="HowAreYouTravelling.php">
    <p>Please add your favorite, local or even imaginary modes of transport to the list, seperated by commas!</p>
        <input type="text" name="added" size="80" />
        <br />
        <input type="submit" name="submit" value="Go" />
        <?php }
        foreach ($travel as $t) {
            echo"<input type=\"hidden\" name=\"travel[]\" value=\"$t\"";
        }

        ?>
    </form>
    </body>
</html>

<?php
function combinesArray($travel) {
}

    $added = expode(',', $_POST,['Transport']);
    array_splice($travel, count($travel), 0, $added);
foreach($travel as $t) {
    echo"<li>$t</li>\n";
}
?>