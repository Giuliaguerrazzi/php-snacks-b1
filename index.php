<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
    
    <?php 
    ini_set('display_errors','On');
     error_reporting(E_ALL);

     var_dump($_GET);

     $name = $_GET['name'];
     $mail = $_GET['mail'];
     $age = $_GET['age'];
 
     if (strlen($name) > 3) {
         if  (strpos($mail, '@') || strpos($mail, '.') ) {
             if (is_numeric($age)) {
                 $result = 'Accesso riuscito';
             } else $result = 'Accesso negato';
         } else $result = 'Accesso negato';
     } else $result = 'Accesso negato';     
    
    ?>
    
    <h1>Verifica email</h1>
    <p><?php echo $result ?></p>


</body>
</html>