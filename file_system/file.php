<?php
mkdir('contracts');
file_put_contents('contracts'.DIRECTORY_SEPARATOR.'nada.text', 'salary:2000');
$contracts = file_get_contents('contracts'.DIRECTORY_SEPARATOR.'nada.text');
echo $contracts;
$file = 'contracts'.DIRECTORY_SEPARATOR.'nada.text';
if (file_exists($file)){
    $contract = file_get_contents($file);
    echo $contract;
    // unlink($file);
}
