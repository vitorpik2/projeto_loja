<?php
require_once "Cliente.php";
require_once "Produto.php";

class Pedido {
private $numero;
private $cliente;
private $produtos = [];

public function __construct($numero, Cliente $cliente) {
$this->numero = $numero;
$this->cliente = $cliente;
}

// Getters
public function getNumero() {
return $this->numero;
}

public function getCliente() {
return $this->cliente;
}

public function getProdutos() {
return $this->produtos;
}

// Setters
public function setNumero($numero) {
$this->numero = $numero;
}

public function setCliente(Cliente $cliente) {
$this->cliente = $cliente;
}

// Métodos obrigatórios
public function adicionarProduto(Produto $produto) {
$this->produtos[] = $produto;
}

public function calcularTotal() {
$total = 0;
foreach ($this->produtos as $produto) {
$total += $produto->getPreco();
}
return $total;
}

public function exibirResumo() {
echo "<h1>Sistema de Pedidos da Loja</h1>";
echo "<h2>Pedido Nº " . $this->numero . "</h2>";
echo "<h3>Cliente:</h3>";
echo "<p>" . $this->cliente->getNome() . "</p>";
echo "<p>" . $this->cliente->getEmail() . "</p>";
echo "<h3>Produtos:</h3>";
echo "<ul>";
foreach ($this->produtos as $produto) {
echo "<li>" . $produto->getNome() . " - R$ " . number_format($produto->getPreco(), 2, ',', '.') . "</li>";
}
echo "</ul>";
echo "<h3>Total do Pedido: R$ " . number_format($this->calcularTotal(), 2, ',', '.') . "</h3>";
}
}
?>