# Wildberries\Client\DefaultApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**advV0AdvertGet**](DefaultApi.md#advv0advertget) | **GET** /adv/v0/advert | Информация о РК
[**advV0AdvertsGet**](DefaultApi.md#advv0advertsget) | **GET** /adv/v0/adverts | Список РК
[**advV0CountGet**](DefaultApi.md#advv0countget) | **GET** /adv/v0/count | Получение РК
[**advV0CpmGet**](DefaultApi.md#advv0cpmget) | **GET** /adv/v0/cpm | Список ставок
[**advV0CpmPost**](DefaultApi.md#advv0cpmpost) | **POST** /adv/v0/cpm | Изменение ставки у РК
[**advV0PauseGet**](DefaultApi.md#advv0pauseget) | **GET** /adv/v0/pause | Пауза РК
[**advV0StartGet**](DefaultApi.md#advv0startget) | **GET** /adv/v0/start | Запуск РК
[**apiV1SupplierExciseGoodsGet**](DefaultApi.md#apiv1supplierexcisegoodsget) | **GET** /api/v1/supplier/excise-goods | Отчет по КиЗам
[**apiV1SupplierIncomesGet**](DefaultApi.md#apiv1supplierincomesget) | **GET** /api/v1/supplier/incomes | Поставки
[**apiV1SupplierOrdersGet**](DefaultApi.md#apiv1supplierordersget) | **GET** /api/v1/supplier/orders | Заказы
[**apiV1SupplierReportDetailByPeriodGet**](DefaultApi.md#apiv1supplierreportdetailbyperiodget) | **GET** /api/v1/supplier/reportDetailByPeriod | Отчет о продажах по реализации
[**apiV1SupplierSalesGet**](DefaultApi.md#apiv1suppliersalesget) | **GET** /api/v1/supplier/sales | Продажи
[**apiV1SupplierStocksGet**](DefaultApi.md#apiv1supplierstocksget) | **GET** /api/v1/supplier/stocks | Склад
[**publicApiV1InfoGet**](DefaultApi.md#publicapiv1infoget) | **GET** /public/api/v1/info | Получение информации о ценах.
[**publicApiV1PricesPost**](DefaultApi.md#publicapiv1pricespost) | **POST** /public/api/v1/prices | Загрузка цен

# **advV0AdvertGet**
> \Wildberries\Client\Model\InlineResponse20041 advV0AdvertGet($id)

Информация о РК

Получение информации об одной РК

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор РК

try {
    $result = $apiInstance->advV0AdvertGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0AdvertGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор РК |

### Return type

[**\Wildberries\Client\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advV0AdvertsGet**
> \Wildberries\Client\Model\InlineResponse20040[] advV0AdvertsGet($status, $type, $limit, $offset, $order, $direction)

Список РК

Получение списка РК поставщика

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = 56; // int | <dl> <dt>Статус РК:</dt> <dd><code>9</code> - идут показы</dd> <dd><code>11</code> - РК на паузе</dd> </dl>
$type = 56; // int | <dl> <dt>Тип РК:</dt> <dd><code>4</code> - реклама в каталоге</dd> <dd><code>5</code> - реклама в карточке товара</dd> <dd><code>6</code> - реклама в поиске</dd> <dd><code>7</code> - реклама в рекомендациях на главной странице</dd> </dl>
$limit = 56; // int | Количество кампаний в ответе
$offset = 56; // int | Смещение относительно первой РК
$order = "order_example"; // string | <dl> <dt>Порядок:</dt> <dd><code>create</code> (по времени создания РК)</dd> <dd><code>change</code> (по времени последнего изменения РК)</dd> <dd><code>id</code> (по идентификатору РК)</dd> </dl> <br>Например: <code>**_/api/v0/adverts?type=6&limit=5&offset=10&<b>order=change</b>&direction=asc**</code>
$direction = "direction_example"; // string | <dl> <dt>Направление:</dt> <dd><code>desc</code> (от большего к меньшему)</dd> <dd><code>asc</code> (от меньшего к большему)</dd> </dl> <br>Например: <code>**_/api/v0/adverts?type=6&limit=5&offset=10&order=change&<b>direction=asc</b>**</code>

try {
    $result = $apiInstance->advV0AdvertsGet($status, $type, $limit, $offset, $order, $direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0AdvertsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **int**| &lt;dl&gt; &lt;dt&gt;Статус РК:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;9&lt;/code&gt; - идут показы&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;11&lt;/code&gt; - РК на паузе&lt;/dd&gt; &lt;/dl&gt; | [optional]
 **type** | **int**| &lt;dl&gt; &lt;dt&gt;Тип РК:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - реклама в каталоге&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;5&lt;/code&gt; - реклама в карточке товара&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;6&lt;/code&gt; - реклама в поиске&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - реклама в рекомендациях на главной странице&lt;/dd&gt; &lt;/dl&gt; | [optional]
 **limit** | **int**| Количество кампаний в ответе | [optional]
 **offset** | **int**| Смещение относительно первой РК | [optional]
 **order** | **string**| &lt;dl&gt; &lt;dt&gt;Порядок:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;create&lt;/code&gt; (по времени создания РК)&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;change&lt;/code&gt; (по времени последнего изменения РК)&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;id&lt;/code&gt; (по идентификатору РК)&lt;/dd&gt; &lt;/dl&gt; &lt;br&gt;Например: &lt;code&gt;**_/api/v0/adverts?type&#x3D;6&amp;limit&#x3D;5&amp;offset&#x3D;10&amp;&lt;b&gt;order&#x3D;change&lt;/b&gt;&amp;direction&#x3D;asc**&lt;/code&gt; | [optional]
 **direction** | **string**| &lt;dl&gt; &lt;dt&gt;Направление:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;desc&lt;/code&gt; (от большего к меньшему)&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;asc&lt;/code&gt; (от меньшего к большему)&lt;/dd&gt; &lt;/dl&gt; &lt;br&gt;Например: &lt;code&gt;**_/api/v0/adverts?type&#x3D;6&amp;limit&#x3D;5&amp;offset&#x3D;10&amp;order&#x3D;change&amp;&lt;b&gt;direction&#x3D;asc&lt;/b&gt;**&lt;/code&gt; | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse20040[]**](../Model/InlineResponse20040.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advV0CountGet**
> \Wildberries\Client\Model\InlineResponse20039 advV0CountGet()

Получение РК

Получение количества рекламных кампаний (РК) поставщика

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->advV0CountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CountGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Wildberries\Client\Model\InlineResponse20039**](../Model/InlineResponse20039.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advV0CpmGet**
> \Wildberries\Client\Model\InlineResponse20042[] advV0CpmGet($type, $param)

Список ставок

Получение списка ставок для типа размещения

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 56; // int | <dl> <dt>Тип РК:</dt> <dd><code>4</code> - реклама в каталоге</dd> <dd><code>5</code> - реклама в карточке товара</dd> <dd><code>6</code> - реклама в поиске</dd> <dd><code>7</code> - реклама в рекомендациях на главной странице</dd> </dl>
$param = 56; // int | Параметр запроса, по которому будет получен список ставок активных РК. <br>Должен быть значением `menuId`, `subjectId` или `setId` в зависимости от типа РК.

try {
    $result = $apiInstance->advV0CpmGet($type, $param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CpmGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **int**| &lt;dl&gt; &lt;dt&gt;Тип РК:&lt;/dt&gt; &lt;dd&gt;&lt;code&gt;4&lt;/code&gt; - реклама в каталоге&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;5&lt;/code&gt; - реклама в карточке товара&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;6&lt;/code&gt; - реклама в поиске&lt;/dd&gt; &lt;dd&gt;&lt;code&gt;7&lt;/code&gt; - реклама в рекомендациях на главной странице&lt;/dd&gt; &lt;/dl&gt; |
 **param** | **int**| Параметр запроса, по которому будет получен список ставок активных РК. &lt;br&gt;Должен быть значением &#x60;menuId&#x60;, &#x60;subjectId&#x60; или &#x60;setId&#x60; в зависимости от типа РК. |

### Return type

[**\Wildberries\Client\Model\InlineResponse20042[]**](../Model/InlineResponse20042.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advV0CpmPost**
> advV0CpmPost($body)

Изменение ставки у РК

Изменение ставки у рекламной кампании <br>Доступно для РК в карточке товара, поиске или рекомендациях

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Wildberries\Client\Model\V0CpmBody(); // \Wildberries\Client\Model\V0CpmBody | 

try {
    $apiInstance->advV0CpmPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0CpmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\V0CpmBody**](../Model/V0CpmBody.md)|  |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advV0PauseGet**
> advV0PauseGet($id)

Пауза РК

РК в статусе <b>\"9 - идут показы\"</b> - можно запаузить, сделав <b>GET</b> на  `/api/v0/pause?id=***`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор РК

try {
    $apiInstance->advV0PauseGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0PauseGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор РК |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **advV0StartGet**
> advV0StartGet($id)

Запуск РК

РК в статусе <b>\"11 - на паузе\"</b> - можно снова запустить. <br>Для запуска необходимо, чтобы у РК были активные ставки. <br><b>GET</b> на `/api/v0/start?id=***` - в ответ `200`, если статус изменен, или `400`, если это сделать не удалось.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Идентификатор РК

try {
    $apiInstance->advV0StartGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->advV0StartGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Идентификатор РК |

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierExciseGoodsGet**
> \Wildberries\Client\Model\ExcItem[] apiV1SupplierExciseGoodsGet($date_from)

Отчет по КиЗам

Отчет по КиЗам. <br> КИЗ — это контрольный идентификационный знак.  Он представляет собой маркировку, похожую на QR-код, который проставляется на некоторых товарах.  Его можно отсканировать с помощью специального приложения и убедиться в качестве и оригинальности товара.  Сканирование КИЗов доступно как продавцу, так и покупателю, а также всем остальным участникам процесса продажи.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierExciseGoodsGet($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierExciseGoodsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |

### Return type

[**\Wildberries\Client\Model\ExcItem[]**](../Model/ExcItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierIncomesGet**
> \Wildberries\Client\Model\IncomesItem[] apiV1SupplierIncomesGet($date_from)

Поставки

Поставки

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierIncomesGet($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierIncomesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |

### Return type

[**\Wildberries\Client\Model\IncomesItem[]**](../Model/IncomesItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierOrdersGet**
> \Wildberries\Client\Model\OrdersItem[] apiV1SupplierOrdersGet($date_from, $flag)

Заказы

Заказы. <br>  Важно: гарантируется хранение данных по заказам не более 90 дней от даты заказа. Данные обновляются раз в 30 минут.  Точное время обновления информации в сервисе можно увидеть в поле `lastChangeDate`. <br> Для идентификации товаров из одного заказа, а также продаж по ним, следует использовать  поле `gNumber` (строки с одинаковым значением этого поля относятся к одному заказу) и номер  уникальной позиции в заказе `odid` (`rid`).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

try {
    $result = $apiInstance->apiV1SupplierOrdersGet($date_from, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |
 **flag** | **int**| Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. | [optional] [default to 0]

### Return type

[**\Wildberries\Client\Model\OrdersItem[]**](../Model/OrdersItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierReportDetailByPeriodGet**
> \Wildberries\Client\Model\DetailReportItem[] apiV1SupplierReportDetailByPeriodGet($date_from, $date_to, $limit, $rrdid)

Отчет о продажах по реализации

Отчет о продажах по реализации.  <br> В отчете доступны данные за последние 3 месяца. <br> В случае отсутствия данных за указанный период метод вернет `null`. <br> Технический перерыв в работе метода: каждый понедельник с 3:00 до 16:00.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$date_to = new \DateTime("2013-10-20"); // \DateTime | Конечная дата отчета
$limit = 0; // int | Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000.
$rrdid = 56; // int | Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  <br> Загрузку отчета нужно начинать с `rrdid = 0` и при последующих вызовах API передавать в запросе значение `rrd_id` из последней строки, полученной в результате предыдущего вызова.  <br> Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю.

try {
    $result = $apiInstance->apiV1SupplierReportDetailByPeriodGet($date_from, $date_to, $limit, $rrdid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierReportDetailByPeriodGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |
 **date_to** | **\DateTime**| Конечная дата отчета |
 **limit** | **int**| Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000. | [optional] [default to 0]
 **rrdid** | **int**| Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. | [optional]

### Return type

[**\Wildberries\Client\Model\DetailReportItem[]**](../Model/DetailReportItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierSalesGet**
> \Wildberries\Client\Model\SalesItem[] apiV1SupplierSalesGet($date_from, $flag)

Продажи

Продажи. <br> Важно: гарантируется хранение данных по заказам не более 90 дней от даты заказа. Данные обновляются раз в 30 минут. Точное время обновления информации в сервисе можно увидеть в поле `lastChangeDate`. <br> Для идентификации товаров из одного заказа, а также продаж по ним, следует использовать  поле `gNumber` (строки с одинаковым значением этого поля относятся к одному заказу) и номер  уникальной позиции в заказе `odid` (`rid`).  <br> Для расчета окончательной стоимости (суммы к оплате) следует пользоваться следующей формулой: <br> `PriceWithDiscount = totalPrice * ((100 – discountPercent)/100) * ((100 – promoCodeDiscount)/100) *((100 – spp)/100)`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

try {
    $result = $apiInstance->apiV1SupplierSalesGet($date_from, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierSalesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |
 **flag** | **int**| Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. | [optional] [default to 0]

### Return type

[**\Wildberries\Client\Model\SalesItem[]**](../Model/SalesItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierStocksGet**
> \Wildberries\Client\Model\StocksItem[] apiV1SupplierStocksGet($date_from)

Склад

Склад. Данные обновляются раз в сутки. Сервис статистики не хранит историю остатков товаров, поэтому получить данные об остатках товаров на прошедшую, не сегодняшнюю, дату - невозможно.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br>Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>

try {
    $result = $apiInstance->apiV1SupplierStocksGet($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierStocksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |

### Return type

[**\Wildberries\Client\Model\StocksItem[]**](../Model/StocksItem.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicApiV1InfoGet**
> \Wildberries\Client\Model\InlineResponse200 publicApiV1InfoGet($quantity)

Получение информации о ценах.

Получение информации по номенклатурам, их ценам, скидкам и промокодам. Если не указывать фильтры, вернётся весь товар.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quantity** | **int**| &#x60;2&#x60; - товар с нулевым остатком, &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком | [optional]

### Return type

[**\Wildberries\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicApiV1PricesPost**
> publicApiV1PricesPost($body)

Загрузка цен

Загрузка цен. За раз можно загрузить не более 1000 номенклатур.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Wildberries\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Wildberries\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Wildberries\Client\Model\V1PricesBody()); // \Wildberries\Client\Model\V1PricesBody[] | 

try {
    $apiInstance->publicApiV1PricesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publicApiV1PricesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Wildberries\Client\Model\V1PricesBody[]**](../Model/V1PricesBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

