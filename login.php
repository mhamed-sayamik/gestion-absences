<?php
  // load the XML file
    $xml = simplexml_load_file('ESTS1.xml');
    
    // get the form data
    if(isset($_POST['username'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      foreach ($xml->Users->user as $user) {
        if ($username == "admin" && $password == "admin") {
        // username and password are correct, set a session variable and return success
          session_start();
          $_SESSION['logged_in'] = true;
          $_SESSION['usernameAdmin'] = $username;
          echo 'admin';
          break;
        }
        elseif ($user->login == $username && $user->password == $password) {
        // username and password are correct, set a session variable and return success
          session_start();
          $_SESSION['logged_in'] = true;
          $_SESSION['usernameProf'] = $username;
          echo 'prof';
          break;
        }
      }
    }
    
    // check the username and password against the XML file

  
?>