# Swagger\Client\DefaultApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1SupplierExciseGoodsGet**](DefaultApi.md#apiv1supplierexcisegoodsget) | **GET** /api/v1/supplier/excise-goods | Отчет по КиЗам
[**apiV1SupplierIncomesGet**](DefaultApi.md#apiv1supplierincomesget) | **GET** /api/v1/supplier/incomes | Поставки
[**apiV1SupplierOrdersGet**](DefaultApi.md#apiv1supplierordersget) | **GET** /api/v1/supplier/orders | Заказы
[**apiV1SupplierReportDetailByPeriodGet**](DefaultApi.md#apiv1supplierreportdetailbyperiodget) | **GET** /api/v1/supplier/reportDetailByPeriod | Отчет о продажах по реализации
[**apiV1SupplierSalesGet**](DefaultApi.md#apiv1suppliersalesget) | **GET** /api/v1/supplier/sales | Продажи
[**apiV1SupplierStocksGet**](DefaultApi.md#apiv1supplierstocksget) | **GET** /api/v1/supplier/stocks | Склад
[**publicApiV1InfoGet**](DefaultApi.md#publicapiv1infoget) | **GET** /public/api/v1/info | Получение информации о ценах.
[**publicApiV1PricesPost**](DefaultApi.md#publicapiv1pricespost) | **POST** /public/api/v1/prices | Загрузка цен

# **apiV1SupplierExciseGoodsGet**
> \Swagger\Client\Model\ExcItem[] apiV1SupplierExciseGoodsGet($key, $date_from)

Отчет по КиЗам

Отчет по КиЗам. <br> КИЗ — это контрольный идентификационный знак.  Он представляет собой маркировку, похожую на QR-код, который проставляется на некоторых товарах.  Его можно отсканировать с помощью специального приложения и убедиться в качестве и оригинальности товара.  Сканирование КИЗов доступно как продавцу, так и покупателю, а также всем остальным участникам процесса продажи.

### Example
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». |
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |

### Return type

[**\Swagger\Client\Model\ExcItem[]**](../Model/ExcItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierIncomesGet**
> \Swagger\Client\Model\IncomesItem[] apiV1SupplierIncomesGet($key, $date_from)

Поставки

Поставки

### Example
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
    $result = $apiInstance->apiV1SupplierIncomesGet($key, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierIncomesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». |
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |

### Return type

[**\Swagger\Client\Model\IncomesItem[]**](../Model/IncomesItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierOrdersGet**
> \Swagger\Client\Model\OrdersItem[] apiV1SupplierOrdersGet($key, $date_from, $flag)

Заказы

Заказы. <br>  Важно: гарантируется хранение данных по заказам не более 90 дней от даты заказа. Данные обновляются раз в 30 минут.  Точное время обновления информации в сервисе можно увидеть в поле `lastChangeDate`. <br> Для идентификации товаров из одного заказа, а также продаж по ним, следует использовать  поле `gNumber` (строки с одинаковым значением этого поля относятся к одному заказу) и номер  уникальной позиции в заказе `odid` (`rid`).

### Example
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
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

try {
    $result = $apiInstance->apiV1SupplierOrdersGet($key, $date_from, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierOrdersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». |
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |
 **flag** | **int**| Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\OrdersItem[]**](../Model/OrdersItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierReportDetailByPeriodGet**
> \Swagger\Client\Model\DetailReportItem[] apiV1SupplierReportDetailByPeriodGet($key, $date_from, $date_to, $limit, $rrdid)

Отчет о продажах по реализации

Отчет о продажах по реализации.  <br> В отчете доступны данные за последние 3 месяца. <br> В случае отсутствия данных за указанный период метод вернет `null`. <br> Технический перерыв в работе метода: каждый понедельник с 3:00 до 14:00.

### Example
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
$date_to = new \DateTime("2013-10-20"); // \DateTime | Конечная дата отчета
$limit = 0; // int | Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000.
$rrdid = 56; // int | Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  <br> Загрузку отчета нужно начинать с `rrdid = 0` и при последующих вызовах API передавать в запросе значение `rrd_id` из последней строки, полученной в результате предыдущего вызова.  <br> Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю.

try {
    $result = $apiInstance->apiV1SupplierReportDetailByPeriodGet($key, $date_from, $date_to, $limit, $rrdid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierReportDetailByPeriodGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». |
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |
 **date_to** | **\DateTime**| Конечная дата отчета |
 **limit** | **int**| Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000. | [optional] [default to 0]
 **rrdid** | **int**| Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. | [optional]

### Return type

[**\Swagger\Client\Model\DetailReportItem[]**](../Model/DetailReportItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierSalesGet**
> \Swagger\Client\Model\SalesItem[] apiV1SupplierSalesGet($key, $date_from, $flag)

Продажи

Продажи. <br> Важно: гарантируется хранение данных по заказам не более 90 дней от даты заказа. Данные обновляются раз в 30 минут. Точное время обновления информации в сервисе можно увидеть в поле `lastChangeDate`. <br> Для идентификации товаров из одного заказа, а также продаж по ним, следует использовать  поле `gNumber` (строки с одинаковым значением этого поля относятся к одному заказу) и номер  уникальной позиции в заказе `odid` (`rid`).  <br> Для расчета окончательной стоимости (суммы к оплате) следует пользоваться следующей формулой: <br> `PriceWithDiscount = totalPrice * ((100 – discountPercent)/100) * ((100 – promoCodeDiscount)/100) *((100 – spp)/100)`

### Example
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
$flag = 0; // int | Если параметр `flag=0` (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля `lastChangeDate` (дата время обновления информации в сервисе) больше или равно переданному  значению параметра `dateFrom`.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. <br> Если параметр `flag=1`, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру `dateFrom` (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре `dateFrom`.

try {
    $result = $apiInstance->apiV1SupplierSalesGet($key, $date_from, $flag);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierSalesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». |
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |
 **flag** | **int**| Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. | [optional] [default to 0]

### Return type

[**\Swagger\Client\Model\SalesItem[]**](../Model/SalesItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1SupplierStocksGet**
> \Swagger\Client\Model\StocksItem[] apiV1SupplierStocksGet($key, $date_from)

Склад

Склад. Данные обновляются раз в сутки. Сервис статистики не хранит историю остатков товаров, поэтому получить данные об остатках товаров на прошедшую, не сегодняшнюю, дату - невозможно.

### Example
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
    $result = $apiInstance->apiV1SupplierStocksGet($key, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiV1SupplierStocksGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **string**| Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». |
 **date_from** | **string**| Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; |

### Return type

[**\Swagger\Client\Model\StocksItem[]**](../Model/StocksItem.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicApiV1InfoGet**
> \Swagger\Client\Model\InlineResponse200 publicApiV1InfoGet($quantity)

Получение информации о ценах.

Получение информации по номенклатурам, их ценам, скидкам и промокодам. Если не указывать фильтры, вернётся весь товар.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quantity** | **int**| &#x60;2&#x60; - товар с нулевым остатком, &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

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

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1PricesBody[]**](../Model/V1PricesBody.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

