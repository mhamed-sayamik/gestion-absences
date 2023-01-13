<?php
  // load the XML file
    $xml = simplexml_load_file('ESTS1.xml');

    // get the form data
    if(isset($_POST["login"])){
        $login_edit = $_POST['login'];
        $nom_edit = $_POST['nom'];
        $prenom_edit = $_POST['prenom'];
        $pwd_edit = $_POST['pwd'];
        // $role_id_edit = $_POST['role'];

        foreach ($xml->Users->user as $user) {
            if ($user->login == $login_edit) {
              // update the nom and prenom of the user
                $user->Nom = $nom_edit;
                $user->Prenom = $prenom_edit;
                $user->password = $pwd_edit;
                break;
            }
        }
        // save the modified XML file
        $xml->asXML('ESTS1.xml');

        // return a response to the client
        echo 'success';
    }
    
?>
