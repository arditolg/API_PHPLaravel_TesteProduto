Projeto Laravel: testeApiProduto
Este projeto Laravel foi criado para consumir uma API externa que fornece uma lista de itens. A API fornece funcionalidades de paginação e permite ajustar o número de itens retornados por página.

Configuração do Projeto
1. Requisitos
Certifique-se de ter os seguintes requisitos instalados:

PHP >= 7.3
Composer
Servidor Web (Apache, Nginx, etc.)
2. Clonar o Repositório
Clone este repositório para sua máquina local:

bash
Copiar código
git clone https://github.com/seu-usuario/testeApiProduto.git
cd testeApiProduto
3. Instalar Dependências
Instale as dependências do projeto usando o Composer:

bash
Copiar código
composer install
4. Configurar o Ambiente
Crie um arquivo .env baseado no .env.example:

bash
Copiar código
cp .env.example .env
Gere a chave da aplicação Laravel:

bash
Copiar código
php artisan key:generate
5. Iniciar o Servidor
Inicie o servidor de desenvolvimento do Laravel:

bash
Copiar código
php artisan serve
O servidor estará rodando em http://localhost:8000.

Testando a API
Parâmetros
A API suporta os seguintes parâmetros de query:

page: Número da página a ser recuperada (padrão: 1).
perPage: Número de itens por página (padrão: 100).
Exemplos de Requisições
Usando o Navegador
Para testar a API no navegador, você pode usar a URL com os parâmetros de query. Por exemplo, para obter a página 2 com 50 itens por página, acesse:

bash
Copiar código
http://localhost:8000/items?page=2&perPage=50
Usando o Postman
Abra o Postman.
Crie uma nova requisição GET.
Insira a URL http://localhost:8000/items.
Adicione os parâmetros de query page e perPage conforme necessário.
Clique em "Send" para enviar a requisição.
Resposta
A resposta será um JSON com os dados paginados. Exemplo de resposta:

json
Copiar código
{
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
