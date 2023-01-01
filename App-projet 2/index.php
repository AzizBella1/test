<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body id="body">
    <header>

        <!-- navbar -->
        
        <?php
            include "nav.php";
        ?>
        

    </header>
    
  
        <?php
            $page = $_GET['q'];
            
            if (isset($_GET['creer'])) {
                header("location:index.php?q=login");
            }

            switch ($page) {
                case '':
                    include "programme.php";
                    break;
                case 'x':
                    include "gestionFilm.php";
                    break;
                case 'programmes':
                    include "programme.php";
                    break; 
                case 'films':
                    include "films.php";
                    break;   
                case 'login':
                    include "login.php";
                    break; 
                case 'signin':
                    include "signin.php";
                    break;   
                case 'ticket':
                    include "ticket.php";
                    break;         
                
            }

            
        ?>
        
        
    
        
    
</body>
</html>