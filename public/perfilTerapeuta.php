<?php
session_start();

// Simulação de terapeuta logado
$terapeuta = "Dra. Ana Silva";

// Lista de clientes (simulada)
$clientes = [
    ["nome" => "Ana Clara", "email" => "anaclara@example.com"],
    ["nome" => "João Silva", "email" => "joaosilva@example.com"],
    ["nome" => "Maria Oliveira", "email" => "mariaoliveira@example.com"]
];

// Consultas marcadas (simuladas)
$consultas = [
    ["cliente" => "Ana Clara", "data" => "27/01/2026 10:00", "status" => "Agendada"],
    ["cliente" => "João Silva", "data" => "27/10/2025 14:00", "status" => "Concluída"],
    ["cliente" => "Maria Oliveira", "data" => "28/10/2025 09:00", "status" => "Concluída"]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Perfil do Terapeuta</title>
<link rel="stylesheet" href="css/perfilTerapeuta.css">
</head>
<body>
<header>
  <div class="header-container">
    <div class="header-text">
      <h1>Perfil de <?php echo $terapeuta; ?></h1>
    </div>

    <nav class="bottom" aria-label="Navegação">
      <div class="item">Início</div>
      <div class="item">Agenda</div>
      <div class="item">Clientes</div>
      <div class="item">Recursos</div>
      <div class="item">Perfil</div>
    </nav>
  </div>
</header>

<main>
  <!-- LISTA DE CLIENTES -->
  <section class="clientes">
    <h2>Seus clientes</h2>
    <div class="cards">
      <?php foreach($clientes as $c): ?>
        <div class="card">
          <p><strong>Nome:</strong> <?php echo $c["nome"]; ?></p>
          <p><strong>Email:</strong> <?php echo $c["email"]; ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- CONSULTAS MARCADAS -->
  <section class="consultas">
    <h2>Consultas marcadas</h2>
    <?php if(empty($consultas)): ?>
      <p class="vazio">Nenhuma consulta marcada.</p>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <th>Cliente</th>
            <th>Data</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($consultas as $con): ?>
            <tr>
              <td><?php echo $con["cliente"]; ?></td>
              <td><?php echo $con["data"]; ?></td>
              <td><span class="status"><?php echo $con["status"]; ?></span></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </section>
</main>
</body>
</html>
