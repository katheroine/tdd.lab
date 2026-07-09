# TDD.lab

**Usage**

To run the example application with *Docker* use command:

```console
docker compose up -d
```

The following set-up steps are covered by the [`setup_container_dev_environment.sh`](./bin/setup_container_dev_environment.sh) script, that can be run from the local machine.

After creating the *Docker container* the *Composer dependencies* have to be defined and installed:

```console
docker exec --user root tdd-example-app composer require --dev squizlabs/php_codesniffer --dev phpunit/phpunit \
&& docker exec --user root tdd-example-app composer install
```

To make *PHP Code Sniffer commands* easily accessible run:

```console
docker exec --user root tdd-example-app bash -c "
    ln -s /code/vendor/bin/phpcs /usr/local/bin/phpcs;
    ln -s /code/vendor/bin/phpcbf /usr/local/bin/phpcbf;
    ln -s /code/vendor/bin/phpunit /usr/local/bin/phpunit;
"
```

To run *PHP Code Sniffer* use command:

```console
docker exec tdd-example-app /code/vendor/bin/phpcs
```

or, if the shortcut has been created:

```console
docker exec tdd-example-app phpcs
```

To run *PHP Unit* use command:

```console
docker exec tdd-example-app /code/vendor/bin/phpunit
```

or, if the shortcut has been created:

```console
docker exec tdd-example-app phpunit
```

To update *Composer dependencies* use command:

```console
docker exec --user root tdd-example-app composer update
```

To update *Composer autoloader* cache use use command:

```console
docker exec --user root tdd-example-app composer dump-autoload
```

To login into the *Docker container* as default user use command:

```console
docker exec -it tdd-example-app /bin/bash
```

To login into the *Docker container* as root user use command:

```console
docker exec --user root -it tdd-example-app /bin/bash
```

## Index

### Description

1. [What is TDD?](./docs/intro/what_is_tdd.md)
2. [TDD history](./docs/intro/tdd_history.md)