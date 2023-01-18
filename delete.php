<?php 
    $xml = simplexml_load_file('ESTS1.xml');

    if(isset($_POST["permission_role_id"])){
        $permission_role_id = $_POST['permission_role_id'];
        list($id_Permissions, $id_Roles) = explode(".", (string)$permission_role_id);
        
        foreach ($xml->roles_permissions->role_permission as $role_permission) {
            // if the login of the current user matches the login of the user to delete
                if ((string)$role_permission['id_Permissions'] == (string)$id_Permissions && (string)$role_permission['id_Roles'] == (string)$id_Roles) {
                    // remove the user from the XML file
                    unset($role_permission[0]);
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
    }
// ----------------------------------------- DELETE PERMISSION and PERMISSION_ROLE---------------------------------------------------
    if(isset($_POST["permission_id"])){
        $permission_id = $_POST['permission_id'];
        foreach ($xml->Permissions->permission as $permission) {
        // if the login of the current user matches the login of the user to delete
            if ((string)$permission['id'] == (string)$permission_id) {
                // remove the user from the XML file
                unset($permission[0]);
                $xml->asXML('./ESTS1.xml');
                break;
            }
        }

        $toRemove = $xml->xpath("//role_permission[@id_Permissions=$permission_id]");

        foreach ($toRemove as $remove) {
                unset($remove[0]);
                $xml->asXML('./ESTS1.xml');
        }

        // save the modified XML file
        $xml->asXML('./ESTS1.xml');
        $dom = new DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->load('ESTS1.xml');
        $dom->save('ESTS1.xml');
    }

    // ----------------------------------------- DELETE MATIERE and USER_MATIERE---------------------------------------------------
    if(isset($_POST["matiere_id"])){
        $matiere_id = $_POST['matiere_id'];
        foreach ($xml->Matieres->matiere as $matiere) {
        // if the login of the current user matches the login of the user to delete
            if ((string)$matiere['id'] == (string)$matiere_id) {
                // remove the user from the XML file
                unset($matiere[0]);
                break;
            }
        }
        foreach ($xml->access->user_matiere as $user_matiere) {
            // if the login of the current user matches the login of the user to delete
                if ((string)$user_matiere['id_Matieres'] == (string)$matiere_id) {
                    // remove the user from the XML file
                    unset($user_matiere[0]);
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
    }


    // ----------------------------------------- DELETE USER_MATIERE---------------------------------------------------
    if(isset($_POST["matiere_user"])){
        $matiere_post = $_POST['matiere_user'];
        foreach ($xml->access->user_matiere as $user_matiere) {
        // if the login of the current user matches the login of the user to delete
            if ((string)$user_matiere['id_Matieres'] == (string)$matiere_post) {
                // remove the user from the XML file
                unset($user_matiere[0]);
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
    }

    // ----------------------------------------- DELETE USER AND USER_MATIERE---------------------------------------------------
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
            if ((string)$matiere['login_user'] == (string)$login) {
                // remove the user from the XML file
                unset($matiere[0]);
                // break;
            }
        }

        // save the modified XML file
        $xml->asXML('./ESTS1.xml');
        $dom = new DOMDocument('1.0');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->load('ESTS1.xml');
        $dom->save('ESTS1.xml');
    }
    
?>