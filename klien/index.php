<?php
if (isset($_POST['submit'])) {
    $wsdl = $_POST['WSDL'];
    $message = $_POST['message'];


  $options = array('location' => 'http://152.118.33.94/tugas3/server/index.php',  'uri' => 'http://152.118.33.94/tugas3');
  $api = new SoapClient($wsdl, $options);
  $result = $api->hello($message);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Tugas 3 - 1306409450</title>
  
  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

</head>
<body>

  <div class="row">
      <form class="col s12" method="post">
          <div class="row">
            <div class="input-field col s3">
                <input placeholder="WSDL" id="WSDL" name="WSDL" type="text" class="validate">
                <label for="wsdl"></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s3">
              <input placeholder="Message" id="message" name="message" type="text" class="validate">
                <label for="message"></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s3">
                <button class="btn waves-effect waves-light" type="submit" name="submit">Submit</button>
            </div>
        </div>
      </form>
  </div>
  <?php 
      echo $result;
   ?>
  <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</body>
</html>
