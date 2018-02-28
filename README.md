# Bem vindo ao Fluent (beta)
**Fluent** é um gerenciador de atividades ao qual integra serviços em uma mesma ferramenta facilitando assim a vida dos usuários e administradores.

# Preview

### Screenshot

![Fluent preview](https://marcellusfrota.files.wordpress.com/2018/02/fluent-login-preview.png)

### TOC
- [Começando](#começando)
  - [Pre-requisitos](#pre-requisitos)
  - [Instalação](#instalacao)
- [Estrutura de arquivos/pastas](#estrutura-de-arquivos-pastas)
- [Desenvolvimento](#desenvolvimento)
- [O que tem dentro](#o-que-tem-dentro)
- [Changelog](#changelog)
- [Autores](#autores)
- [Licença](#licença)


### Começando
Para rodar o **Fluent** em sua máquina local tudo o que você precisa é ter os prerequisitos listados abaixo instalados na sua máquina e seguir os passos de instalação.

#### Pre-requisitos
  - PHP 7+
  - MySQL
  - Composer
  - Node.js
  - Yarn or NPM
  - Git

#### Instalação
Start by typing the following commands in your terminal in order to get **Adminator** full package on your machine and starting a local development server with live reload feature.

```
> git clone https://github.com/marcellusfrota/fluent.git fluent
> cd fluent
> composer install
> php bin/console server:run
```


### Estrutura de arquivos/pastas


### Desenvolvimento

1. Compilar
```
> yarm ...
```

### O que tem dentro
- [Symfony](https://symfony.com/)


### Changelog
#### V 1.0.0
Initial Release
### Authors
[Marcellus Frota](https://github.com/marcellusfrota/)
### License













Bem vindo ao Fluent (Delta)
=

---

# Primeiramente...
#ForaTemer #8balls #anonymous

# O que é?
O **Fluent** é um gerenciador de atividades inicialmente desenvolvido por Marcellus Frota.

# Quando será atualizado?
Sempre!

Dicas & Macetes
=
#### Instalação:

> composer install

Instala as dependências

> php bin/console doctrine:database:create

Cria o banco inicial

> php bin/console doctrine:migrations:diff

> php bin/console doctrine:migrations:migrate

Atualiza a estrutura do banco de acordo com as Entities.

> php bin/console doctrine:fixtures:load

Carrega dados iniciais, por enquanto apenas um usuário: admin/admin

#### Para FrontEnd:

https://symfony.com/doc/current/frontend.html 

#### TODO/Lembretes

Habilitar no php.ini

> ``` ;extension=php_fileinfo.dll ```

O que há por dentro?
=
  * Symfony 4;
  * [Doctrine ORM/DBAL][1];
  * [Swiftmailer][4];
  * Annotations habilitado pra TUDO;
  * [Twig][2];
  * [SecurityBundle][3];
  * [MonologBundle][5];

[1]:  https://symfony.com/doc/current/doctrine.html
[2]:  https://symfony.com/doc/current/templating.html
[3]:  https://symfony.com/doc/current/security.html
[4]: https://symfony.com/doc/cookbook/email.html
[5]: https://symfony.com/doc/cookbook/logging/monolog.html
