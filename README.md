Финальный проект
Приложение SF-AdTech - финальный проект для площадки Skillfactory по курсу PHPDEV50.

Описание проекта.
Приложение SF-AdTech — это трекер трафика, созданный для организации взаимодействия компаний (рекламодателей), которые хотят привлечь к себе на сайт посетителей и покупателей (клиентов), и владельцев сайтов (веб-мастеров), на которые люди приходят, например, чтобы почитать новости или пообщаться на форуме.

В системе могут быть три вида пользователей:

Администратор (role = 0)
Рекламодатель (role = 1)
Веб-мастер (role = 2)
Администратор не может быть выбран при создании учётной записи, первичного администратора можно назначить через базу данных, в дальнейшем администратор может назначать новых через функционал трекера.

Рекламодатель и Веб-мастер доступны к выбору при создании учётной записи.

Администратору доступен следующий функционал:

Заведение новых пользователей с любой ролью
Редактирование учетных данных пользователей
Деактивация/активация учетных записей пользователей
Просмотр статистики трекера
Просмотр данных по ссылкам
Рекламодателю доступен следующий функционал:

Создание offer-а
Редактирование существующих(своих) offer-ов
Деактивация/активация своих offer-ов
Просмотр статистики по своим offer-ам
Веб-мастеру доступен следующий функционал:

Просмотр доступных offer-ов
Подписка на offer
Отписка от offer-а
Просмотр статистики переходов по ссылкам
При подписке на offer, для Веб-мастера генерируется ссылка, которую можно использовать для привлечения клиентов. Если клиент переходит по данной ссылке, будет зафиксирован факт перехода в БД, если переход успешный, клиент попадет на страницу сайта рекламодателя. Если переход прошел с ошибкой, клиент попадет на страницу 404.

Запуск проекта.
В папке с проектом в консоли выполняем команду composer install. После ее выполнения будет создан файл .env, если этого не произошло, скопируем подготовленный файл. Выполняем следующие команды:

php -r "copy('.env.example', '.env');"

php artisan key:generate

Создаём базу данных, в файле .env настраиваем к ней подключение.

Создаем таблицы в БД с помощью команды: php artisan migrate.

В папке database лежат скрипты для наполнения таблиц БД данными, можно использовать их, либо создать свои.

Пароль Администратора: 12345

Пароль Веб-мастера: 123456

Пароль Рекламодателя: 1234567

После настройки репозитория и БД выполняем команду запуска: php artisan serve
