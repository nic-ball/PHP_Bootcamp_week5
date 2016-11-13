<html>
<head>
    <title>Preference Set</title>
</head>
<body>
<?php
    $colours = array('red' => '#FF0000',
        'green' => '#00FF00',
        'blue' => '#0000FF');

    $backgroundName = $_POST['background'];
    $foregroundName = $_POST['foreground'];

    setcookie('bg', $colours[$backgroundName], time() + (86400 *30));
    setcookie('fg', $colours[$foregroundName], time() + (86400 * 30));

?><p>Thank You for selecting colour preferences:<br />
    Background: <?= $backgroundName; ?><br />
    Foreground <?= $foregroundName; ?><br />
</p>Click <a href="ColourCookiesPage3.php">here</a> to see result.
</body>
</html>