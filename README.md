## Sobre a API

<p>Api para cadastro e listagem de produtos</p>

<p> Clone este repositório </p>

```js
git clone https://github.com/Math2121/test-api.git
```

<p> Rode os seguintes comandos: </p>

```js
composer install
php artisan migrate
```

## Banco de Dados

<p> Utlize o arquivo api-test.sql que esta dentro da pasta database e o execute dentro do seu SBGDda sua escolha<p>

<strong> Sete as configurações do banco de dados no arquivo ".env"</strong>

## ROTAS

### Criar produtos - api/create/products[POST]

<p>E necessário enviar estas informações para criação</p>

```js
{
	"name":"Test1",
	"price":10.99,
	"amount":10
}
```

<p> Retorno: </p>

```js
{
	"product": {
		"name": "Test1",
		"price": 10.99,
		"amount": 10,
		"updated_at": "2022-08-03T12:10:05.000000Z",
		"created_at": "2022-08-03T12:10:05.000000Z",
		"id": 1
	}
}
```

### Listar produtos - api/products [GET]

<p> Retorno: </p>

```js
{
	"products": [
		{
			"id": 1,
			"name": "Test1",
			"price": 10.99,
			"amount": 10,
			"created_at": "2022-08-03T12:10:05.000000Z",
			"updated_at": "2022-08-03T12:10:05.000000Z"
		}
	]
}
```
