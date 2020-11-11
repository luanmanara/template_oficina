<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Nome é obrigatório ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email é obrigatório ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG = "Mensagem é obrigatório ";
} else {
    $message = $_POST["message"];
}

/*if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}*/

$EmailTo = "contato@vermelhoveiculos.com.br";
$Subject = "Nova mensagem do site da Vermelho Veículos";

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensagem: ";
$Body .= $message;
$Body .= "\n";
/*$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";*/

// send email
$success = mail($EmailTo, $Subject, $Body, "De:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "sucesso";
}else{
    if($errorMSG == ""){
        echo "Algo deu errado :(";
    } else {
        echo $errorMSG;
    }
}
?>