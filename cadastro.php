<?php

 if(isset($_POST['submit']))
{

    include_once('config.php');
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha) VALUES ($nome,$email,$senha)");

}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./stylecadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <main>
        <h1>Create Account</h1>
        <div class="social-media">
            <a
                href="https://accounts.google.com/signin/v2/identifier?service=mail&passive=1209600&osid=1&continue=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&followup=https%3A%2F%2Fmail.google.com%2Fmail%2Fu%2F0%2F&emr=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">
                <img src="./Img/google.png" alt="Google">
            </a>
            <a href="https://pt-br.facebook.com">
                <img src="./Img/facebook.png" alt="Facebook">
            </a>
        </div>

        <div class="alternative">
            <span>OR</span>
        </div>

        <form action="cadastro.php" method="POST">
            <label for="name">
                <span>Name</span>
                <input type="text" id="nome" name="nome">
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Password</span>
                <input type="password" id="password" name="senha">
            </label>
            <input type="submit" value="Sign Up" id="button">
            <p>Ja possui uma conta? Efetue seu <a href="login.php">Login</a></p>
        </form>
    </main>
    <section class="images">
        <img src="./Img/Sangue.png" alt="Sangue">
        <div class="circle"></div>
    </section>
</body>

</html>