<?php
  // load the XML file
  $xml = simplexml_load_file('ESTS1.xml');
  
  // get the form data
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // check the username and password against the XML file
  foreach ($xml->Users->user as $user) {
    if ($user->login == $username && $user->password == $password) {
      // username and password are correct, set a session variable and return success
      session_start();
      $_SESSION['logged_in'] = true;
      $_SESSION['username'] = $username;
      echo 'success';
      return;
    }
  }
  
  // username and password are incorrect, return an error
  echo 'error';
?>
