<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $hobbie = $_POST['hobbie'];

    if (strlen($nome) < 6 ||$idade < 18 ) {
        echo "<script>alert('Erro ao enviar,idade ou nome não permitidos, favor verificar');</script>";
        exit();
            
    
    }
}

    echo "<pre>";
    echo "Dados recebidos com sucesso:\n";
    echo "Nome: " . $nome . "\n";
    echo "Email: " . $email . "\n";
    echo "Idade: " . $idade . "\n";
    echo "Hobbie: " . $hobbie . "\n";
    echo "</pre>";

?>
