<!DOCTYPE html>
<html>
    <head>
<?php

$db = new PDO('pgsql:host=ec2-23-21-238-246.compute-1.amazonaws.com;port=5432;dbname=dbfuplouemrf5,itenvwthrjxvzg,fe4517ed2fd76bc283b5c66571a0fb4de965b489b47b2481a8e19bba1a7e399c');

$book = $_POST['book'];
$chapter = $_POST['chapter'];
$verse = $_POST['verse'];
$content = $_POST['content'];

$query = 'INSERT INTO scripture(book, chapter, verse, content) VALUES( 7, :book, :chapter, :verse, :content)';
$statement = $db->prepare($query);

$statement->bindValue(':book', $book);
$statement->bindValue(':chapter', $chapter);
$statement->bindValue(':verse', $verse);
$statement->bindValue(':content', $content);

$statement->execute();
?>
    </head>
    <body>
    </body>
</html>
