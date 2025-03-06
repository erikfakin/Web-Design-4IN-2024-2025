<h1>Introduzione</h1>


<?php
    // print_r($_GET);
    // print_r($_POST);
    $nome = $_POST['nome'];
    $mail = $_POST['mail'];
    $messaggio = $_POST['message'];

    echo '<br><br>';
    echo '<h1>Ciao, ' . $nome . '</h1>';
    echo '<p>'.$mail.'</p>';
    echo '<p>'.$messaggio.'</p>';
?>

<form method="POST">
    <label for="nome">Nome:</label>
    <input name="nome" id="nome" type="text">
    <label for="mail">Mail:</label>
    <input name="mail" id="mail" type="mail">
    <textarea name="message"></textarea>
    <button>Invia</button>
</form>

