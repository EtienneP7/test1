<?php

require_once "Classe/Usager.php";
require_once "Classe/Blog.php";
require_once "Classe/BlogGenre.php";
require_once "Classe/Commentaire.php";

//$test = new Usager("Test1", "abc-123");

require_once "./connect.php";

$sql = "SELECT * FROM blog";
$blogs = $pdo->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
    <style>
        table {
            border: solid 1px black;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Texte</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($blogs as $row){
?>
        <tr>
            <td><a href="blog-edit.php?id=<?php echo $row["id"];?>"><?php echo $row["titre"]; ?></a></td>
            <td><?php echo $row["texte"]; ?></td>
        </tr>
<?php
}
?>
    </tbody>
</table>
</body>
</html>