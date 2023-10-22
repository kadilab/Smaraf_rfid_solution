<?php
   require_once 'config.php';


   if(isset($_POST['username'])){
        //  recuperation du nom d'utilisateur et du mot de passe venant du formulaire
        $USERNAME = $_POST['username'];
        $PASSWORD = $_POST['password'];
        
        // verification de l'utilisateur et cibbexuib a k;application 
        $sql = "SELECT password FROM  users WHERE username = '$USERNAME'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo $row['password'];
            if($row['password'] == $PASSWORD){
                session_start();
                $_SESSION['login'] = $USERNAME;
                header('Location: ../smarafrfid/index.php');
            }else{
                echo "<script>alert('echec de connexion!')</script>";
                header('Location: ../smarafrfid/page/login.html/?msg=1');
            }
        } else {    
            echo "<script>alert('echec de connexion!')</script>";
            header('Location: ../smarafrfid/page/login.html/?msg=1');
        }
        // Fermer la connexion MySQL
        $conn->close();

   }else{
    header('Location: ../smarafrfid/page/error-404.html');
   }
?>