<!DOCTYPE html>
<html>
    <head>
<?php

//$db = new PDO('pgsql:host=ec2-23-21-238-246.compute-1.amazonaws.com;port=5432;dbname=dbfuplouemrf5,itenvwthrjxvzg,fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

$db = pg_connect('host=ec2-23-21-238-246.compute-1.amazonaws.com dbname=dbfuplouemrf5 user=itenvwthrjxvzg
 password=fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];
$topic = $_POST['topic'];

$query = "INSERT INTO scriptures (book, chapter, verse, content) VALUES ( '$book', '$chapter', '$verse', '$content')";

$result = pg_query($query);
if (!$result){
    echo "Problem with the query " . $query . "<br />";
    echo pg_last_error();
    exit();
}

$query = "SELECT * FROM scriptures WHERE book='" . $book . "' AND content='" . $content . "'";

$result = pg_query($query);
        if (!$result) {
            echo "Problem with query " . $query . "<br/>";
            echo pg_last_error();
            exit();
        }

$myrow = pg_fetch_assoc($result);
$id = $myrow['id'];

$max = sizeof($topic);

print_r($topic);

for($i = 0; $i < $max; $i++)
{
    $query = "INSERT INTO manytomany (scriptureid, topicid) VALUES ('$id', '$topic[$i]')";
    $result = pg_query($query);
        if (!$result) {
            echo "Problem with query " . $query . "<br/>";
            echo pg_last_error();
            exit();
        }

    }


//$statement->bindValue(':book', $book);
//$statement->bindValue(':chapter', $chapter);
//$statement->bindValue(':verse', $verse);
//$statement->bindValue(':content', $content);
?>
    </head>
    <body>
    </body>
</html>
