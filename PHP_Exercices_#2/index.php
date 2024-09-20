<?php 

$succes = false; 
$errors = [];

if(!empty($_POST)){
    if(empty($_POST['name'])){
        $errors['name'] = "Vous devez saisir votre nom";
    } 
    if(empty($_POST["email"])){    
        $errors['email'] = "Vous devez saisir votre email";
    } 
    if(empty($_POST["message"])){
        $errors['message'] = "Vous devez saisir ce champs message";
    } 

    if(empty($errors)){
        $succes = true;
        foreach ($_POST as $key => $element) {
            $fichier = file_put_contents("fichier.txt", $key . ' : ' . $element . PHP_EOL, FILE_APPEND);
        }

 
    }
}

?>
      
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main_formulaire">
        <?php if(!empty($errors)):?>
            <p class="error_form">Vous devez saisir ce formulaire</p>
        <?php endif?>

        <?php if($succes === true):?>
            <p class="succes_form">Formulaire soumise</p>
        <?php endif?>   

        <h1>Formulaire de contact</h1>
        <form action="/index.php" method="post">
            <label for="name">Entrer votre Nom</label>
            <input type="text" name="name" id="name">
            <p class="error"><?= isset($errors["name"]) ? $errors["name"] : " "?></p>

            <label for="email">Entrer votre Email</label>
            <input type="email" name="email" id="email">
            <p class="error"><?= isset($errors["email"]) ? $errors["email"] : " "?></p>

            <label for="message">Entrer votre Message</label>
            <textarea name="message" id="message"></textarea>
            <p class="error"><?= isset($errors["message"]) ? $errors["message"] : " "?></p>

            <button>Submit</button>
        </form>
    </div>
</body>
</html>