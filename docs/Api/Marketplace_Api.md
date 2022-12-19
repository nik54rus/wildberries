# Wildberries\Client\Marketplace_Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV2WarehousesGet**](Marketplace_Api.md#apiv2warehousesget) | **GET** /api/v2/warehouses | Cписок складов
[**apiV3OrdersGet**](Marketplace_Api.md#apiv3ordersget) | **GET** /api/v3/orders | Получить информацию по сборочным заданиям
[**apiV3OrdersNewGet**](Marketplace_Api.md#apiv3ordersnewget) | **GET** /api/v3/orders/new | Получить список новых сборочных заданий
[**apiV3OrdersOrderCancelPatch**](Marketplace_Api.md#apiv3ordersordercancelpatch) | **PATCH** /api/v3/orders/{order}/cancel | Отменить сборочное задание
[**apiV3OrdersOrderMetaSgtinPost**](Marketplace_Api.md#apiv3ordersordermetasgtinpost) | **POST** /api/v3/orders/{order}/meta/sgtin | Закрепить за сборочным заданием КиЗ (маркировку Честного знака)
[**apiV3OrdersStatusPost**](Marketplace_Api.md#apiv3ordersstatuspost) | **POST** /api/v3/orders/status | Получить статусы сборочных заданий
[**apiV3OrdersStickersPost**](Marketplace_Api.md#apiv3ordersstickerspost) | **POST** /api/v3/orders/stickers | Получить этикетки для сборочных заданий
[**apiV3StocksWarehouseDelete**](Marketplace_Api.md#apiv3stockswarehousedelete) | **DELETE** /api/v3/stocks/{warehouse} | Удалить остатки товаров
[**apiV3StocksWarehousePost**](Marketplace_Api.md#apiv3stockswarehousepost) | **POST** /api/v3/stocks/{warehouse} | Получить остатки товаров
[**apiV3StocksWarehousePut**](Marketplace_Api.md#apiv3stockswarehouseput) | **PUT** /api/v3/stocks/{warehouse} | Обновить остатки товаров
[**apiV3SuppliesGet**](Marketplace_Api.md#apiv3suppliesget) | **GET** /api/v3/supplies | Получить список поставок
[**apiV3SuppliesOrdersReshipmentGet**](Marketplace_Api.md#apiv3suppliesordersreshipmentget) | **GET** /api/v3/supplies/orders/reshipment | Получить все сборочные задания на повторную отгрузку
[**apiV3SuppliesPost**](Marketplace_Api.md#apiv3suppliespost) | **POST** /api/v3/supplies | Создать новую поставку
[**apiV3SuppliesSupplyBarcodeGet**](Marketplace_Api.md#apiv3suppliessupplybarcodeget) | **GET** /api/v3/supplies/{supply}/barcode | Получить QR поставки
[**apiV3SuppliesSupplyDelete**](Marketplace_Api.md#apiv3suppliessupplydelete) | **DELETE** /api/v3/supplies/{supply} | Удалить поставку
[**apiV3SuppliesSupplyDeliverPatch**](Marketplace_Api.md#apiv3suppliessupplydeliverpatch) | **PATCH** /api/v3/supplies/{supply}/deliver | Передать поставку в доставку
[**apiV3SuppliesSupplyGet**](Marketplace_Api.md#apiv3suppliessupplyget) | **GET** /api/v3/supplies/{supply} | Получить информацию о поставке
[**apiV3SuppliesSupplyOrdersGet**](Marketplace_Api.md#apiv3suppliessupplyordersget) | **GET** /api/v3/supplies/{supply}/orders | Получить сборочные задания в поставке
[**apiV3SuppliesSupplyOrdersOrderPatch**](Marketplace_Api.md#apiv3suppliessupplyordersorderpatch) | **PATCH** /api/v3/supplies/{supply}/orders/{order} | Добавить к поставке сборочное задание

# **apiV2WarehousesGet**
> \Wildberries\Client\Model\InlineResponse20026[] apiV2WarehousesGet()

Cписок складов

Cписок складов поставщика.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV2WarehousesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV2WarehousesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wildberries\Client\Model\InlineResponse20026[]**](../Model/InlineResponse20026.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3OrdersGet**
> \Wildberries\Client\Model\InlineResponse20036 apiV3OrdersGet($limit, $next, $date_from, $date_to)

Получить информацию по сборочным заданиям

Возвращает информацию по сборочным заданиям без их актуального статуса.  Данные по сборочному заданию, возвращающиеся в данном методе, не меняются. Рекомендуется использовать для получения исторических данных.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Параметр пагинации. Устанавливает предельное количество возвращаемых данных.
$next = 789; // int | Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе.
$date_from = 56; // int | Дата начала периода в формате Unix timestamp. Необязательный параметр.
$date_to = 56; // int | Дата конца периода в формате Unix timestamp. Необязательный параметр.

try {
    $result = $apiInstance->apiV3OrdersGet($limit, $next, $date_from, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3OrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Параметр пагинации. Устанавливает предельное количество возвращаемых данных. |
 **next** | **int**| Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. |
 **date_from** | **int**| Дата начала периода в формате Unix timestamp. Необязательный параметр. | [optional]
 **date_to** | **int**| Дата конца периода в формате Unix timestamp. Необязательный параметр. | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3OrdersNewGet**
> \Wildberries\Client\Model\InlineResponse20037 apiV3OrdersNewGet()

Получить список новых сборочных заданий

Возвращает список всех новых сборочных заданий у поставщика на данный момент.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV3OrdersNewGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3OrdersNewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wildberries\Client\Model\InlineResponse20037**](../Model/InlineResponse20037.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3OrdersOrderCancelPatch**
> apiV3OrdersOrderCancelPatch($order)

Отменить сборочное задание

Переводит сборочное задание в статус **cancel** (\"Отменено поставщиком\").

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = 789; // int | Идентификатор сборочного задания

try {
    $apiInstance->apiV3OrdersOrderCancelPatch($order);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3OrdersOrderCancelPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **int**| Идентификатор сборочного задания |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3OrdersOrderMetaSgtinPost**
> apiV3OrdersOrderMetaSgtinPost($order, $body)

Закрепить за сборочным заданием КиЗ (маркировку Честного знака)

Закрепляет за сборочным заданием КиЗ (маркировку Честного знака).   На данный момент требуется только для фармацевтической продукции.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = 789; // int | Идентификатор сборочного задания
$body = new \Wildberries\Client\Model\MetaSgtinBody(); // \Wildberries\Client\Model\MetaSgtinBody | 

try {
    $apiInstance->apiV3OrdersOrderMetaSgtinPost($order, $body);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3OrdersOrderMetaSgtinPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | **int**| Идентификатор сборочного задания |
 **body** | [**\Wildberries\Client\Model\MetaSgtinBody**](../Model/MetaSgtinBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3OrdersStatusPost**
> \Wildberries\Client\Model\InlineResponse20035 apiV3OrdersStatusPost($body)

Получить статусы сборочных заданий

Возвращает статусы сборочных заданий по переданному списку идентификаторов сборочных заданий.  **supplierStatus** - статус сборочного задания, триггером изменения которого является сам поставщик.<br> Возможны следующие значения данного поля: | Статус   | Описание            | Поддерживаемый тип сборочного задания |   Как перевести сборочное задание в данный статус | | -------  | ---------           | ------------------------  | --------------------------------------| | new      | Новое сборочное задание         | dbs / fbs                 |  | confirm  | На сборке            | dbs / fbs                 | Для dbs - **PATCH** *_/api/v3/orders/{order}/confirm* <br> Для fbs - при добавлении сборочного задания к поставке **PATCH** *_/api/v3/supplies/{supply}/orders/{order}* | complete | В доставке           | fbs                       | При переводе в доставку соответствующей поставки **PATCH** *_/api/v3/supplies/{supply}/deliver* | cancel   | Отменено поставщиком | dbs / fbs                 | **PATCH** *_/api/v3/orders/{order}/cancel* | deliver  | В доставке           | dbs                       | **PATCH** *_/api/v3/orders/{order}/deliver* | receive  | Получено клиентом    | dbs                       | **PATCH** *_/api/v3/orders/{order}/receive* | reject   | Отказ при получении  | dbs                       | **PATCH** *_/api/v3/orders/{order}/reject*   **wbStatus** - статус сборочного задания в системе Wildberries.<br> Возможны следующие значения данного поля: - **waiting** - сборочное задание в работе - **sorted** - сборочное задание отсортировано - **sold** - сборочное задание получено клиентом - **canceled** - отмена сборочного задания - **canceled_by_client** - отмена сборочного задания клиентом

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\OrdersStatusBody(); // \Wildberries\Client\Model\OrdersStatusBody | 

try {
    $result = $apiInstance->apiV3OrdersStatusPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3OrdersStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\OrdersStatusBody**](../Model/OrdersStatusBody.md)|  | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3OrdersStickersPost**
> \Wildberries\Client\Model\InlineResponse20038 apiV3OrdersStickersPost($type, $width, $height, $body)

Получить этикетки для сборочных заданий

Возвращает список этикеток по переданному массиву сборочных заданий. Можно запросить этикетку в формате svg, zplv (вертикальный), zplh (горизонтальный), png.  **Ограничения при работе с методом**: - Нельзя запросить больше 100 этикеток за раз (не более 100 идентификаторов сборочных заданий в запросе). - Метод возвращает этикетки только для сборочных заданий, находящихся на сборке (в статусе **confirm**). - Доступные размеры: 58x40 и 40x30.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = "type_example"; // string | Тип этикетки
$width = 56; // int | Ширина этикетки
$height = 56; // int | Высота этикетки
$body = new \Wildberries\Client\Model\OrdersStickersBody(); // \Wildberries\Client\Model\OrdersStickersBody | 

try {
    $result = $apiInstance->apiV3OrdersStickersPost($type, $width, $height, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3OrdersStickersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Тип этикетки |
 **width** | **int**| Ширина этикетки |
 **height** | **int**| Высота этикетки |
 **body** | [**\Wildberries\Client\Model\OrdersStickersBody**](../Model/OrdersStickersBody.md)|  | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3StocksWarehouseDelete**
> apiV3StocksWarehouseDelete($body, $warehouse)

Удалить остатки товаров

Удаляет остатки товаров. **Внимание! Действие необратимо**. Удаленный остаток будет необходимо загрузить повторно для возобновления продаж.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\StocksWarehouseBody2(); // \Wildberries\Client\Model\StocksWarehouseBody2 | 
$warehouse = 56; // int | Идентификатор склада поставщика

try {
    $apiInstance->apiV3StocksWarehouseDelete($body, $warehouse);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3StocksWarehouseDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\StocksWarehouseBody2**](../Model/StocksWarehouseBody2.md)|  |
 **warehouse** | **int**| Идентификатор склада поставщика |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3StocksWarehousePost**
> \Wildberries\Client\Model\InlineResponse20030 apiV3StocksWarehousePost($body, $warehouse)

Получить остатки товаров

Возвращает остатки товаров.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\StocksWarehouseBody1(); // \Wildberries\Client\Model\StocksWarehouseBody1 | 
$warehouse = 56; // int | Идентификатор склада поставщика

try {
    $result = $apiInstance->apiV3StocksWarehousePost($body, $warehouse);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3StocksWarehousePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\StocksWarehouseBody1**](../Model/StocksWarehouseBody1.md)|  |
 **warehouse** | **int**| Идентификатор склада поставщика |

### Return type

[**\Wildberries\Client\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3StocksWarehousePut**
> apiV3StocksWarehousePut($body, $warehouse)

Обновить остатки товаров

Обновляет остатки товаров.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\StocksWarehouseBody(); // \Wildberries\Client\Model\StocksWarehouseBody | 
$warehouse = 56; // int | Идентификатор склада поставщика

try {
    $apiInstance->apiV3StocksWarehousePut($body, $warehouse);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3StocksWarehousePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\StocksWarehouseBody**](../Model/StocksWarehouseBody.md)|  |
 **warehouse** | **int**| Идентификатор склада поставщика |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesGet**
> \Wildberries\Client\Model\InlineResponse20031 apiV3SuppliesGet($limit, $next)

Получить список поставок

Возвращает список поставок

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Параметр пагинации. Устанавливает предельное количество возвращаемых данных.
$next = 789; // int | Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе.

try {
    $result = $apiInstance->apiV3SuppliesGet($limit, $next);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Параметр пагинации. Устанавливает предельное количество возвращаемых данных. |
 **next** | **int**| Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. |

### Return type

[**\Wildberries\Client\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesOrdersReshipmentGet**
> \Wildberries\Client\Model\InlineResponse20033 apiV3SuppliesOrdersReshipmentGet()

Получить все сборочные задания на повторную отгрузку

Возвращает все сборочные задания, требующие повторной отгрузки.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiV3SuppliesOrdersReshipmentGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesOrdersReshipmentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wildberries\Client\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesPost**
> \Wildberries\Client\Model\InlineResponse2011 apiV3SuppliesPost($body)

Создать новую поставку

**Ограничения работы с поставками**:  - Только для сборочных заданий по схеме \"Везу на склад WB\" - При добавлении в поставку все передаваемые сборочные задания в статусе **new** (\"Новое\") будут автоматически переведены в статус **confirm** (\"На сборке\"). - Обратите внимание, что если вы переведёте сборочное задание в статус **cancel** (\"Отмена поставщиком\"), то сборочное задание автоматически удалится из поставки, если было прикреплено к ней. - Поставку можно собрать только из одного типа сборочных заданий: сКГТ (isLargeCargo = true) или обычный (isLargeCargo = false). Новая поставка не обладает сКГТ-признаком. При добавлении первого заказа в поставку она приобретает сКГТ-признак добавляемого товара в заказе.  **Порядок работы**:  1. Создайте новую поставку с помощью метода **POST** *_/api/v3/supplies.* В ответ вернется идентификатор созданной поставки в формате \"WB-GI-1234567\". 2. В текущую новую поставку нужно добавить сборочные задания, которые вы повезёте на склад, методом **PATCH** *_/api/v3/supplies/{id поставки}/orders/{id сборочного задания}*. Обратите внимание, что при добавлении сборочных заданий к поставке они будут переведены в статус **confirm** (\"На сборке\"). 3. После добавления сборочных заданий к поставке вы можете получить этикетки с помощью метода **POST** *_/api/v3/orders/stickers*. Обратите внимание, что этикетки для сборочных заданий можно получить только тогда, когда они в статусе **confirm** (\"На сборке\"). 4. После того как поставка будет упомплектована нужными сборочными заданиями, необходимо ее передать в доставку с помощью метода **PATCH** *_/api/v3/supplies/{id поставки}/deliver*. Обратите внимание, что при передаче сборочных заданий в доставку они будут автоматически собраны, т.е. переведены в статус **complete** (\"В доставке\"). 5. Список сборочных заданий, добавленных к поставке, можно получить методом **GET** *_/api/v3/supplies/{id поставки}/orders*. 6. Все поставки, имеющиеся у поставщика, можно получить методом **GET** *_/api/v3/supplies*. 7. Детализацию конкретной поставки можно получить методом **GET** *_/api/v3/supplies/{id поставки}*. 8. С помощью метода **DELETE** *_/api/v3/supplies/{id поставки}* можно удалить поставку при условии, что она активна и за ней не закреплено ни одно сборочное задание. 9. Если поставка была отсканирована в пункте приёмки, но при этом в ней имеются ещё неотсканированные товары, то спустя определенное время необходимо доставить их повторно.   Все сборочные задания, требующие повторной отгрузки на данный момент, можно получить с помощью метода **GET** *_/api/v3/supplies/orders/reshipment*.    При помощи метода **PATCH** *_/api/v3/supplies/{id поставки}/orders/{id сборочного задания}* данные сборочные задания можно перевести в другую активную поставку (сборочное задание также будет переведено в статус **confirm** (\"На сборке\")). 10. Метод **PATCH** *_/api/v3/supplies/{id поставки}/orders/{id сборочного задания}* также позволяет перемещать сборочные задания между активными поставками. Обратите внимание, что нельзя перемещать сборочное задание из уже закрытой поставки, только если оно не требует повторной отгрузки. 11. QR-код поставки можно получить методом **GET** *_/api/v3/supplies/{id поставки}/barcode* в формате svg, zpl или png. Доступно только после передачи поставки в доставку.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\V3SuppliesBody(); // \Wildberries\Client\Model\V3SuppliesBody | 

try {
    $result = $apiInstance->apiV3SuppliesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\V3SuppliesBody**](../Model/V3SuppliesBody.md)|  |

### Return type

[**\Wildberries\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesSupplyBarcodeGet**
> \Wildberries\Client\Model\InlineResponse20034 apiV3SuppliesSupplyBarcodeGet($supply, $type, $width, $height)

Получить QR поставки

Возвращает QR в svg, zplv (вертикальный), zplh (горизонтальный), png. <br> Можно получить, только если поставка передана в доставку. <br> Доступные размеры: 58х40 и 40х30.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply = "supply_example"; // string | Идентификатор поставки
$type = "type_example"; // string | Тип этикетки
$width = 56; // int | Ширина этикетки
$height = 56; // int | Высота этикетки

try {
    $result = $apiInstance->apiV3SuppliesSupplyBarcodeGet($supply, $type, $width, $height);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesSupplyBarcodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supply** | **string**| Идентификатор поставки |
 **type** | **string**| Тип этикетки |
 **width** | **int**| Ширина этикетки |
 **height** | **int**| Высота этикетки |

### Return type

[**\Wildberries\Client\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesSupplyDelete**
> apiV3SuppliesSupplyDelete($supply)

Удалить поставку

Удаляет поставку, если она активна и за ней не закреплено ни одно сборочное задание.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply = "supply_example"; // string | Идентификатор поставки

try {
    $apiInstance->apiV3SuppliesSupplyDelete($supply);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesSupplyDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supply** | **string**| Идентификатор поставки |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesSupplyDeliverPatch**
> apiV3SuppliesSupplyDeliverPatch($supply)

Передать поставку в доставку

Закрывает поставку и переводит все сборочные задания в ней в статус **complete** (\"В доставке\"). После закрытия поставки новые сборочные задания к ней добавить будет невозможно. Передать поставку в доставку можно только при наличии в ней хотя бы одного сборочного задания.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply = "supply_example"; // string | Идентификатор поставки

try {
    $apiInstance->apiV3SuppliesSupplyDeliverPatch($supply);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesSupplyDeliverPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supply** | **string**| Идентификатор поставки |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesSupplyGet**
> \Wildberries\Client\Model\Supply apiV3SuppliesSupplyGet($supply)

Получить информацию о поставке

Возвращает информацию о поставке

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply = "supply_example"; // string | Идентификатор поставки

try {
    $result = $apiInstance->apiV3SuppliesSupplyGet($supply);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesSupplyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supply** | **string**| Идентификатор поставки |

### Return type

[**\Wildberries\Client\Model\Supply**](../Model/Supply.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesSupplyOrdersGet**
> \Wildberries\Client\Model\InlineResponse20032 apiV3SuppliesSupplyOrdersGet($supply)

Получить сборочные задания в поставке

Возвращает сборочные задания, закреплённые за поставкой.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply = "supply_example"; // string | Идентификатор поставки

try {
    $result = $apiInstance->apiV3SuppliesSupplyOrdersGet($supply);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesSupplyOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supply** | **string**| Идентификатор поставки |

### Return type

[**\Wildberries\Client\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV3SuppliesSupplyOrdersOrderPatch**
> apiV3SuppliesSupplyOrdersOrderPatch($supply, $order)

Добавить к поставке сборочное задание

Добавляет к поставке сборочное задание и переводит его в статус **confirm** (\"На сборке\").  Также может перемещать сборочное задание между активными поставками, либо из закрытой в активную при условии, что сборочное задание требует повторной отгрузки. Добавить в поставку возможно только задания с соответствующим сКГТ-признаком (isLargeCargo), либо если поставке ещё не присвоен сКГТ-признак (isLargeCargo = null).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\Marketplace_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$supply = "supply_example"; // string | Идентификатор поставки
$order = 789; // int | Идентификатор сборочного задания

try {
    $apiInstance->apiV3SuppliesSupplyOrdersOrderPatch($supply, $order);
} catch (Exception $e) {
    echo 'Exception when calling Marketplace_Api->apiV3SuppliesSupplyOrdersOrderPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **supply** | **string**| Идентификатор поставки |
 **order** | **int**| Идентификатор сборочного задания |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

