<?php
  // load the XML file
    $xml = simplexml_load_file('ESTS1.xml');

    if(isset($_POST["perm_nom_edit"])){
      $perm_id_edit = $_POST['perm_id_edit'];
      $perm_nom_edit = $_POST['perm_nom_edit'];

      foreach ($xml->Permissions->permission as $permission) {
          if ((int)$permission['id'] == (int)$perm_id_edit) {
            // update the nom and prenom of the user
              $permission->nom = $perm_nom_edit;
              break;
          }
      }
      // save the modified XML file
      $xml->asXML('./ESTS1.xml');
      $dom = new DOMDocument('1.0');
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      $dom->load('ESTS1.xml');
      $dom->save('ESTS1.xml');

      // return a response to the client
      echo 'success';
  }

    if(isset($_POST["mat_nom_edit"])){
      $matiere_id_edit = $_POST['matiere_id_edit'];
      $mat_nom_edit = $_POST['mat_nom_edit'];
      $module_nom_edit = $_POST['module_nom_edit'];
      $filiere_nom_edit = $_POST['filiere_nom_edit'];

      foreach ($xml->Matieres->matiere as $matiere) {
          if ((int)$matiere['id'] == (int)$matiere_id_edit) {
            // update the nom and prenom of the user
              $matiere->nom = $mat_nom_edit;
              $matiere['id_module'] = $module_nom_edit;
              $matiere['id_Filieres'] = $filiere_nom_edit;
              break;
          }
      }
      // save the modified XML file
      $xml->asXML('ESTS1.xml');

      // return a response to the client
      echo 'success';
  }

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
