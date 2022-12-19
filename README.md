# SwaggerClient-php
# Общее описание <style> .version {   border: 0.1rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #32329FE6;   height: 25px;   width: 150px;   text-align: center }, </style> <style> .warning {   border: 1.6rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #247706;   text-align: center } </style>  Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Swagger](https://swagger.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Swagger CodeGen](https://swagger.io/tools/swagger-codegen/)  <ul> <li> Описание в оригинальном swagger-формате <a href=\"/swagger\">swagger</a> <li> OpenAPI-файл <a href=\"/swagger.yaml\">swagger.yaml</a> </ul>  <br> Для ручной проверки API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul>  ## Поддержка <br> Техническая поддержка осуществляется через обращения в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API. <br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> Также готовятся к публикации Release Notes по API на сайте.  После их выхода будет сделан соответствующий анонс.   ## Авторизация Вызов любого метода API должен быть авторизован.  Авторизация осуществляется по ключам API, которые  владелец личного кабинета (главный пользователь) самостоятельно  генерирует в разделе   [Профиль --> Настройки --> Доступ к API](https://seller.wildberries.ru/supplier-settings/access-to-api) для статистики   и [Профиль --> Настройки --> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api) для остальных методов.   <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a> управление всеми ключами будет перенесено в единую вкладку. </p>  ### Авторизация для методов Статистики При работе с методами Статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к API\". <br>Созданный ключ отображается в личном кабинете как \"Ключ для работы с API статистики x64\". <br>Его следует скопировать и добавлять в каждый запрос, прибавляя к запросу параметр `key`. <br>Выглядеть запрос будет примерно так: `https://suppliers-stats.wildberries.ru/api/v1/supplier/stocks?dateFrom=2022-03-25&key=.........`  <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a>: <ul>   <li>Управление всеми ключами будет перенесено в единую вкладку   <li>Для доступа к API Статистики нужно будет указывать домен <code><b>https://statistics-api.wildberries.ru</b></code>   <li>Ключ авторизации необходимо будет указывать в HTTP-заголовке <code>Authorization</code>, а не в строке параметров </ul> </p>  ### Авторизация для нестатистических методов При работе со всеми методами кроме статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к новому API\". <br>Обратите внимание, что ключ отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный ключ следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: .........`. <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a>: данный раздел ЛК можно будет использовать для управления всеми типами ключей. </p>  ## Форматы ### Дата и время Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>  ## АНОНС - Единый ЛК управления ключами API WILDBERRIES начинает постепенный перевод аккаунтов на новую (единую) схему управления токенами («ключами») публичного API продавцов.  <br> <br> **ВАЖНО** : описанные ниже изменения будут становиться доступными для продавцов постепенно в течение ноября 2022г. Если изменения уже стали доступны, в настройках магазина из-под аккаунта Владельца останется одна вкладка `Доступ в новому API` вместо двух.  <br> <br> Теперь управление **всеми** ключами программного доступа к магазину будет осуществляться в интерфейсе, доступном по адресу [Настройки -> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api). <br> Для создаваемых ключей теперь указывается `Тип ключа`, который определяет, к какой группе сервисов данный ключ имеет доступ.  На данный момент доступно два типа, список будет расширяться: <ul> <li> `Стандартный`: дает доступ к методам API Контент, Маркетплейс, Цены и Скидки. <li> `Статистика`: дает доступ только к отчетам по статистике </ul> <br> Также при создании ключа необходимо указать его Имя - произвольную строку, которая будет  выводиться в списке ключей в качестве подсказки. Пример: \"Для онлайн бухгалтерии\"  ### Информация для пользователей API статистики  Предыдущие версии ключей (так называемые `Ключ для работы с API статистики x64`) продолжат работать в прежнем режиме. По завершении перевода всех аккаунтов на новую схему сообщим об этом отдельной новостью, где также укажем дату, до которой будут поддерживаться старые токены «x32» и «x64» (ориентировочно до середины января). <br> <br>С 29 ноября новые аккаунты будут создаваться сразу с новой схемой управления токенами. <br> Чтобы перейти со старого ключа на новый, следуйте инструкции: 1. Сгенерируйте новый ключ в разделе [Настройки -> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api).    <br><b>Важно</b>: при генерации выберите тип ключа `Статистика` 2. Новый ключ следует указывать в HTTP-заголовке `Authorization`.    <br>Его не надо указывать в самом запросе как раньше (так называемых query parameters),    то есть параметр `&key=...` следует удалить из запроса 3. При обращении за статистикой необходимо сменить адрес (endpoint) с https://suppliers-stats.wildberries.ru/ на https://statistics-api.wildberries.ru/   ## Release Notes  #### 2022.10.31 v1.4  Метод будет отключен 2022.10.31 в v1.4: <ul> <li> `/content/v1/cards/list` </ul>  #### 2022.09.20 v1.2  В связи с переходом на новое API Контента старые методы будут отключены. К их числу относятся: <ul> <li> `/card/_*` <li> `/api/v1/config/_*` <li> `/api/v1/directory/_*` </ul> Данные методы теперь возвращают код 404.  Новое API Контента описано в данном документе в разделах Контент / *

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.4
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Ключ аутентификации.<br>  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API».
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierExciseGoodsGet($key, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierExciseGoodsGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Ключ аутентификации.<br>  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API».
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierIncomesGet($key, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierIncomesGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Ключ аутентификации.<br>  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API».
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

try {
    $result = $apiInstance->apiV1SupplierOrdersGet($key, $date_from, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierOrdersGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Ключ аутентификации.<br>  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API».
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$date_to = new \DateTime("2013-10-20"); // \DateTime | Конечная дата отчета
$limit = 0; // int | Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000.
$rrdid = 56; // int | Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  <br> Загрузку отчета нужно начинать с `rrdid = 0` и при последующих вызовах API передавать в запросе значение `rrd_id` из последней строки, полученной в результате предыдущего вызова.  <br> Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю.

try {
    $result = $apiInstance->apiV1SupplierReportDetailByPeriodGet($key, $date_from, $date_to, $limit, $rrdid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierReportDetailByPeriodGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Ключ аутентификации.<br>  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API».
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

try {
    $result = $apiInstance->apiV1SupplierSalesGet($key, $date_from, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierSalesGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: ApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = "key_example"; // string | Ключ аутентификации.<br>  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API».
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierStocksGet($key, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierStocksGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quantity = 56; // int | `2` - товар с нулевым остатком, `1` - товар с ненулевым остатком, `0` - товар с любым остатком

try {
    $result = $apiInstance->publicApiV1InfoGet($quantity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1InfoGet: ', $e->getMessage(), PHP_EOL;
}

// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\V1PricesBody()); // \Swagger\Client\Model\V1PricesBody[] | 

try {
    $apiInstance->publicApiV1PricesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1PricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DefaultApi* | [**apiV1SupplierExciseGoodsGet**](docs/Api/DefaultApi.md#apiv1supplierexcisegoodsget) | **GET** /api/v1/supplier/excise-goods | Отчет по КиЗам
*DefaultApi* | [**apiV1SupplierIncomesGet**](docs/Api/DefaultApi.md#apiv1supplierincomesget) | **GET** /api/v1/supplier/incomes | Поставки
*DefaultApi* | [**apiV1SupplierOrdersGet**](docs/Api/DefaultApi.md#apiv1supplierordersget) | **GET** /api/v1/supplier/orders | Заказы
*DefaultApi* | [**apiV1SupplierReportDetailByPeriodGet**](docs/Api/DefaultApi.md#apiv1supplierreportdetailbyperiodget) | **GET** /api/v1/supplier/reportDetailByPeriod | Отчет о продажах по реализации
*DefaultApi* | [**apiV1SupplierSalesGet**](docs/Api/DefaultApi.md#apiv1suppliersalesget) | **GET** /api/v1/supplier/sales | Продажи
*DefaultApi* | [**apiV1SupplierStocksGet**](docs/Api/DefaultApi.md#apiv1supplierstocksget) | **GET** /api/v1/supplier/stocks | Склад
*DefaultApi* | [**publicApiV1InfoGet**](docs/Api/DefaultApi.md#publicapiv1infoget) | **GET** /public/api/v1/info | Получение информации о ценах.
*DefaultApi* | [**publicApiV1PricesPost**](docs/Api/DefaultApi.md#publicapiv1pricespost) | **POST** /public/api/v1/prices | Загрузка цен
*MarketplaceDeprecatedApi* | [**apiV2OrdersGet**](docs/Api/MarketplaceDeprecatedApi.md#apiv2ordersget) | **GET** /api/v2/orders | Список сборочных заданий
*MarketplaceDeprecatedApi* | [**apiV2OrdersPut**](docs/Api/MarketplaceDeprecatedApi.md#apiv2ordersput) | **PUT** /api/v2/orders | Обновление статуса сборочных заданий
*MarketplaceDeprecatedApi* | [**apiV2OrdersStickersPdfPost**](docs/Api/MarketplaceDeprecatedApi.md#apiv2ordersstickerspdfpost) | **POST** /api/v2/orders/stickers/pdf | Cписок QR стикеров в формате pdf
*MarketplaceDeprecatedApi* | [**apiV2OrdersStickersPost**](docs/Api/MarketplaceDeprecatedApi.md#apiv2ordersstickerspost) | **POST** /api/v2/orders/stickers | Cписок этикеток сборочных заданий
*MarketplaceDeprecatedApi* | [**apiV2StocksDelete**](docs/Api/MarketplaceDeprecatedApi.md#apiv2stocksdelete) | **DELETE** /api/v2/stocks | Удаление остатков товара
*MarketplaceDeprecatedApi* | [**apiV2StocksGet**](docs/Api/MarketplaceDeprecatedApi.md#apiv2stocksget) | **GET** /api/v2/stocks | Список товаров с остатками
*MarketplaceDeprecatedApi* | [**apiV2StocksPost**](docs/Api/MarketplaceDeprecatedApi.md#apiv2stockspost) | **POST** /api/v2/stocks | Обновление остатков товара
*MarketplaceDeprecatedApi* | [**apiV2SuppliesGet**](docs/Api/MarketplaceDeprecatedApi.md#apiv2suppliesget) | **GET** /api/v2/supplies | Список поставок
*MarketplaceDeprecatedApi* | [**apiV2SuppliesIdBarcodeGet**](docs/Api/MarketplaceDeprecatedApi.md#apiv2suppliesidbarcodeget) | **GET** /api/v2/supplies/{id}/barcode | Штрихкод поставки в заданном формате
*MarketplaceDeprecatedApi* | [**apiV2SuppliesIdClosePost**](docs/Api/MarketplaceDeprecatedApi.md#apiv2suppliesidclosepost) | **POST** /api/v2/supplies/{id}/close | Закрытие поставки
*MarketplaceDeprecatedApi* | [**apiV2SuppliesIdOrdersGet**](docs/Api/MarketplaceDeprecatedApi.md#apiv2suppliesidordersget) | **GET** /api/v2/supplies/{id}/orders | Список заказов, закреплённых за поставкой
*MarketplaceDeprecatedApi* | [**apiV2SuppliesIdPut**](docs/Api/MarketplaceDeprecatedApi.md#apiv2suppliesidput) | **PUT** /api/v2/supplies/{id} | Добавление к поставке заказов
*MarketplaceDeprecatedApi* | [**apiV2SuppliesPost**](docs/Api/MarketplaceDeprecatedApi.md#apiv2suppliespost) | **POST** /api/v2/supplies | Новая поставка
*Marketplace_Api* | [**apiV2WarehousesGet**](docs/Api/Marketplace_Api.md#apiv2warehousesget) | **GET** /api/v2/warehouses | Cписок складов
*Marketplace_Api* | [**apiV3OrdersGet**](docs/Api/Marketplace_Api.md#apiv3ordersget) | **GET** /api/v3/orders | Получить информацию по сборочным заданиям
*Marketplace_Api* | [**apiV3OrdersNewGet**](docs/Api/Marketplace_Api.md#apiv3ordersnewget) | **GET** /api/v3/orders/new | Получить список новых сборочных заданий
*Marketplace_Api* | [**apiV3OrdersOrderCancelPatch**](docs/Api/Marketplace_Api.md#apiv3ordersordercancelpatch) | **PATCH** /api/v3/orders/{order}/cancel | Отменить сборочное задание
*Marketplace_Api* | [**apiV3OrdersOrderMetaSgtinPost**](docs/Api/Marketplace_Api.md#apiv3ordersordermetasgtinpost) | **POST** /api/v3/orders/{order}/meta/sgtin | Закрепить за сборочным заданием КиЗ (маркировку Честного знака)
*Marketplace_Api* | [**apiV3OrdersStatusPost**](docs/Api/Marketplace_Api.md#apiv3ordersstatuspost) | **POST** /api/v3/orders/status | Получить статусы сборочных заданий
*Marketplace_Api* | [**apiV3OrdersStickersPost**](docs/Api/Marketplace_Api.md#apiv3ordersstickerspost) | **POST** /api/v3/orders/stickers | Получить этикетки для сборочных заданий
*Marketplace_Api* | [**apiV3StocksWarehouseDelete**](docs/Api/Marketplace_Api.md#apiv3stockswarehousedelete) | **DELETE** /api/v3/stocks/{warehouse} | Удалить остатки товаров
*Marketplace_Api* | [**apiV3StocksWarehousePost**](docs/Api/Marketplace_Api.md#apiv3stockswarehousepost) | **POST** /api/v3/stocks/{warehouse} | Получить остатки товаров
*Marketplace_Api* | [**apiV3StocksWarehousePut**](docs/Api/Marketplace_Api.md#apiv3stockswarehouseput) | **PUT** /api/v3/stocks/{warehouse} | Обновить остатки товаров
*Marketplace_Api* | [**apiV3SuppliesGet**](docs/Api/Marketplace_Api.md#apiv3suppliesget) | **GET** /api/v3/supplies | Получить список поставок
*Marketplace_Api* | [**apiV3SuppliesOrdersReshipmentGet**](docs/Api/Marketplace_Api.md#apiv3suppliesordersreshipmentget) | **GET** /api/v3/supplies/orders/reshipment | Получить все сборочные задания на повторную отгрузку
*Marketplace_Api* | [**apiV3SuppliesPost**](docs/Api/Marketplace_Api.md#apiv3suppliespost) | **POST** /api/v3/supplies | Создать новую поставку
*Marketplace_Api* | [**apiV3SuppliesSupplyBarcodeGet**](docs/Api/Marketplace_Api.md#apiv3suppliessupplybarcodeget) | **GET** /api/v3/supplies/{supply}/barcode | Получить QR поставки
*Marketplace_Api* | [**apiV3SuppliesSupplyDelete**](docs/Api/Marketplace_Api.md#apiv3suppliessupplydelete) | **DELETE** /api/v3/supplies/{supply} | Удалить поставку
*Marketplace_Api* | [**apiV3SuppliesSupplyDeliverPatch**](docs/Api/Marketplace_Api.md#apiv3suppliessupplydeliverpatch) | **PATCH** /api/v3/supplies/{supply}/deliver | Передать поставку в доставку
*Marketplace_Api* | [**apiV3SuppliesSupplyGet**](docs/Api/Marketplace_Api.md#apiv3suppliessupplyget) | **GET** /api/v3/supplies/{supply} | Получить информацию о поставке
*Marketplace_Api* | [**apiV3SuppliesSupplyOrdersGet**](docs/Api/Marketplace_Api.md#apiv3suppliessupplyordersget) | **GET** /api/v3/supplies/{supply}/orders | Получить сборочные задания в поставке
*Marketplace_Api* | [**apiV3SuppliesSupplyOrdersOrderPatch**](docs/Api/Marketplace_Api.md#apiv3suppliessupplyordersorderpatch) | **PATCH** /api/v3/supplies/{supply}/orders/{order} | Добавить к поставке сборочное задание
*_Api* | [**contentV1BarcodesPost**](docs/Api/_Api.md#contentv1barcodespost) | **POST** /content/v1/barcodes | Генерация баркодов
*_Api* | [**contentV1CardsCursorListPost**](docs/Api/_Api.md#contentv1cardscursorlistpost) | **POST** /content/v1/cards/cursor/list | Список НМ v2
*_Api* | [**contentV1CardsErrorListGet**](docs/Api/_Api.md#contentv1cardserrorlistget) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками
*_Api* | [**contentV1CardsFilterPost**](docs/Api/_Api.md#contentv1cardsfilterpost) | **POST** /content/v1/cards/filter | Получение КТ по вендор кодам (артикулам)
*_Api* | [**contentV1CardsUpdatePost**](docs/Api/_Api.md#contentv1cardsupdatepost) | **POST** /content/v1/cards/update | Редактирование КТ
*_Api* | [**contentV1CardsUploadAddPost**](docs/Api/_Api.md#contentv1cardsuploadaddpost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ
*_Api* | [**contentV1CardsUploadPost**](docs/Api/_Api.md#contentv1cardsuploadpost) | **POST** /content/v1/cards/upload | Создание  КТ
*_Api* | [**contentV1DirectoryBrandsGet**](docs/Api/_Api.md#contentv1directorybrandsget) | **GET** /content/v1/directory/brands | Бренд
*_Api* | [**contentV1DirectoryCollectionsGet**](docs/Api/_Api.md#contentv1directorycollectionsget) | **GET** /content/v1/directory/collections | Коллекция
*_Api* | [**contentV1DirectoryColorsGet**](docs/Api/_Api.md#contentv1directorycolorsget) | **GET** /content/v1/directory/colors | Цвет
*_Api* | [**contentV1DirectoryConsistsGet**](docs/Api/_Api.md#contentv1directoryconsistsget) | **GET** /content/v1/directory/consists | Состав
*_Api* | [**contentV1DirectoryContentsGet**](docs/Api/_Api.md#contentv1directorycontentsget) | **GET** /content/v1/directory/contents | Комплектация
*_Api* | [**contentV1DirectoryCountriesGet**](docs/Api/_Api.md#contentv1directorycountriesget) | **GET** /content/v1/directory/countries | Страна Производства
*_Api* | [**contentV1DirectoryKindsGet**](docs/Api/_Api.md#contentv1directorykindsget) | **GET** /content/v1/directory/kinds | Пол
*_Api* | [**contentV1DirectorySeasonsGet**](docs/Api/_Api.md#contentv1directoryseasonsget) | **GET** /content/v1/directory/seasons | Сезон
*_Api* | [**contentV1DirectoryTnvedGet**](docs/Api/_Api.md#contentv1directorytnvedget) | **GET** /content/v1/directory/tnved | ТНВЭД код
*_Api* | [**contentV1MediaFilePost**](docs/Api/_Api.md#contentv1mediafilepost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ
*_Api* | [**contentV1MediaSavePost**](docs/Api/_Api.md#contentv1mediasavepost) | **POST** /content/v1/media/save | Изменение медиа контента КТ
*_Api* | [**contentV1ObjectAllGet**](docs/Api/_Api.md#contentv1objectallget) | **GET** /content/v1/object/all | Категория товаров
*_Api* | [**contentV1ObjectCharacteristicsListFilterGet**](docs/Api/_Api.md#contentv1objectcharacteristicslistfilterget) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям
*_Api* | [**contentV1ObjectCharacteristicsObjectNameGet**](docs/Api/_Api.md#contentv1objectcharacteristicsobjectnameget) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара
*_Api* | [**contentV1ObjectParentAllGet**](docs/Api/_Api.md#contentv1objectparentallget) | **GET** /content/v1/object/parent/all | Родительские категории товаров
*_Api* | [**publicApiV1RevokeDiscountsPost**](docs/Api/_Api.md#publicapiv1revokediscountspost) | **POST** /public/api/v1/revokeDiscounts | Сброс скидок для номенклатур
*_Api* | [**publicApiV1RevokePromocodesPost**](docs/Api/_Api.md#publicapiv1revokepromocodespost) | **POST** /public/api/v1/revokePromocodes | Сброс промокодов для номенклатур
*_Api* | [**publicApiV1UpdateDiscountsPost**](docs/Api/_Api.md#publicapiv1updatediscountspost) | **POST** /public/api/v1/updateDiscounts | Установка скидок
*_Api* | [**publicApiV1UpdatePromocodesPost**](docs/Api/_Api.md#publicapiv1updatepromocodespost) | **POST** /public/api/v1/updatePromocodes | Установка промокодов для номенклатур

## Documentation For Models

 - [Apiv2ordersSgtin](docs/Model/Apiv2ordersSgtin.md)
 - [Apiv3ordersordermetasgtinSgtin](docs/Model/Apiv3ordersordermetasgtinSgtin.md)
 - [Apiv3stockswarehouseStocks](docs/Model/Apiv3stockswarehouseStocks.md)
 - [CardsFilterBody](docs/Model/CardsFilterBody.md)
 - [CardsUpdateBody](docs/Model/CardsUpdateBody.md)
 - [Contentv1cardscursorlistSort](docs/Model/Contentv1cardscursorlistSort.md)
 - [Contentv1cardscursorlistSortCursor](docs/Model/Contentv1cardscursorlistSortCursor.md)
 - [Contentv1cardscursorlistSortFilter](docs/Model/Contentv1cardscursorlistSortFilter.md)
 - [Contentv1cardscursorlistSortSort](docs/Model/Contentv1cardscursorlistSortSort.md)
 - [Contentv1cardsupdateSizes](docs/Model/Contentv1cardsupdateSizes.md)
 - [Contentv1cardsuploadaddCards](docs/Model/Contentv1cardsuploadaddCards.md)
 - [Contentv1cardsuploadaddSizes](docs/Model/Contentv1cardsuploadaddSizes.md)
 - [CursorListBody](docs/Model/CursorListBody.md)
 - [DeliveryAddressDetails](docs/Model/DeliveryAddressDetails.md)
 - [DetailReportItem](docs/Model/DetailReportItem.md)
 - [Error](docs/Model/Error.md)
 - [ExcItem](docs/Model/ExcItem.md)
 - [IncomesItem](docs/Model/IncomesItem.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20010Data](docs/Model/InlineResponse20010Data.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011Data](docs/Model/InlineResponse20011Data.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Data](docs/Model/InlineResponse20013Data.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20014Data](docs/Model/InlineResponse20014Data.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016Data](docs/Model/InlineResponse20016Data.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20017Data](docs/Model/InlineResponse20017Data.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse20019Data](docs/Model/InlineResponse20019Data.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20020Supplies](docs/Model/InlineResponse20020Supplies.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20022Orders](docs/Model/InlineResponse20022Orders.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20023Stocks](docs/Model/InlineResponse20023Stocks.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20024Data](docs/Model/InlineResponse20024Data.md)
 - [InlineResponse20024DataError](docs/Model/InlineResponse20024DataError.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20025Data](docs/Model/InlineResponse20025Data.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse20027](docs/Model/InlineResponse20027.md)
 - [InlineResponse20027Orders](docs/Model/InlineResponse20027Orders.md)
 - [InlineResponse20028](docs/Model/InlineResponse20028.md)
 - [InlineResponse20028Data](docs/Model/InlineResponse20028Data.md)
 - [InlineResponse20028Sticker](docs/Model/InlineResponse20028Sticker.md)
 - [InlineResponse20028StickerWbStickerIdParts](docs/Model/InlineResponse20028StickerWbStickerIdParts.md)
 - [InlineResponse20029](docs/Model/InlineResponse20029.md)
 - [InlineResponse20029Data](docs/Model/InlineResponse20029Data.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse20030](docs/Model/InlineResponse20030.md)
 - [InlineResponse20030Stocks](docs/Model/InlineResponse20030Stocks.md)
 - [InlineResponse20031](docs/Model/InlineResponse20031.md)
 - [InlineResponse20032](docs/Model/InlineResponse20032.md)
 - [InlineResponse20033](docs/Model/InlineResponse20033.md)
 - [InlineResponse20033Orders](docs/Model/InlineResponse20033Orders.md)
 - [InlineResponse20034](docs/Model/InlineResponse20034.md)
 - [InlineResponse20035](docs/Model/InlineResponse20035.md)
 - [InlineResponse20035Orders](docs/Model/InlineResponse20035Orders.md)
 - [InlineResponse20036](docs/Model/InlineResponse20036.md)
 - [InlineResponse20037](docs/Model/InlineResponse20037.md)
 - [InlineResponse20038](docs/Model/InlineResponse20038.md)
 - [InlineResponse20038Stickers](docs/Model/InlineResponse20038Stickers.md)
 - [InlineResponse2003Data](docs/Model/InlineResponse2003Data.md)
 - [InlineResponse2003DataCards](docs/Model/InlineResponse2003DataCards.md)
 - [InlineResponse2003DataCursor](docs/Model/InlineResponse2003DataCursor.md)
 - [InlineResponse2003DataSizes](docs/Model/InlineResponse2003DataSizes.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Data](docs/Model/InlineResponse2004Data.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Data](docs/Model/InlineResponse2005Data.md)
 - [InlineResponse2005Sizes](docs/Model/InlineResponse2005Sizes.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2007Data](docs/Model/InlineResponse2007Data.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Data](docs/Model/InlineResponse2008Data.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Data](docs/Model/InlineResponse2009Data.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineResponse400](docs/Model/InlineResponse400.md)
 - [InlineResponse4001](docs/Model/InlineResponse4001.md)
 - [InlineResponse409](docs/Model/InlineResponse409.md)
 - [MediaFileBody](docs/Model/MediaFileBody.md)
 - [MediaSaveBody](docs/Model/MediaSaveBody.md)
 - [MetaSgtinBody](docs/Model/MetaSgtinBody.md)
 - [Next](docs/Model/Next.md)
 - [Order](docs/Model/Order.md)
 - [OrderAddress](docs/Model/OrderAddress.md)
 - [OrderUser](docs/Model/OrderUser.md)
 - [OrdersItem](docs/Model/OrdersItem.md)
 - [OrdersStatusBody](docs/Model/OrdersStatusBody.md)
 - [OrdersStickersBody](docs/Model/OrdersStickersBody.md)
 - [RequestBodyStickers](docs/Model/RequestBodyStickers.md)
 - [RespBodyStocks](docs/Model/RespBodyStocks.md)
 - [ResponseBodyError400](docs/Model/ResponseBodyError400.md)
 - [ResponseBodyError403](docs/Model/ResponseBodyError403.md)
 - [ResponseBodyStickersError](docs/Model/ResponseBodyStickersError.md)
 - [SalesItem](docs/Model/SalesItem.md)
 - [StocksItem](docs/Model/StocksItem.md)
 - [StocksWarehouseBody](docs/Model/StocksWarehouseBody.md)
 - [StocksWarehouseBody1](docs/Model/StocksWarehouseBody1.md)
 - [StocksWarehouseBody2](docs/Model/StocksWarehouseBody2.md)
 - [SuppliesIdBody](docs/Model/SuppliesIdBody.md)
 - [SuppliesIdRespBody](docs/Model/SuppliesIdRespBody.md)
 - [SuppliesIdRespBody2](docs/Model/SuppliesIdRespBody2.md)
 - [SuppliesIdRespBody2Data](docs/Model/SuppliesIdRespBody2Data.md)
 - [Supply](docs/Model/Supply.md)
 - [SupplyOrder](docs/Model/SupplyOrder.md)
 - [UploadAddBody](docs/Model/UploadAddBody.md)
 - [UserInfo](docs/Model/UserInfo.md)
 - [V1BarcodesBody](docs/Model/V1BarcodesBody.md)
 - [V1PricesBody](docs/Model/V1PricesBody.md)
 - [V2OrdersBody](docs/Model/V2OrdersBody.md)
 - [V2StocksBody](docs/Model/V2StocksBody.md)
 - [V2StocksBody1](docs/Model/V2StocksBody1.md)
 - [V3SuppliesBody](docs/Model/V3SuppliesBody.md)

## Documentation For Authorization


## ApiKey

- **Type**: API key
- **API key parameter name**: key
- **Location**: URL query string

## HeaderApiKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Author



