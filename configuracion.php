<?php
  require_once 'vendor/autoload.php';

  $clientID = '706912136995-bmka1i19kupldhcohi420fh8q1nvd7ha.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/herramientascloud/perfil.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>