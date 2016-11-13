<html>
<head>
    <title>Book Search Results</title>
</head>
<body>
<h3>Book Search Results</h3>
<hr>
<?php

# This is the PDO version

# Get data from form
$q = trim($_GET['query'] ?? "");

if (empty($q)) {
    printf("You must specify either a title or an author");
    exit();
}

# Open the database
try {
    $db = new PDO("mysql:host=localhost;dbname=library", "root", "London2016");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    printf("Unable to open database: %s\n", $e->getMessage());
}

# Build the query. Users are allowed to search on title, author, or both

$query = "SELECT * FROM books WHERE title LIKE '%$q%' OR author LIKE '%$q%'";


try {
    $sth = $db->query($query);
    $bookcount = $sth->rowCount(); # Only works for mySQL
    if ($bookcount == 0) {
        printf("Sorry, we did not find any matching books");
        exit();
    }
    printf('<table bgcolor="#bdc0ff" cellpadding="6">');
    printf('<tr><b><td>Title</td> <td>Author</td></b>');
    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        printf("<tr> <td> %s </td> <td> %s </td> </tr>", $row["title"], $row["author"]);
    }
}
catch (PDOException $e) {
    printf("We had a problem: %s\n", $e->getMessage());
}
printf("</table>");
printf("<br /> We found %s matching books", $bookcount);

?>
</body>
</html>