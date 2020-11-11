<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Nome é obrigatório ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["phone"])) {
    $errorMSG = "Telefone é obrigatório ";
} else {
    $phone = $_POST["phone"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email é obrigatório ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["select"])) {
    $errorMSG = "Serviço é obrigatório ";
} else {
    $select = $_POST["select"];
}

/*if (empty($_POST["terms"])) {
    $errorMSG = "Terms is required ";
} else {
    $terms = $_POST["terms"];
}*/

$EmailTo = "contato@vermelhoveiculos.com.br";
$Subject = "Novo orçamento solicitado pelo site Vermelho veículos";

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Telefone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Serviço: ";
$Body .= $select;
/*$Body .= "\n";
$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";*/

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
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