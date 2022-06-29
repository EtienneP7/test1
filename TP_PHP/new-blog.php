<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Blog</title>
    <style>
        input {
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>New Blog</h1>
    <form action="saisir-blog.php" method="POST">
        <label for="titre">Titre</label>
        <input type="text" id="titre" name="titre" maxlength="100">

        <label for="texte">Texte</label>
        <input type="text" id="texte" name="texte" maxlength="500">

        <!-- Will make a dynamic select if enough time -->
        <label for="genre">Genre</label>
        <input type="text" id="genre" name="genre" maxlength="20">

        <input type="submit" value="Sauvegarder">
    </form>
</body>
</html>