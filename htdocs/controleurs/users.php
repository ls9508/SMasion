<?php

/**
 * - Controler : 
 * - Create variables, 
 * - elaborate contents
 * - identify the right view
 */ 

/**
 * User controler
 */

// We include the user file from the model
include('./modele/requetes.users.php');



// if the function is undefined, we display the main page
if (!isset($_GET['fonction']) || empty($_GET['fonction'])) {
    $function = "home";
} else {
    $function = $_GET['fonction'];
}

switch ($function) {
    
    case 'home':
        //affichage de l'home
        $vue = "home";
        $title = "Home page";
        break;
        
        
    case 'inscription':
        $vue = "inscription";
        $alerte = false;
        
        // This part of the code is called only if a form has been sent
        if (isset($_POST['username']) and isset($_POST['password'])) {
            
            if( !isAString($_POST['username'])) {
                $alerte = "Username must be a string.";
                
            } else if( !isAPassword($_POST['password'])) {
                $alerte = "Invalid password.";
                
            } else {
                
                $values = [
                    'username' => $_POST['username'],
                    'password' => password_hash($_POST['password'], PASSWORD_DEFAULT) // password encryption
                ];

                // Insertion using the DB in the model
                $retour = insertion($bdd, $values, $table);
                
                if ($retour) {
                    $alerte = "Registration successful";
                } else {
                    $alerte = "Failure to register in the database";
                }
            }
        }
        $title = "Registration";
        break;
        
    case 'liste':
        $vue = "liste";
        $title = "List of registered users";
        $entete = "List:";
        
        $liste = retrieveAll($bdd, $table);
        
        if(empty($liste)) {
            $alerte = "No registered users yet";
        }
        
        break;
        
    default:
        // if no function matches the GET parameter
        $vue = "erreur404";
        $title = "error404";
        $message = "Erreur 404 : page not found.";
}

include ('vues/header.php');
include ('vues/' . $vue . '.php');
include ('vues/footer.php');
