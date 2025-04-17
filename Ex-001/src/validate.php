<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<?php

 $userEmailError = '';
 $userPasswordError = '';

 $userEmail = '';
 $userPassword = $_POST['user-password'];


         if ($_POST['user-email'] == 'geovanna.psilva2005@gmail.com'
             && $_POST['user-password'] == '123456789') {

             $database = [
                 "Email" => $_POST['user-email'],
                 "Senha" => $_POST['user-password']
             ];

             include ('menu.php');
             
         } else {
           echo "Senha de Usuário ou E-mail Incorretos  <a href='login.php'>Tente novamente</a>";

         }
     

?>

</body>
</html>
