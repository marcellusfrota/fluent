
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
