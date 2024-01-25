# Projeto PHP - Tarefas Diversas

Este é um projeto PHP que implementa diversas tarefas comuns, como manipulação de strings, arrays, arquivos e conexão com banco de dados PostgreSQL.

## Estrutura do Projeto

- `config.php`: Arquivo de configuração do banco de dados, contendo as informações de conexão.
- `Pessoa.php`: Arquivo contendo a definição da classe Pessoa.
- `index.php`: Arquivo principal do projeto, contendo as implementações das funções e testes das mesmas.
- `bd.sql`: Arquivo contendo a estrutura do banco de dados.

## Funcionalidades Implementadas

1. **Manipulação de Strings**: A função `inverterString()` inverte uma string.
2. **Manipulação de Arrays**: A função `dobrarNumeros()` dobra os números em uma array.
3. **Programação Orientada a Objetos (POO)**: A classe Pessoa possui atributos $nome e $idade, e métodos para definir esses atributos e apresentar informações sobre a pessoa.
4. **Manipulação de Arquivos**: A função `contarLinhasArquivo()` conta as linhas de um arquivo.
5. **Conexão com Banco de Dados**: A função `buscarUsuarios()` busca os usuários no banco de dados PostgreSQL.

## Como Utilizar

1. Certifique-se de ter um servidor web e PHP instalados em seu ambiente.
2. Clone este repositório em seu computador. (https://github.com/CaianMarcinkowski/bagy-challenge)
3. Configure as informações do banco de dados no arquivo `config.php`.
4. Abra o arquivo `index.php` em seu navegador para ver os resultados das funções implementadas.