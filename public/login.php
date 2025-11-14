<?php
session_start();

$mensagem = "";
$login_sucesso = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tentativa_login = true; 
    
    $email = trim(htmlspecialchars($_POST["email"]));
    $senha = $_POST["senha"]; 
    $usuarios = $_SESSION['usuarios'] ?? [];
    $usuario_encontrado = null;
    $indice_usuario = false;

    
    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario['email'] === $email) {
            $usuario_encontrado = $usuario;
            $indice_usuario = $indice;
            
      
            $is_hashed = (strpos($usuario['senha'], '$2y$') === 0 || strpos($usuario['senha'], '$argon2i') === 0 || strpos($usuario['senha'], '$2a$') === 0);
            
            if ($is_hashed && password_verify($senha, $usuario['senha'])) {
                $login_sucesso = true;
                

            } else if (!$is_hashed && $usuario['senha'] === $senha) { 
                
                $login_sucesso = true;
                
                $novoHash = password_hash($senha, PASSWORD_DEFAULT);
                $_SESSION['usuarios'][$indice_usuario]['senha'] = $novoHash;

            }
            
            break;
        }
    }

    if ($login_sucesso) {
        
        $_SESSION['usuario_logado'] = true;
        $_SESSION['email_usuario'] = $usuario_encontrado['email']; 
        $_SESSION['nome_usuario'] = $usuario_encontrado['nome']; 
        
        header("Location: diario.html");
        exit;
    } else {
        $mensagem = "Email ou senha incorretos. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/cadas.css" />
</head>
<body>
    <div class="background"></div>

    <div class="card">
        <img class="logo" src="img/logo.png" alt="Logo" />
        <h2>Sentimos sua falta!</h2>
        
        <?php if (isset($tentativa_login) && !empty($mensagem)): ?>
            <p class="mensagem" style="color: red; font-weight: bold;"><?php echo $mensagem; ?></p>
        <?php endif; ?>

        <form class="form" method="POST" action="">
            <input type="email" name="email" placeholder="Seu Email" required />
            <input type="password" name="senha" placeholder="Sua Senha" required />
            
            <button type="submit">Entrar</button>
        
        </form>

        <footer>
            Ainda não tem conta? <a href="cadastro.php">Crie uma aqui</a>.
        </footer>
    </div>
</body>
</html>