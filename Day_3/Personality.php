<?php
    //check whether the checkbox has been selected get the value
    $attrs = $_GET['attributes'] ?? array();

//$name -> checkbox name, $query -> selected, $option -> value
function makeCheckBoxes($name, $query, $options) {
    foreach($options as $key => $value) {
        $checked = in_array($key, $query) ? "checked" : '';
        // String that represents checkbox html
        $str = "<input type=\"checkbox\" name=\"$name\" value=\"$key\"";

        if($checked != '') {
            $str .= "checked=\"$checked\" />";
        } else
            $str .= " />";

        $str .= "$value<br />";
        echo $str;

        }
    }
    $perAttributes = array(
        'perky' => 'Perky',
        'moody' => 'Moody',
        'thinking' => 'Thinking',
        'sleepy' => 'Sleepy',
        'happy' => 'Happy',
        'boomy' => 'Boomy'
    );

?>
<html>
    <head>
        <title>Personality Checkboxes</title>
    </head>
    <body>
    <h2>Member your Personality</h2>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        Select you Personality attributes:<br />
        <?php makeCheckBoxes('attributes[]', $attrs, $perAttributes);
        ?>
        <input type="submit" name="submit" value="Record!" />
    </form>
    </body>
</html>