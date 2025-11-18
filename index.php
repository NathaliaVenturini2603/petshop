<?php
require_once 'config.php';
verificarlogin();

if (isset($_GET['logout'])){
    fazerlogout();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>
</head>
<body>
    <h1>Sistema Pet Shop</h1>
    <div>
        <p>Usuário logado: <?php echo $_SESSION['usuario_nome']?>
         <a href ="?logout=1"> Sair</a>
       </p>
       </div>
       <hr>
       <h2>Menu</h2>
       <ul>
        <li><a href="produtos.php">Cadastro de produtos</a></li>
        <li><a href="estoque.php">Gestão de Estoque</a></li>
       </ul>
        <hr>
    
</body>
</html>