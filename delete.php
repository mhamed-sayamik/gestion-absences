<?php 
    $xml = simplexml_load_file('ESTS1.xml');
    if(isset($_POST["login"])){

        $login = $_POST['login'];
        // iterate through the users in the XML file
        foreach ($xml->Users->user as $user) {
        // if the login of the current user matches the login of the user to delete
            if ($user->login == $login) {
                // remove the user from the XML file
                unset($user[0]);
                break;
            }
        }
        $xml->asXML('./ESTS1.xml');


        foreach ($xml->access->user_matiere as $matiere) {
        // if the login of the current user matches the login of the user to delete
            if ($matiere['login_user'] == $login) {
                // remove the user from the XML file
                unset($matiere[0]);
                // break;
            }
        }

        // save the modified XML file
        $xml->asXML('./ESTS1.xml');
    }
?>