<?php if ( $_SERVER['REQUEST_METHOD'] == "GET") {  ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
            <form action="" method="POST">

                Nom<input type="text" name="nom"><br>
                prénom<input type="text" name="prenom"><br>
                <input type="hidden" name="id" value="27" />
                <input type="submit" value="Envoyer">
            </form>
    </body>
    </html>
<?php } else { 
    
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
 
    echo "Bonjour $nom $prenom ";
}
?>


