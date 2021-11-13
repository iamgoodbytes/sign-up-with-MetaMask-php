<?php
    include_once(__DIR__ . "/vendor/autoload.php");
    include_once(__DIR__ . "/classes/Signature.php");
    if(!empty($_POST)){
        $message = "Hello World"; // change this in js/login.js or generate it on the server
        $address = $_POST['account'];
        $signature = $_POST['signature'];

        $result = Signature::verifySignature($message, $signature, $address);
        var_dump($result);
    }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in with MetaMask</title>
</head>
<body>

    <a href="#" class="btnMetamask">sign in with MetaMask</a>
    <form action="" method="post">
    <input name="account" type="text" id="account">
    <input name="signature" type="text" id="signature">
    <input type="submit" class="btn btnValidate" value="Validate signature">
    </form>

    <script src="js/ethers-5.2.umd.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>