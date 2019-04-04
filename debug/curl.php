<?php
  function curlPost($url, $data)
  {
      $ch = curl_init();

      curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $url);

      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

      if (!is_null($header)) {
          curl_setopt($ch, CURLOPT_HEADER, true);
      }
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
      curl_setopt($ch, CURLOPT_VERBOSE, true);
      $response = curl_exec($ch);

      $body = null;
      // error
      if (!$response) {
          $body = curl_error($ch);
          // HostNotFound, No route to Host, etc  Network related error
          $http_status = -1;
      } else {
          //parsing http status code
          $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          if (!is_null($header)) {
              $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
              $header = substr($response, 0, $header_size);
              $body = substr($response, $header_size);
          } else {
              $body = $response;
          }
      }
      curl_close($ch);
      return $body;
  }

echo curlPost('http://localhost:3000/api/login', json_encode(array(
  "type" => "login",
  "clientid" => "sdf",
  "userid" => "startergate",
  "password" => "started1",
  "isAuth" => false,
  "isAuthOn" => false,
  "isWeb" => true,
)));
