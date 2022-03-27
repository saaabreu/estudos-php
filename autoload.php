<?php 

spl_autoload_register(function (string $nomeCompletoClasse) {
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoClasse);
    $caminhoArquivo = str_replace('\\',DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .= '.php';

    require_once $caminhoArquivo;
});