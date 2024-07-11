<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentação do Projeto Laravel: testeApiProduto</title>
</head>
<body>
    <h1>Projeto Laravel: testeApiProduto</h1>
    <p>Este projeto Laravel foi criado para consumir uma API externa que fornece uma lista de itens. A API fornece funcionalidades de paginação e permite ajustar o número de itens retornados por página.</p>

    <h2>Configuração do Projeto</h2>

    <h3>1. Requisitos</h3>
    <p>Certifique-se de ter os seguintes requisitos instalados:</p>
    <ul>
        <li>PHP &gt;= 7.3</li>
        <li>Composer</li>
        <li>Servidor Web (Apache, Nginx, etc.)</li>
    </ul>

    <h3>2. Clonar o Repositório</h3>
    <p>Clone este repositório para sua máquina local:</p>
    <pre><code>git clone https://github.com/seu-usuario/testeApiProduto.git
cd testeApiProduto
    </code></pre>

    <h3>3. Instalar Dependências</h3>
    <p>Instale as dependências do projeto usando o Composer:</p>
    <pre><code>composer install
    </code></pre>

    <h3>4. Configurar o Ambiente</h3>
    <p>Crie um arquivo <code>.env</code> baseado no <code>.env.example</code>:</p>
    <pre><code>cp .env.example .env
    </code></pre>
    <p>Gere a chave da aplicação Laravel:</p>
    <pre><code>php artisan key:generate
    </code></pre>

    <h3>5. Iniciar o Servidor</h3>
    <p>Inicie o servidor de desenvolvimento do Laravel:</p>
    <pre><code>php artisan serve
    </code></pre>
    <p>O servidor estará rodando em <code>http://localhost:8000</code>.</p>

    <h2>Testando a API</h2>

    <h3>Parâmetros</h3>
    <p>A API suporta os seguintes parâmetros de query:</p>
    <ul>
        <li><code>page</code>: Número da página a ser recuperada (padrão: 1).</li>
        <li><code>perPage</code>: Número de itens por página (padrão: 100).</li>
    </ul>

    <h3>Exemplos de Requisições</h3>

    <h4>Usando o Navegador</h4>
    <p>Para testar a API no navegador, você pode usar a URL com os parâmetros de query. Por exemplo, para obter a página 2 com 50 itens por página, acesse:</p>
    <pre><code>http://localhost:8000/items?page=2&perPage=50
    </code></pre>

    <h4>Usando o Postman</h4>
    <ol>
        <li>Abra o Postman.</li>
        <li>Crie uma nova requisição GET.</li>
        <li>Insira a URL <code>http://localhost:8000/items</code>.</li>
        <li>Adicione os parâmetros de query <code>page</code> e <code>perPage</code> conforme necessário.</li>
        <li>Clique em "Send" para enviar a requisição.</li>
    </ol>

    <h3>Resposta</h3>
    <p>A resposta será um JSON com os dados paginados. Exemplo de resposta:</p>
    <pre><code>{
    "metadata": {
        "totalItems": 1000000,
        "perPage": 50,
        "page": 2
    },
    "data": [
        {
            "id": "e906859036f847e68e58a577da9312a2",
            "absoluteIndex": 50,
            "name": "item-50"
        },
        {
            "id": "761ff52b8e6dd373fdf291a1a70df20c",
            "absoluteIndex": 51,
            "name": "item-51"
        },
        ...
    ]
}
    </code></pre>
</body>
</html>
