<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nome  = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    
    $_POST["acao"] = "adicionar";

    
    ?>
    <form id="redirecionar" method="POST" action="bancodedados.php">
        <input type="hidden" name="acao"  value="adicionar">
        <input type="hidden" name="nome"  value="<?= htmlspecialchars($nome) ?>">
        <input type="hidden" name="email" value="<?= htmlspecialchars($email) ?>">
        <input type="hidden" name="senha" value="<?= htmlspecialchars($senha) ?>">
    </form>

    <script>
        document.getElementById('redirecionar').submit();
    </script>
    <?php
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta </title>
    <link rel="stylesheet" href="css/cadas.css" />
</head>
<body>
    <div class="background"></div>

    <div class="card">
        <img class="logo" src="img/logo.png" alt="Logo" />
        <h2>Começe sua jornada Agora </h2>

        <form class="form" method="POST">
            <input type="text" name="nome" placeholder="Seu Nome" required />
            <input type="email" name="email" placeholder="Seu Email" required />

            <!-- AQUI ESTAVA O ERRO! type="senha" não existe -->
            <input type="password" name="senha" placeholder="Sua Senha" required />

            <button type="submit">Começar</button>
        </form>

        <footer>
            Já tem uma conta?
            <a href="login.php">Entre aqui</a>
        </footer>
    </div>
</body>
</html>