
<html>
<head>
    <title>Inicio de Sesion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<style>
 .box {
  width:100%;
  max-width:400px;
  background-color:#f9f9f9;
  border:1px solid #ccc;
  border-radius:5px;
  padding:16px;
  margin:0 auto;
 }
</style>
<body>
<?php
require_once 'vendor/autoload.php';

// configuración inicial
$clientID = '1042857403912-f4r8sb9gdiaueja897c4ntniftokh2bh.apps.googleusercontent.com';  //tu ID de cliente
$clientSecret = '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';  //tu secreto de cliente    
$redirectUri = 'http://localhost/ProyectoVentasDavid/login.php';  //Redireccion de direcctorio

// crear una solicitud de cliente para acceder a la API de Google
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// código de autenticación de Google OAuth Flow
if (isset($_GET['code'])) {
  try {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    if (isset($token['error'])) {
      throw new Exception(join(', ', $token));
    }
    $client->setAccessToken($token['access_token']);

//obtener información de perfil
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
    $email =  $google_account_info->email;
    $name =  $google_account_info->name;
?>
    <div class="container">
        <div class="box">
            <div class="form-group">
                <label for="email">Emailid: <?php echo $email; ?></label>
                <label for="name">Name: <?php echo $name; ?></label>
            </div>
        </div>
    </div>
<?php
  } catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
  }
} else {
?>
    <div class="container">
        <div class="table-responsive">
            <h3 align="center">INICIO DE SESION CON GOOGLE</h3>
            <div class="box">
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="text" name="email" id="email" placeholder="Ingrese correo electrónico" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="pwd" id="pwd" placeholder="Introducir la contraseña" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" id="login" name="login" value="Acceso" class="btn btn-success form-control"/>
                    <hr>
                    <center><a href="<?php echo $client->createAuthUrl() ?>"><img src="inicio de sesión de google.PNG" width="256"></a></center>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
</body>
</html>
