<?php

include './db/init.php';
include './Login.php';
$arquivo_tem = $_FILES['arquivo']['tmp_name'];
$nome = $_FILES['arquivo']['name'];
$pastaTemporaria = "documentos/" . $nome;
move_uploaded_file($arquivo_tem, $pastaTemporaria);
try {
    $s3->putObject([
        'Bucket' => $config['s3']['bucket'],
        'Key' => "uploads/{$nome}",
        'Body' => fopen($pastaTemporaria, 'rb'),
        'ACL' => 'public-read'
    ]);
} catch (S3Exception $exc) {
    echo $exc->getMessage();
}
 
 