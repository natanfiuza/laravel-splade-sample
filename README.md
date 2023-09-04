# Laravel Splade Sample

<img src="https://raw.githubusercontent.com/protonemedia/laravel-splade/main/logo.svg" />

Aplicação amostra usando o splade 


## O que e SPLADE ? 


Splade fornece uma maneira **super fácil** de construir aplicativos de página única (**SPA**) usando modelos **Blade** padrão, aprimorados com componentes Vue 3 sem renderização. Em essência, você pode escrever seu aplicativo usando a simplicidade do Blade e, além daquela sensação mágica de SPA, você pode aprimorá-lo para torná-lo interativo. **Tudo sem nunca sair do Blade.**


[![Latest Version on Packagist](https://img.shields.io/packagist/v/protonemedia/laravel-splade.svg)](https://packagist.org/packages/protonemedia/laravel-splade)


## Iniciando 

Abaixo o passo a passo para criar um novo projeto usando o SPLADE






Criar um novo projeto laravel

```bash
laravel new example-app

```
> Caso já tenha um projeto criado pule o passo acima


Instalar  SPLADE com o composer
```bash
composer require protonemedia/laravel-splade

```

Instalar no Laravel
```bash
php artisan splade:install

```

Fazer uma copia de `.env.example` para `.env`

```bash
php artisan key:generate
```

Crie o banco de dados `test_splade`

```bash
php artisan migrate
```
Verifique no arquivo `DatabaseSeeder.php` se a linha abaixo esta descomentada, para criar uma lista de 10 usuarios ficticios.
```php
\App\Models\User::factory(10)->create();
```

Execute o seed para popular a tabela  `users`
```bash
php artisan db:seed

```


```bash
npm install

```

Execute o laravel

```bash

php artisan serve

```

Execute o vite

```bash
npm run dev

```
