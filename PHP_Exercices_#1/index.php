<?php 

$element_request = $_SERVER["REQUEST_URI"];

if($element_request === "/home"){
    echo 'Bienvenue sur la Page d\'acceuil';
} elseif ($element_request === "/contact"){
    echo 'Page de contact';
} else{
    echo '404 - Page non trouvée';
}
     
