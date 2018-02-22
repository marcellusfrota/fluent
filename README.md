
Bem vindo ao Fluent (Delta)
=

---

# Primeiramente...
#ForaTemer #8balls #anonymous

# O que é?
O **Fluent** é um gerenciador de atividades inicialmente desenvolvido por Marcellus Frota.

# Quando será atualizado?
Sempre !

Dicas & Macetes
=
#### Comandos Fluent:

> composer update

#### TODO/Lembretes

Habilitar no php.ini

> ``` ;extension=php_fileinfo.dll ```

#### Comandos Doctrine

>  ``` php bin/console doctrine:generate:entity ```

*Quando pedir o nome coloque: Fluent:NomeDaEntidade;*

*Quando quiser encerrar basta dar Enter quando perguntar pelo próximo campo;*

>  ``` php bin/console doctrine:schema:update --force ```

*Esse comando atualiza o banco de acordo com as Entities;*

> ``` php bin/console generate:doctrine:form Fluent:Card ```

*Gera os formulários dentro de src/Fluent/Form;*

> ``` php bin/console generate:doctrine:crud --entity=Fluent:Board ```

*Gera Controller e Forms <3;*

O que há por dentro?
=
  * Symfony 4;
  * Twig;
  * Doctrine ORM/DBAL;
  * Swiftmailer;
  * Annotations habilitado pra TUDO;
  * [SensioFrameworkExtraBundle][6];
    template and routing annotation capability
  * [DoctrineBundle][7];
  * [TwigBundle][8];
  * [SecurityBundle][9];
  * [MonologBundle][11];
  * **WebProfilerBundle** (in dev/test env);
  * **SensioDistributionBundle** (in dev/test env);
  * [SensioGeneratorBundle][13] (in dev/test env);
  * **DebugBundle** (in dev/test env);

[1]:  https://symfony.com/doc/current/setup.html
[6]:  https://symfony.com/doc/current/bundles/SensioFrameworkExtraBundle/index.html
[7]:  https://symfony.com/doc/current/doctrine.html
[8]:  https://symfony.com/doc/current/templating.html
[9]:  https://symfony.com/doc/current/security.html
[10]: https://symfony.com/doc/cookbook/email.html
[11]: https://symfony.com/doc/cookbook/logging/monolog.html
[13]: https://symfony.com/doc/bundles/SensioGeneratorBundle/index.html