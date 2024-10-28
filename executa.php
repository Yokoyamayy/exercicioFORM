<?php

$avaliacao = $_POST['avaliacao'] ?? '';
$cor = $_POST['cor'] ?? '';
$comentarios = $_POST['comentarios'] ?? '';
$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$fone = $_POST['fone'] ?? '';
$novidades = isset($_POST['novidades']) ? 'sim' : 'não';


echo "<h2>Dados Recebidos</h2>";
echo "Avaliação: $avaliacao <br>";
echo "Cor preferida: $cor <br>";
echo "Comentários: $comentarios <br>";
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Fone: $fone <br>";


$provedor = explode('@', $email)[1];
echo "Seu provedor de email é: $provedor <br>";


if ($novidades === 'sim') {
    echo "Enviaremos para você semanalmente todas as novidades.<br>";
}


$palavras_positivas = ['gostei', 'legal', 'bom', 'interessante', 'feliz'];
foreach ($palavras_positivas as $palavra) {
    if (stripos($comentarios, $palavra) !== false) {
        echo "<script>alert('Ficamos felizes que você deixou observações positivas sobre nosso site.');</script>";
        break;
    }
}


if ($cor === 'Preto') {
    echo "<script>alert('O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e 
    precisando de ajuda, acesse o site: https://cvv.org.br/');</script>";
}
?>
