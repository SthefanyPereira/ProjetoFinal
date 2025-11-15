<?php
session_start();

if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}


if (isset($_POST['acao']) && $_POST['acao'] === 'adicionar') {

    $nome  = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    if ($nome !== '' && $email !== '' && $senha !== '') {

        $novoUsuario = [
            'id'    => uniqid(),
            'nome'  => $nome,
            'email' => $email,
            'senha' => $senha
        ];

        $_SESSION['usuarios'][] = $novoUsuario;
    }

    header("Location: principal.html");  
    exit;
}



if (isset($_POST['acao']) && $_POST['acao'] === 'editar') {

    $id    = $_POST['id'];
    $nome  = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    foreach ($_SESSION['usuarios'] as $i => $user) {

        if ($user['id'] === $id) {
            $_SESSION['usuarios'][$i]['nome']  = $nome;
            $_SESSION['usuarios'][$i]['email'] = $email;

            if ($senha !== '') {
                $_SESSION['usuarios'][$i]['senha'] = $senha;
            }
        }
    }

    header("Location: bancodedados.php");
    exit;
}



if (isset($_GET['excluir'])) {

    $idExcluir = $_GET['excluir'];

    $_SESSION['usuarios'] = array_filter($_SESSION['usuarios'], function($u) use ($idExcluir) {
        return $u['id'] !== $idExcluir;
    });

    header("Location: bancodedados.php");
    exit;
}



$editar = null;

if (isset($_GET['editar'])) {

    $idEditar = $_GET['editar'];

    foreach ($_SESSION['usuarios'] as $u) {
        if ($u['id'] === $idEditar) {
            $editar = $u;
            break;
        }
    }
}



if (isset($_GET['reset'])) {
    unset($_SESSION['usuarios']);
    header("Location: bancodedados.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários EvoluIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4 text-primary">Cadastro de Usuários EvoluIA</h1>

    <div class="card shadow-lg mb-5">
        <div class="card-header bg-primary text-white text-center">
            <h5><?= $editar ? 'Editar Usuário (ID: ' . htmlspecialchars($editar['id']) . ')' : 'Adicionar Manualmente' ?></h5>
        </div>

        <div class="card-body">
            <form method="post" class="row g-3">
                <input type="hidden" name="acao" value="<?= $editar ? 'editar' : 'adicionar' ?>">

                <?php if ($editar): ?>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($editar['id']) ?>">
                <?php endif; ?>

                <div class="col-md-4">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($editar['nome'] ?? '') ?>" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" value="<?= htmlspecialchars($editar['email'] ?? '') ?>" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label for="senha" class="form-label">
                        Senha: <?= $editar ? '<small class="text-muted">(Deixe em branco para manter)</small>' : '' ?>
                    </label>
                    <input type="password" id="senha" name="senha" class="form-control" <?= $editar ? '' : 'required' ?>>
                </div>

                <div class="col-12 d-grid mt-4">
                    <button type="submit" class="btn <?= $editar ? 'btn-warning' : 'btn-success' ?> btn-lg">
                        <?= $editar ? 'Salvar Alterações' : 'Cadastrar' ?>
                    </button>

                    <?php if ($editar): ?>
                        <a href="bancodedados.php" class="btn btn-outline-secondary mt-2">Cancelar</a>
                    <?php endif; ?>
                </div>

            </form>
        </div>
    </div>

    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white text-center">
            <h5>Usuários Cadastrados</h5>
        </div>

        <div class="card-body">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-3">Nome</th>
                        <th class="col-4">Email</th>
                        <th class="col-4 text-center">Ações</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (empty($_SESSION['usuarios'])): ?>
                    <tr><td colspan="4" class="text-center text-muted py-3">Nenhum usuário cadastrado.</td></tr>
                <?php else: ?>
                    <?php foreach ($_SESSION['usuarios'] as $usuario): ?>
                        <tr>
                            <td><?= substr(htmlspecialchars($usuario['id']), -4) ?></td>
                            <td><?= htmlspecialchars($usuario['nome']) ?></td>
                            <td><?= htmlspecialchars($usuario['email']) ?></td>

                            <td class="text-center">
                                <a href="?editar=<?= htmlspecialchars($usuario['id']) ?>"
                                   class="btn btn-sm btn-outline-warning me-2">Editar</a>

                                <a href="?excluir=<?= htmlspecialchars($usuario['id']) ?>"
                                   onclick="return confirm('Tem certeza que deseja excluir?')"
                                   class="btn btn-sm btn-outline-danger">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="text-center mt-4 mb-5">
        <a href="?reset=1" class="btn btn-outline-danger">Resetar Sessão</a>
    </div>

</div>
</body>
</html>