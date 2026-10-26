<?php
 
// painel.php é responsável por exibir o painel principal da biblioteca, onde o usuário logado pode acessar as opções de cadastrar livros, listar livros e sair do sistema. 
// Ele protege a página para que apenas usuários logados possam acessar, exibindo uma mensagem de boas-vindas com o nome do usuário e fornecendo links para as funcionalidades disponíveis.

// Inclui a verificação de sessão(protege a página de acesso não
// autorizado)
include("verificar_sessao.php");
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel - Biblioteca</title>
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <div class="container">
        <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>
        <p class="subtitulo">Bem-Vindo ao painel da biblioteca. Escolha uma opção:</p>
        <div class="painel-cards">
            <a href="cadastrar_livro.php" class="card-link">Cadastrar Livro</a>
            <a href="listar_livro.php" class="card-link">Listar Livros</a>
            <a href="logout.php" class="card-link">Sair</a>
        </div>
        <div class="dica-navegacao">
            <strong>Fluxo:</strong>
            Painel → Cadastrar Livro ou Listar Livros → Editar / Excluir
        </div>
    </div>
</body>
 
</html>
 