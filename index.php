<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sistema de Pedidos</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
require_once "classes/Cliente.php";
require_once "classes/Produto.php";
require_once "classes/Pedido.php";

// Criar 1 cliente
$cliente = new Cliente(1, "João Silva", "joao@email.com");

// Criar no mínimo 3 produtos
$produto1 = new Produto(1, "Notebook", 3500.00);
$produto2 = new Produto(2, "Mouse Gamer", 150.00);
$produto3 = new Produto(3, "Headset", 280.00);

// Criar 1 pedido
$pedido = new Pedido(1001, $cliente);

// Adicionar produtos ao pedido
$pedido->adicionarProduto($produto1);
$pedido->adicionarProduto($produto2);
$pedido->adicionarProduto($produto3);

// Exibir o resumo final
$pedido->exibirResumo();
?>
</body>
</html>