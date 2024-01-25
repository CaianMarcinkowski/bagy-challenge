<?php
//importando o arquivo de configuração do banco de dados
require_once 'config.php';

//Importando a classe pessoa para aplicar o conceito de POO
require_once 'Pessoa.php';

/**
 * Tarefa 1: Manipulação de Strings
 * Função que inverte uma string.
 *
 * @param string $string A string a ser invertida.
 * @return string A string invertida.
 */
function inverterString($string) {
    return strrev($string);
}

/**
 * Tarefa 2: Manipulação de Arrays
 * Função que dobra os números em uma array.
 *
 * @param array $numeros A array de números.
 * @return array A array com os números dobrados.
 */
function dobrarNumeros($numeros) {
    return array_map(function ($numero) {
        return $numero * 2;
    }, $numeros);
}

/**
 * Tarefa 4: Manipulação de Arquivos
 * Função que conta as linhas de um arquivo.
 *
 * @param string $caminho O caminho do arquivo.
 * @return int O número de linhas no arquivo.
 */
function contarLinhasArquivo($caminho) {
    $linhas = file($caminho);
    return count($linhas);
}

/**
 * Tarefa 5: Conexão com Banco de Dados
 * Função que busca os usuários no banco de dados.
 *
 * @return array A array associativa com os dados dos usuários.
 */

function buscarUsuarios($db_config) {

    // Conexão com o banco de dados
    $conn = pg_connect("host={$db_config['host']} port={$db_config['port']} dbname={$db_config['dbname']} user={$db_config['user']} password={$db_config['password']}");

    // Verifica se a conexão foi bem-sucedida
    if (!$conn) {
        return false;
    }

    // Consulta SQL
    $sql = "SELECT * FROM usuarios";

    // Executa a consulta
    $result = pg_query($conn, $sql);

    // Recupera os resultados
    $usuarios = [];
    while ($row = pg_fetch_assoc($result)) {
        $usuarios[] = $row;
    }

    return $usuarios;
}

// Testes das funções
echo inverterString('hello') . '<br>';
print_r(dobrarNumeros([1, 2, 3]));

$pessoa = new Pessoa('Pedro', 12);
echo '<br>'.$pessoa->apresentar() . '<br>';

echo contarLinhasArquivo('Documento.txt') . '<br>';

$usuarios = buscarUsuarios($db_config);
foreach ($usuarios as $usuario) {
    echo $usuario['nome'] . '<br>';
}
?>
