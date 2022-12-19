# Wildberries\Client\MarketplaceDeprecatedApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2OrdersGet**](MarketplaceDeprecatedApi.md#apiv2ordersget) | **GET** /api/v2/orders | Список сборочных заданий
[**apiV2OrdersPut**](MarketplaceDeprecatedApi.md#apiv2ordersput) | **PUT** /api/v2/orders | Обновление статуса сборочных заданий
[**apiV2OrdersStickersPdfPost**](MarketplaceDeprecatedApi.md#apiv2ordersstickerspdfpost) | **POST** /api/v2/orders/stickers/pdf | Cписок QR стикеров в формате pdf
[**apiV2OrdersStickersPost**](MarketplaceDeprecatedApi.md#apiv2ordersstickerspost) | **POST** /api/v2/orders/stickers | Cписок этикеток сборочных заданий
[**apiV2StocksDelete**](MarketplaceDeprecatedApi.md#apiv2stocksdelete) | **DELETE** /api/v2/stocks | Удаление остатков товара
[**apiV2StocksGet**](MarketplaceDeprecatedApi.md#apiv2stocksget) | **GET** /api/v2/stocks | Список товаров с остатками
[**apiV2StocksPost**](MarketplaceDeprecatedApi.md#apiv2stockspost) | **POST** /api/v2/stocks | Обновление остатков товара
[**apiV2SuppliesGet**](MarketplaceDeprecatedApi.md#apiv2suppliesget) | **GET** /api/v2/supplies | Список поставок
[**apiV2SuppliesIdBarcodeGet**](MarketplaceDeprecatedApi.md#apiv2suppliesidbarcodeget) | **GET** /api/v2/supplies/{id}/barcode | Штрихкод поставки в заданном формате
[**apiV2SuppliesIdClosePost**](MarketplaceDeprecatedApi.md#apiv2suppliesidclosepost) | **POST** /api/v2/supplies/{id}/close | Закрытие поставки
[**apiV2SuppliesIdOrdersGet**](MarketplaceDeprecatedApi.md#apiv2suppliesidordersget) | **GET** /api/v2/supplies/{id}/orders | Список заказов, закреплённых за поставкой
[**apiV2SuppliesIdPut**](MarketplaceDeprecatedApi.md#apiv2suppliesidput) | **PUT** /api/v2/supplies/{id} | Добавление к поставке заказов
[**apiV2SuppliesPost**](MarketplaceDeprecatedApi.md#apiv2suppliespost) | **POST** /api/v2/supplies | Новая поставка

# **apiV2OrdersGet**
> \Wildberries\Client\Model\InlineResponse20027 apiV2OrdersGet($date_start, $skip, $take, $date_end, $status, $id)

Список сборочных заданий

Метод возвращает список сборочных заданий поставщика. <br> <br> При выборе промежутка времени заказы следует забирать с помощью параметров `skip` и `take`, не более чем 1000 за один запрос. Параметр `total` подсказывает, сколько всего заказов было сделано за текущий промежуток времени. <br> <br> При отправке параметров `date_start` и `date_end` обратите внимание, что часовой пояс в формате <b>RFC3339</b> передается как `2021-09-30T17:14:52+03:00`, а время в UTC как `2021-09-30T17:14:52Z`. В то же время, знак `+` является зарезервированным в стандарте <b>RFC3986</b>. Поэтому чтобы корректно передать часовой пояс, необходимо передавать дату после обработки методом urlencode (или его аналогом). <br> <br> Ответ содержит два разных поля о статусе заказа (см. описание в схеме ответа): <ul>   <li>`status` - это то что меняет поставщик (метод <b>PUT /api/v2/orders</b>). Он учитывается для расчета опозданий и используется для отображения движения заказа.</li>   <li>`userStatus` - используется только для чтения, менять его нельзя. Это статус со стороны клиента. По нему можно понять, делал ли клиент отмену или возврат по причине брака.</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_start = "date_start_example"; // string | С какой даты вернуть сборочные задания (заказы). <br>Дата в формате RFC3339. Нужно передать дату со временем. <br>Время можно указывать с точностью до секунд или миллисекунд. <br>Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе. <br>Примеры: <ul> <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T00:00:00.12345Z` </ul>
$skip = 56; // int | Сколько записей пропустить.
$take = 56; // int | Сколько записей вернуть за раз.
$date_end = "date_end_example"; // string | По какую дату вернуть сборочные задания (заказы) (в формате `RFC3339`)
$status = 56; // int | Статус заказа.
$id = 56; // int | Идентификатор сборочного задания, если нужно получить данные по определенному заказу.

try {
    $result = $apiInstance->apiV2OrdersGet($date_start, $skip, $take, $date_end, $status, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2OrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_start** | **string**| С какой даты вернуть сборочные задания (заказы). &lt;br&gt;Дата в формате RFC3339. Нужно передать дату со временем. &lt;br&gt;Время можно указывать с точностью до секунд или миллисекунд. &lt;br&gt;Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе. &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;/ul&gt; |
 **skip** | **int**| Сколько записей пропустить. |
 **take** | **int**| Сколько записей вернуть за раз. |
 **date_end** | **string**| По какую дату вернуть сборочные задания (заказы) (в формате &#x60;RFC3339&#x60;) | [optional]
 **status** | **int**| Статус заказа. | [optional]
 **id** | **int**| Идентификатор сборочного задания, если нужно получить данные по определенному заказу. | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2OrdersPut**
> apiV2OrdersPut($body)

Обновление статуса сборочных заданий

Метод обновляет статус переданных сборочных заданий. <br> <br> <h2>Порядок работы со статусами для разного типа логистики</h2> Если заказ для любого типа логистики не может быть выполнен по любой причине, поставщик ставит статус <b>3 (\"Отклонено\")</b>.Переводить заказ в отмену можно из любого статуса, кроме конечного. Т.е. заказ в статусах <b>2 (\"Собрано\")</b>, <b>6 (\"Клиент получил товар\")</b>, <b>7 (\"Клиент не принял заказ\")</b> отменить уже нельзя. <h3>Доставка на склад WB.</h3>   <ul>     <li>Заказ приходит в статусе <b>0 (\"Новый\")</b>.</li>     <li>Поставщик принимает заказ и ставит статус <b>1 (\"В работе\")</b>.</li>     <li>Заказ собран, поставщик ставит статус <b>2 (\"Завершено\")</b>. После этого заказ должен быть доставлен на склад Wildberries в указанный срок.</li>   </ul> <h3>Доставка самостоятельно до клиента.</h3>    <ul>     <li>Заказ приходит в статусе <b>0 (\"Новый\")</b>.</li>     <li>Поставщик принимает заказ и ставит статус <b>1 (\"В работе\")</b>.</li>     <li>Если заказ собран и его передали курьеру, поставщик ставит статус <b>5 (\"Доставка курьером\")</b>.</li>     <li>Если заказ успешно доставлен клиенту, поставщик ставит статус <b>6 (\"Клиент принял заказ\")</b>.</li>     <li>Если клиент отказался от заказа, т.е. курьер не отдал его, поставщик ставит статус <b>7 (\"Клиент не принял заказ\")</b>.</li>   </ul> <h3>Самовывоз клиентом из магазина.</h3>   <ul>     <li>Заказ приходит в статусе <b>0 (\"Новый\")</b>.</li>     <li>Поставщик принимает заказ и ставит статус <b>1 (\"В работе\")</b>.</li>     <li>Когда заказ готов к выдаче, поставщик статус <b>9 (\"Готово к выдаче\")</b>.</li>     <li>Если клиент забрал заказ из точки самовывоза, поставщик ставит статус <b>6 (\"Клиент забрал заказ\")</b>.</li>     <li>Если клиент отказался от заказа, поставщик ставит статус <b> 7 (\"Клиент не принял заказ\")</b>.</li>   </ul> <h3>Отправка КИЗов товара.</h3>   <ul>     <li>Требуется только для фармацевтической продукции. При отправке КИЗов на заказы, где они не требуются, вернётся ошибка 400.</li>     <li>Отправлять КИЗЫ нужно при переводе заказов в статус <b>6 (\"Клиент забрал заказ\")</b>.</li>   </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Wildberries\Client\Model\V2OrdersBody()); // \Wildberries\Client\Model\V2OrdersBody[] | 

try {
    $apiInstance->apiV2OrdersPut($body);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2OrdersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\V2OrdersBody[]**](../Model/V2OrdersBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2OrdersStickersPdfPost**
> \Wildberries\Client\Model\InlineResponse20029 apiV2OrdersStickersPdfPost($body)

Cписок QR стикеров в формате pdf

Ограничения при работе с методом. <ul>   <li>Нельзя запросить больше 1000 этикеток за раз (не более 1000 ID заказов в запросе).</li>   <li>Метод возвращает этикетки только для заказов, взятых в работу (в статусе 1 и дальше).</li> </ul>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\RequestBodyStickers(); // \Wildberries\Client\Model\RequestBodyStickers | 

try {
    $result = $apiInstance->apiV2OrdersStickersPdfPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2OrdersStickersPdfPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\RequestBodyStickers**](../Model/RequestBodyStickers.md)|  | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2OrdersStickersPost**
> \Wildberries\Client\Model\InlineResponse20028 apiV2OrdersStickersPost($body)

Cписок этикеток сборочных заданий

Возвращает список QR этикеток по переданному массиву сборочных заданий. <h3>Ограничения при работе с методом.</h3> <ol>   <li>Нельзя запросить больше 1000 этикеток за раз (не более 1000 ID заказов в запросе).</li>   <li>Метод возвращает этикетки только для заказов, взятых в работу (в статусе 1 и дальше).</li> <ol>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\RequestBodyStickers(); // \Wildberries\Client\Model\RequestBodyStickers | 

try {
    $result = $apiInstance->apiV2OrdersStickersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2OrdersStickersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\RequestBodyStickers**](../Model/RequestBodyStickers.md)|  | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2StocksDelete**
> \Wildberries\Client\Model\InlineResponse20025 apiV2StocksDelete($body)

Удаление остатков товара

Удаление остатков товара. <b>Внимание! Действие необратимо</b>. Удаленный остаток будет необходимо загрузить повторно для возобновления продаж.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Wildberries\Client\Model\V2StocksBody1()); // \Wildberries\Client\Model\V2StocksBody1[] | 

try {
    $result = $apiInstance->apiV2StocksDelete($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2StocksDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\V2StocksBody1[]**](../Model/V2StocksBody1.md)|  |

### Return type

[**\Wildberries\Client\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2StocksGet**
> \Wildberries\Client\Model\InlineResponse20023 apiV2StocksGet($skip, $take, $search)

Список товаров с остатками

Возвращает список товаров поставщика с их остатками.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$skip = 56; // int | Сколько записей пропустить (для пагинации).
$take = 56; // int | Сколько записей выдать (для пагинации).
$search = "search_example"; // string | Поиск по всем полям таблицы.

try {
    $result = $apiInstance->apiV2StocksGet($skip, $take, $search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2StocksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **skip** | **int**| Сколько записей пропустить (для пагинации). |
 **take** | **int**| Сколько записей выдать (для пагинации). |
 **search** | **string**| Поиск по всем полям таблицы. | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2StocksPost**
> \Wildberries\Client\Model\InlineResponse20024 apiV2StocksPost($body)

Обновление остатков товара

Обновление остатков товара.  <br> За раз можно загрузить `1000` строк.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Wildberries\Client\Model\V2StocksBody()); // \Wildberries\Client\Model\V2StocksBody[] | 

try {
    $result = $apiInstance->apiV2StocksPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2StocksPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\V2StocksBody[]**](../Model/V2StocksBody.md)|  |

### Return type

[**\Wildberries\Client\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2SuppliesGet**
> \Wildberries\Client\Model\InlineResponse20020 apiV2SuppliesGet($status)

Список поставок

Список поставок.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | `ACTIVE` - активные поставки, `ON_DELIVERY` - поставки в пути (которые ещё не приняты на складе).

try {
    $result = $apiInstance->apiV2SuppliesGet($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2SuppliesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| &#x60;ACTIVE&#x60; - активные поставки, &#x60;ON_DELIVERY&#x60; - поставки в пути (которые ещё не приняты на складе). |

### Return type

[**\Wildberries\Client\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2SuppliesIdBarcodeGet**
> \Wildberries\Client\Model\InlineResponse20021 apiV2SuppliesIdBarcodeGet($type, $id)

Штрихкод поставки в заданном формате

Возвращает штрихкод поставки в заданном формате: <b>pdf</b> или <b>svg</b>. <br> Штрихкод генерируется в формате <b>code-128</b>. <br> Массив байтов передаётся закодированным в <b>base64</b>.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Формат штрихкода.
$id = "id_example"; // string | Идентификатор поставки.

try {
    $result = $apiInstance->apiV2SuppliesIdBarcodeGet($type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2SuppliesIdBarcodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Формат штрихкода. |
 **id** | **string**| Идентификатор поставки. |

### Return type

[**\Wildberries\Client\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2SuppliesIdClosePost**
> apiV2SuppliesIdClosePost($id)

Закрытие поставки

Закрывает поставку. <br> Для закрытия поставки требуется хотя бы один закреплённый за ней заказ. <br> После закрытия к поставке нельзя будет добавить новые заказы.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Идентификатор поставки.

try {
    $apiInstance->apiV2SuppliesIdClosePost($id);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2SuppliesIdClosePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор поставки. |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2SuppliesIdOrdersGet**
> \Wildberries\Client\Model\InlineResponse20022 apiV2SuppliesIdOrdersGet($id)

Список заказов, закреплённых за поставкой

Список заказов, закреплённых за поставкой.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Идентификатор поставки.

try {
    $result = $apiInstance->apiV2SuppliesIdOrdersGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2SuppliesIdOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор поставки. |

### Return type

[**\Wildberries\Client\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2SuppliesIdPut**
> apiV2SuppliesIdPut($id, $body)

Добавление к поставке заказов

Добавляет к поставке заказы и переводит их в статус 1 (\"В сборке\").

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Идентификатор поставки.
$body = new \Wildberries\Client\Model\SuppliesIdBody(); // \Wildberries\Client\Model\SuppliesIdBody | 

try {
    $apiInstance->apiV2SuppliesIdPut($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2SuppliesIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Идентификатор поставки. |
 **body** | [**\Wildberries\Client\Model\SuppliesIdBody**](../Model/SuppliesIdBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV2SuppliesPost**
> \Wildberries\Client\Model\InlineResponse201 apiV2SuppliesPost()

Новая поставка

Создание новой поставки. <br> <br> Ограничения работы с поставками: <ul>   <li>При добавлении в поставку все заказы в статусе <b>0 (новый)</b> будут автоматически переведены в статус <b>1 (в работе)</b>.</li>   <li>Вы можете как обычно переводить статусы вручную отдельными вызовами на <b>PUT /api/v2/orders</b>.</li>   <li>Обратите внимание, что если вы переведёте заказ в статус <b>3 (\"Отмена\")</b>, то заказ автоматически удалится из поставки, если был прикреплён к ней.</li> </ul> Порядок работы: <ol>   <li>Создайте новую поставку с помощью метода <b>POST /api/v2/supplies</b>. В ответ вернется идентификатор созданной поставки в формате <b>\"WB-GI-1234567\"</b>.</li>   <li>Штрихкод поставки можно получить методом <b>GET /api/v2/supplies/{id поставки}/barcode</b> в формате <b>pdf</b> или <b>svg</b>. Штрихкод генерируется в формате code-128. Файл приходит в массиве байтов, закодированном в base64.</li>   <li>В текущую открытую поставку нужно добавить заказы, которые вы повезёте на склад, методом <b>PUT /api/v2/supplies/{id поставки}</b>. Обратите внимание, что при добавлении заказов к поставке они будут автоматически приняты в работу, т.е. переведены в статус 1.</li>   <li>После добавления заказов к поставке, вы можете получить этикетки с помощью метода <b>POST /api/v2/orders/stickers</b>. Обратите внимание, что стикеры для заказа можно получить только в промежуток между открытием и закрытием соответствующей поставки.</li>   <li>После того как поставка будет упомплектована нужными заказами, необходимо ее закрыть с помощью метода <b>POST /api/v2/supplies/{id поставки}/close</b>.</li>   <li>Заказы, добавленные к поставке, можно получить методом <b>GET /api/v2/supplies/{id поставки}/orders</b>.</li>   <li>Все активные поставки, а также поставки в пути, можно получить методом <b>GET /api/v2/supplies</b>.</li> </ol>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\MarketplaceDeprecatedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2SuppliesPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceDeprecatedApi->apiV2SuppliesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wildberries\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

