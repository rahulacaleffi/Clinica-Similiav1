<?php
      if(isset($_GET['logar'])){
        $conn=new PDO('mysql:host=186.202.152.30;dbname=db_similia','db_similia','similia2103');
        $conn->exec('SET CHARACTER SET utf8'); 
        $usu=$_GET['email'];
        $senha=$_GET['senha'];
        $ver_login=$conn->prepare('SELECT * FROM tbUsuario WHERE email=:pusu AND senha=:psenha;');
        $ver_login->bindValue(':pusu',$usu);
        $ver_login->bindValue(':psenha',$senha);
        $ver_login->execute();
        if($ver_login->rowCount()==0){
          echo "<div align=\"center\" style=\"color:#00502e;\"><br>Login ou Senha inválido.</div>";
        }else{ 
          ob_start();
          $row=$ver_login->fetch();
          $_SESSION['login']=$row['id'];
          echo "<meta http-equiv=\"refresh\" content=0;url=\"/usuario/logado\">";
        }
      }
    ?>