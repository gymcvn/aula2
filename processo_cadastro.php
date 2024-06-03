<?php
//coletando dados do formulario
$nome = isset($_POST[ 'nome']) ? $_POST['nome'] : 'Ananimo';
$email = isset($_POST['email'])?? 'Nao informado'; //null coalescing operator
$idade = isset($_POST['email'])?? "Nao informado";

// armazanando dados em um array associativa
$usuario =[
    'nome' => $nome,
    'email'=> $email,
    'idade'=> $idade,
];

//funçao para saudacao
function saudacao($nome) {
    return "Ola $nome, seja bem-vindo ao nosso sistema!";
}

//Exibindo uma mensagem de boas-vindas
echo saudacao($usuario['nome']). "<br>";
echo "Aqui estao os detalhes do seu cadastro:<br>";
echo "Nome: ". $usuario['nome']. "<br>";
echo "Email: ". $usuario['email'] . "<br>";
echo "Idade: ". $usuario["idade"] . "<br>";

//adicionando comentarios explicativos ao codigo
//Este script processa as entradas de um formulario e exibe uma mensagem personalizada.
