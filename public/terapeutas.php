<?php
session_start();

// Simulação de login
$usuario = "Usuário";

// Lista de terapeutas disponíveis (simulada)
$terapeutas = [
    ["id" => 1, "nome" => "Dra. Ana Silva", "especialidade" => "Psicóloga Cognitivo-Comportamental", "disponivel" => "Seg e Qua"],
    ["id" => 2, "nome" => "Dr. Rafael Costa", "especialidade" => "Psicanalista", "disponivel" => "Ter e Qui"],
    ["id" => 3, "nome" => "Dra. Luiza Martins", "especialidade" => "Terapeuta Sistêmica", "disponivel" => "Sex e Sáb"]
];

// Inicializa consultas na sessão se ainda não existir
if (!isset($_SESSION["consultas"])) {
    $_SESSION["consultas"] = [];
}

// Se o usuário agendou uma consulta
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["terapeuta_id"])) {
    $id = $_POST["terapeuta_id"];
    $terapeuta = array_filter($terapeutas, fn($t) => $t["id"] == $id);
    $terapeuta = reset($terapeuta);
    $data = date("d/m/Y H:i");

    $_SESSION["consultas"][] = [
        "terapeuta" => $terapeuta["nome"],
        "especialidade" => $terapeuta["especialidade"],
        "data" => $data,
        "status" => "Agendada"
    ];
}

$consultas = $_SESSION["consultas"];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Comunidade - Terapia e Desenvolvimento</title>
<link rel="stylesheet" href="css/terapeutas.css">
</head>
<body>
<header>
  <div class="header-container">
    <div class="header-text">
      <h1>Bem-vindo, <?php echo $usuario; ?> </h1>
      <p>Agende e acompanhe suas consultas com nossos terapeutas</p>
    </div>

    <!-- MENU LATERAL DIREITO -->
    <nav class="bottom" aria-label="Navegação">
      <div class="item">Início</div>
      <div class="item">Diário</div>
      <div class="item">Recursos</div>
      <div class="item">Comunidade</div>
      <div class="item">Perfil</div>
    </nav>
  </div>
</header>



<main>
  <!-- TERAPEUTAS DISPONÍVEIS -->
  <section class="terapeutas">
    <h2>Terapeutas disponíveis</h2>
    <div class="cards">
      <?php foreach($terapeutas as $t): ?>
        <div class="card">
          <h3><?php echo $t["nome"]; ?></h3>
          <p><?php echo $t["especialidade"]; ?></p>
          <span>Atendimento: <?php echo $t["disponivel"]; ?></span>
          <form method="POST">
            <input type="hidden" name="terapeuta_id" value="<?php echo $t["id"]; ?>">
            <button type="submit">Agendar Consulta</button>
          </form>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- CONSULTAS MARCADAS -->
  <section class="consultas">
    <h2>Suas consultas marcadas </h2>
    <?php if (empty($consultas)): ?>
      <p class="vazio">Você ainda não marcou nenhuma consulta.</p>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <th>Terapeuta</th>
            <th>Especialidade</th>
            <th>Data</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($consultas as $c): ?>
            <tr>
              <td><?php echo $c["terapeuta"]; ?></td>
              <td><?php echo $c["especialidade"]; ?></td>
              <td><?php echo $c["data"]; ?></td>
              <td><span class="status"><?php echo $c["status"]; ?></span></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </section>
</main>
</body>
</html>
