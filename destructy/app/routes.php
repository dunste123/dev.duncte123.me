<?php

$app->get('/', function($request, $response, $args){
  $this->view->render($response, 'home.html', [
    'title' => 'Home',
    'success' => (isset($_GET['success']) ? true : false)
  ]);
})->setname('home');

$app->post('/post', function($request, $response, $args) use ($app) {

  $params = $request->getParams();
  $hash = md5(uniqid(true));

  $message = $this->db->prepare("
    INSERT INTO messages (hash, message)
    VALUES (:hash, :message)
  ");
  $message->execute([
    'hash' => $hash,
    'message' => $params['message']
  ]);


  $to      = $params['email'];
  $subject = 'New message from destructy!';
  $message = $this->view->fetch('email.html', [
    'hash' => $hash
  ]);
  $headers = 'From: destructy@duncte123.ml' . "\r\n" .
             'X-Mailer: PHP/' . phpversion();
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  if(mail($to, $subject, $message, $headers)) {
      echo 'Email sent successfully!';
  } else {
      die('Failure: Email was not sent!');
  }

  return $response->withRedirect($this->router->pathFor('home', ['success' => true], ['success' => true]));

})->setname('send');

$app->get('/message/{hash}', function($request, $response, $args) {
  $message = $this->db->prepare("SELECT * FROM messages WHERE hash=:hash;
    DELETE FROM messages WHERE hash=:hash
  ");

  $message->execute([
    'hash' => $args['hash']
  ]);

  $message = $message->fetch(PDO::FETCH_OBJ);

  return $this->view->render($response, 'message.html', [
    'message' => $message
  ]);
})->setname('message');
