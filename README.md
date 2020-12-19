## Установка компонентов

В зависимости от OS нужно установить следующие компоненты:

- [Git](https://git-scm.com/)
- [Composer](https://getcomposer.org/)
- [Node JS](https://nodejs.org/en/)
- [PHP v7.2 (linux)](https://losst.ru/ustanovka-php-7-v-ubuntu-2)
- [PostgreSQL](https://www.postgresql.org/)
- [PgAdmin](https://www.pgadmin.org/)
- [OpenServer (Windows, php v7.2)](https://biblprog.org.ua/ru/open_server/)

## Установка проекта

- Склонировать проект.  
  
- Перейти к проекту:

    <code>cd ваша директория</code>

  
- Установить и обновить пакеты Laravel через composer:

    <code>composer install && composer update</code>
  
- Установить:

    <code>npm install</code>
    
- Создать .env файл, копируя с .env.example:

    <code>cp .env.example .env</code>    
  
- Сгенерировать key проекта:

    <code>php artisan key:generate</code>
  
- Прописать в .env файле подключение к БД postgreSQL и локальный домен. Проверить наличие сгенерированного ключа.

    Пример подключения:
    
    <code>DB_CONNECTION=pgsql<br/>DB_HOST=localhost<br/>DB_PORT=5432<br/>DB_DATABASE=test-spa<br/>DB_USERNAME=root<br/>DB_PASSWORD=password</code>
     
    Пример домена:
    
    <code>APP_URL=http://test-spa.loc</code>
    
    Пример ключа:
    
    <code>APP_KEY=base64:fhbsdfsdfvfbvghffsdfaudhdhahdaudiaudhaihdia=</code>
  
- Выполнить миграцию таблиц БД:

    <code>php artisan migrate</code>

- Собрать пакеты node_modules:

    <code>npm run watch</code>

- Запустить сервер и перейти по своему домену. Также Laravel имеет свой собственный локальный сервер <http://127.0.0.1:8000>:

    <code>php artisan serve</code>
