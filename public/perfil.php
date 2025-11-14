<?php
session_start();

// Simulação de usuário logado
$usuario = "Usuário";
$email = "usuario@example.com";

// Dados fictícios de progresso do usuário
$progresso = 65; // percentual de progresso
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Perfil do Usuário</title>
<link rel="stylesheet" href="css/perfil.css">
</head>
<body>
<header>
  <div class="header-container">
    <div class="header-text">
      <h1>Perfil de <?php echo $usuario; ?></h1>
    </div>

    <nav class="bottom" aria-label="Navegação">
      <div class="item">
      <a href="principal.php">Início</a>
      <a href="diario.html">Diário</a>
      <a href="comunidade.php">Comunidade</a>
      <a href="plano.html">Recursos Pro</a>
      <a href="perfil.php">Perfil</a>
    </nav>
  </div>
</header>

<main>
  <section class="perfil-info">
    <h2>Informações Pessoais</h2>
    <div class="card">
      <p><strong>Nome:</strong> <?php echo $usuario; ?></p>
      <p><strong>Email:</strong> <?php echo $email; ?></p>
      <p><strong>Status:</strong> Ativo</p>
    </div>
  </section>

  <section class="progresso">
    <h2>Seu progresso</h2>
    <div class="barra">
      <div class="preenchimento" style="width: <?php echo $progresso; ?>%;"></div>
    </div>
    <p><?php echo $progresso; ?>% completado</p>
  </section>
</main>
</body>
</html>
