<?php
  // load the XML file
    $xml = simplexml_load_file('ESTS1.xml');

    // get the form data
    if(isset($_POST["perm_nom_add"])){
      $perm_id_add = $_POST['perm_nom_add'];
      $role_id_add = $_POST['role_nom_add'];

      $permission_role = $xml->roles_permissions->addChild('role_permission');
      $permission_role->addAttribute('id_Permissions', $perm_id_add);
      $permission_role->addAttribute('id_Roles', $role_id_add);
      // save the modified XML file
      $xml->asXML('ESTS1.xml');

      $dom = new DOMDocument('1.0');
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      $dom->load('ESTS1.xml');
      $dom->save('ESTS1.xml');
      // return a response to the client
      echo 'success';
  }

    if(isset($_POST["perm_nom"])){
      $perm_nom = $_POST['perm_nom'];
      $perm_id = count($xml->Permissions->permission) + 1;

      $permission = $xml->Permissions->addChild('permission');
      $permission->addAttribute('id', $perm_id);
      $permission->addChild('nom', $perm_nom);
      // save the modified XML file
      $xml->asXML('ESTS1.xml');

      $dom = new DOMDocument('1.0');
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      $dom->load('ESTS1.xml');
      $dom->save('ESTS1.xml');
      // return a response to the client
      echo 'success';
  }
    if(isset($_POST["mat_nom_user"])){
      $mat_nom_user = $_POST['mat_nom_user'];
      $login_user = $_POST['login_user'];


      $user_matiere = $xml->access->addChild('user_matiere');
      $user_matiere->addAttribute('login_user', $login_user);
      $user_matiere->addAttribute('id_Matieres', $mat_nom_user);
      // save the modified XML file
      $xml->asXML('ESTS1.xml');

      $dom = new DOMDocument('1.0');
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      $dom->load('ESTS1.xml');
      $dom->save('ESTS1.xml');
      // return a response to the client
      echo 'success';
  }

    if(isset($_POST["mat_nom"])){
      $mat_nom = $_POST['mat_nom'];
      $module_nom = $_POST['module_nom'];
      $filiere_nom = $_POST['filiere_nom'];

      $matiere_id = count($xml->Matieres->matiere) + 1;

      $matiere = $xml->Matieres->addChild('matiere');
      $matiere->addAttribute('id', "MA".$matiere_id);
      $matiere->addAttribute('id_module', $module_nom);
      $matiere->addAttribute('id_Filieres', $filiere_nom);
      $matiere->addChild('nom', $mat_nom);
      // save the modified XML file
      $xml->asXML('ESTS1.xml');

      $dom = new DOMDocument('1.0');
      $dom->preserveWhiteSpace = false;
      $dom->formatOutput = true;
      $dom->load('ESTS1.xml');
      $dom->save('ESTS1.xml');
      // return a response to the client
      echo 'success';
  }

    if(isset($_POST["login"])){
        $login = $_POST['login'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pwd = $_POST['pwd'];
        $role_id = $_POST['role'];
        // create a new user element
        $user = $xml->Users->addChild('user');
        $user->addChild('login', $login);
        $user->addChild('password', $pwd);
        $user->addChild('Nom', $nom);
        $user->addChild('Prenom', $prenom);
        $user->addChild('id_Roles', $role_id);
        
       // save the modified XML file
        $xml->asXML('ESTS1.xml');

        $dom = new DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->load('ESTS1.xml');
        $dom->save('ESTS1.xml');
        // return a response to the client
        echo 'success';
    }
    
?>
