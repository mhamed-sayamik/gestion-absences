<?php
  // load the XML file
    $xml = simplexml_load_file('ESTS1.xml');

    // get the form data
    if(isset($_POST["login"])){
        $login = $_POST['login'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $pwd = $_POST['pwd'];
        $role_id = $_POST['role'];
        $permission_id1 = $_POST['absenceNote'];
        $permission_id2 = $_POST['absenceList'];
        $permission_id3 = $_POST['absenceEdit'];
        $permission_id4 = $_POST['userAdd'];
        $permission_id5 = $_POST['userDelete'];

        // create a new user element
        $user = $xml->Users->addChild('user');
        $user->addChild('login', $login);
        $user->addChild('password', $pwd);
        $user->addChild('Nom', $nom);
        $user->addChild('Prenom', $prenom);
        $user->addChild('id_Roles', $role_id);

        if($permission_id1 != ""){
          $permission_role = $xml->roles_permissions->addChild('role_permission');
          $permission_role->addAttribute('id_Permissions', $permission_id1);
          $permission_role->addAttribute('id_Roles', $role_id);
        }
        if($permission_id2 != ""){
          $permission_role = $xml->roles_permissions->addChild('role_permission');
          $permission_role->addAttribute('id_Permissions', $permission_id2);
          $permission_role->addAttribute('id_Roles', $role_id);
        }
        if($permission_id3 != ""){
          $permission_role = $xml->roles_permissions->addChild('role_permission');
          $permission_role->addAttribute('id_Permissions', $permission_id3);
          $permission_role->addAttribute('id_Roles', $role_id);
        }
        if($permission_id4 != ""){
          $permission_role = $xml->roles_permissions->addChild('role_permission');
          $permission_role->addAttribute('id_Permissions', $permission_id4);
          $permission_role->addAttribute('id_Roles', $role_id);
        }
        if($permission_id5 != ""){
          $permission_role = $xml->roles_permissions->addChild('role_permission');
          $permission_role->addAttribute('id_Permissions', $permission_id5);
          $permission_role->addAttribute('id_Roles', $role_id);
        }
        // save the modified XML file
        $xml->asXML('ESTS1.xml');
        // $xml->formatOutput = true;
        // $xml->asXML('ESTS1.xml');


        // return a response to the client
        echo 'success';
    }
    
?>
