# Swagger\Client\_Api

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**contentV1BarcodesPost**](_Api.md#contentv1barcodespost) | **POST** /content/v1/barcodes | Генерация баркодов
[**contentV1CardsCursorListPost**](_Api.md#contentv1cardscursorlistpost) | **POST** /content/v1/cards/cursor/list | Список НМ v2
[**contentV1CardsErrorListGet**](_Api.md#contentv1cardserrorlistget) | **GET** /content/v1/cards/error/list | Список несозданных НМ с ошибками
[**contentV1CardsFilterPost**](_Api.md#contentv1cardsfilterpost) | **POST** /content/v1/cards/filter | Получение КТ по вендор кодам (артикулам)
[**contentV1CardsUpdatePost**](_Api.md#contentv1cardsupdatepost) | **POST** /content/v1/cards/update | Редактирование КТ
[**contentV1CardsUploadAddPost**](_Api.md#contentv1cardsuploadaddpost) | **POST** /content/v1/cards/upload/add | Добавление НМ к КТ
[**contentV1CardsUploadPost**](_Api.md#contentv1cardsuploadpost) | **POST** /content/v1/cards/upload | Создание  КТ
[**contentV1DirectoryBrandsGet**](_Api.md#contentv1directorybrandsget) | **GET** /content/v1/directory/brands | Бренд
[**contentV1DirectoryCollectionsGet**](_Api.md#contentv1directorycollectionsget) | **GET** /content/v1/directory/collections | Коллекция
[**contentV1DirectoryColorsGet**](_Api.md#contentv1directorycolorsget) | **GET** /content/v1/directory/colors | Цвет
[**contentV1DirectoryConsistsGet**](_Api.md#contentv1directoryconsistsget) | **GET** /content/v1/directory/consists | Состав
[**contentV1DirectoryContentsGet**](_Api.md#contentv1directorycontentsget) | **GET** /content/v1/directory/contents | Комплектация
[**contentV1DirectoryCountriesGet**](_Api.md#contentv1directorycountriesget) | **GET** /content/v1/directory/countries | Страна Производства
[**contentV1DirectoryKindsGet**](_Api.md#contentv1directorykindsget) | **GET** /content/v1/directory/kinds | Пол
[**contentV1DirectorySeasonsGet**](_Api.md#contentv1directoryseasonsget) | **GET** /content/v1/directory/seasons | Сезон
[**contentV1DirectoryTnvedGet**](_Api.md#contentv1directorytnvedget) | **GET** /content/v1/directory/tnved | ТНВЭД код
[**contentV1MediaFilePost**](_Api.md#contentv1mediafilepost) | **POST** /content/v1/media/file | Добавление медиа контента в КТ
[**contentV1MediaSavePost**](_Api.md#contentv1mediasavepost) | **POST** /content/v1/media/save | Изменение медиа контента КТ
[**contentV1ObjectAllGet**](_Api.md#contentv1objectallget) | **GET** /content/v1/object/all | Категория товаров
[**contentV1ObjectCharacteristicsListFilterGet**](_Api.md#contentv1objectcharacteristicslistfilterget) | **GET** /content/v1/object/characteristics/list/filter | Характеристики для создания КТ по всем подкатегориям
[**contentV1ObjectCharacteristicsObjectNameGet**](_Api.md#contentv1objectcharacteristicsobjectnameget) | **GET** /content/v1/object/characteristics/{objectName} | Характеристики для создания КТ для категории товара
[**contentV1ObjectParentAllGet**](_Api.md#contentv1objectparentallget) | **GET** /content/v1/object/parent/all | Родительские категории товаров
[**publicApiV1RevokeDiscountsPost**](_Api.md#publicapiv1revokediscountspost) | **POST** /public/api/v1/revokeDiscounts | Сброс скидок для номенклатур
[**publicApiV1RevokePromocodesPost**](_Api.md#publicapiv1revokepromocodespost) | **POST** /public/api/v1/revokePromocodes | Сброс промокодов для номенклатур
[**publicApiV1UpdateDiscountsPost**](_Api.md#publicapiv1updatediscountspost) | **POST** /public/api/v1/updateDiscounts | Установка скидок
[**publicApiV1UpdatePromocodesPost**](_Api.md#publicapiv1updatepromocodespost) | **POST** /public/api/v1/updatePromocodes | Установка промокодов для номенклатур

# **contentV1BarcodesPost**
> \Swagger\Client\Model\InlineResponse2006 contentV1BarcodesPost($body)

Генерация баркодов

Метод позволяет сгенерировать массив уникальных баркодов для создания размера НМ в КТ.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\V1BarcodesBody(); // \Swagger\Client\Model\V1BarcodesBody | 

try {
    $result = $apiInstance->contentV1BarcodesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1BarcodesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\V1BarcodesBody**](../Model/V1BarcodesBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1CardsCursorListPost**
> \Swagger\Client\Model\InlineResponse2003 contentV1CardsCursorListPost($body)

Список НМ v2

Метод позволяет получить список созданых НМ по фильтру (баркод, вендор код, номер номенклатуры) с пагинацией и сортировкой. <br> <br>Порядок работы с `cursor/list`: <br> Чтобы получить полный список номенклатур, <b>если их > 1000</b>, необходимо воспользоваться пагинацией.   <ol>     <li>Cделать первый запрос (все указанные ниже параметры обязательны):       <br>       <code>{</code>       <ul>         <l><code>\"sort\": {</code></li>          <ul>             <l><code>\"cursor\": {</code></li>               <ul>                 <l><code>\"limit\": 1000</code></li>               </ul>             <l><code>},</code></li>           </ul>           <ul>             <l><code>\"filter\": {</code></li>               <ul>                 <l><code>\"withPhoto\": -1</code></li>               </ul>             <l><code>}</code></li>           </ul>         <l><code>}</code></li>       </ul>       <code>}</code>       <br>По желанию можно добавить поиск по <code>\"textSearch\"</code> и сортировку.       <br><code>\"sort\": {</code>         <dd><code>\"sortColumn\": \"\",</code></dd>         <dd><code>\"ascending\": false</code></dd>       <code>}</code>     </li>     <li>Пройти в конец полученного списка номенклатур, скопировать из <code>cursor</code> две строки:       <ul>         <li><code>\"updatedAt\": \"***\",</code></li>         <li><code>\"nmID\": ***,</code></li>       </ul>     <li>Вставить скопированные строки в <code>cursor</code> запроса, повторить вызов метода. </li>     <li>Повторять пункты <b>2</b> и <b>3</b>, пока <code>total</code> в ответе не станет меньше чем <code>limit</code> в запросе.       <br>Это будет означать, что Вы получили все карточки.   </ol>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CursorListBody(); // \Swagger\Client\Model\CursorListBody | 

try {
    $result = $apiInstance->contentV1CardsCursorListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1CardsCursorListPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CursorListBody**](../Model/CursorListBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1CardsErrorListGet**
> \Swagger\Client\Model\InlineResponse2004 contentV1CardsErrorListGet()

Список несозданных НМ с ошибками

Метод позволяет получить список НМ и список ошибок которые произошли во время создания КТ. <br>`ВАЖНО`: Для того чтобы убрать НМ из ошибочных, надо повторно сделать запрос с исправленными ошибками на создание КТ.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contentV1CardsErrorListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1CardsErrorListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1CardsFilterPost**
> \Swagger\Client\Model\InlineResponse2005 contentV1CardsFilterPost($body)

Получение КТ по вендор кодам (артикулам)

Метод позволяет получить полную информацию по КТ с помощью вендор кода(-ов) номенклатуры из КТ  (артикулов).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CardsFilterBody(); // \Swagger\Client\Model\CardsFilterBody | 

try {
    $result = $apiInstance->contentV1CardsFilterPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1CardsFilterPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CardsFilterBody**](../Model/CardsFilterBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1CardsUpdatePost**
> \Swagger\Client\Model\InlineResponse2002 contentV1CardsUpdatePost($body)

Редактирование КТ

Метод позволяет отредактировать несколько карточек за раз. <br> Редактирование КТ происходит асинхронно, после отправки запрос становится в очередь на обработку. <br> `Важно`: Баркоды (skus) не подлежат удалению или замене. Попытка заменить существующий баркод приведет к добавлению нового баркода к существующему. <br> Номенклатуры, содержащие ошибки, не обновляются и попадают в раздел \"Список несозданных НМ с ошибками\" с описанием допущенной ошибки. Для того, чтобы убрать НМ из ошибочных, необходимо повторно сделать запрос с исправленными ошибками. <br> <br> Для успешного обновления карточки рекомендуем Вам придерживаться следующего порядка действий: <br> 1. Сначала существующую карточку необходимо запросить методом cards/filter. <br> 2. Забираем из ответа массив data. <br> 3. В этом массиве вносим необходимые изменения и отправляем его в cards/update

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CardsUpdateBody()); // \Swagger\Client\Model\CardsUpdateBody[] | 

try {
    $result = $apiInstance->contentV1CardsUpdatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1CardsUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CardsUpdateBody[]**](../Model/CardsUpdateBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1CardsUploadAddPost**
> \Swagger\Client\Model\InlineResponse2002 contentV1CardsUploadAddPost($body)

Добавление НМ к КТ

Метод позволяет добавить к карточке товара новую номенклатуру. <br>Добавление НМ к КТ происходит асинхронно, после отправки запрос становится в очередь на обработку. <br>`Важно`: Если после успешной отправки запроса номенклатура не создалась, то необходимо проверить раздел \"Список несозданных НМ с ошибками\". Для того чтобы убрать НМ из ошибочных, необходимо повторно сделать запрос с исправленными ошибками.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UploadAddBody(); // \Swagger\Client\Model\UploadAddBody | 

try {
    $result = $apiInstance->contentV1CardsUploadAddPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1CardsUploadAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UploadAddBody**](../Model/UploadAddBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1CardsUploadPost**
> \Swagger\Client\Model\InlineResponse2002 contentV1CardsUploadPost($body)

Создание  КТ

Создание карточки товара происходит асинхронно, при отправке запроса на создание КТ ваш запрос становится в очередь на создание КТ. <br>`ПРИМЕЧАНИЕ`: Карточка товара считается `созданной`, если успешно создалась хотя бы одна `НМ`. <br>`ВАЖНО`: Если во время обработки запроса в очереди выявляются ошибки, то НМ считается ошибочной. <br>Если запрос на создание прошел успешно, а карточка не создалась, то необходимо в первую очередь проверить наличие карточки в методе `cards/error/list`. Если карточка попала в ответ к этому методу, то необходимо исправить описанные ошибки в запросе на создание карточки и отправить его повторно.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\array()); // object[][] | 

try {
    $result = $apiInstance->contentV1CardsUploadPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1CardsUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[][]**](../Model/array.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectoryBrandsGet**
> \Swagger\Client\Model\InlineResponse20018 contentV1DirectoryBrandsGet($top, $pattern)

Бренд

Получение значения характеристики Бренд.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 56; // int | Количество запрашиваемых значений (максимум 5000)
$pattern = "pattern_example"; // string | Поиск по наименованию значения характеристики

try {
    $result = $apiInstance->contentV1DirectoryBrandsGet($top, $pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectoryBrandsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| Количество запрашиваемых значений (максимум 5000) | [optional]
 **pattern** | **string**| Поиск по наименованию значения характеристики | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectoryCollectionsGet**
> \Swagger\Client\Model\InlineResponse20014 contentV1DirectoryCollectionsGet($top, $pattern)

Коллекция

Получение значения характеристики Коллекции.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 56; // int | Количество запрашиваемых значений (максимум 5000)
$pattern = "pattern_example"; // string | Поиск по наименованию значения характеристики

try {
    $result = $apiInstance->contentV1DirectoryCollectionsGet($top, $pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectoryCollectionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| Количество запрашиваемых значений (максимум 5000) | [optional]
 **pattern** | **string**| Поиск по наименованию значения характеристики | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectoryColorsGet**
> \Swagger\Client\Model\InlineResponse20011 contentV1DirectoryColorsGet()

Цвет

Получение значения характеристики цвет.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contentV1DirectoryColorsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectoryColorsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectoryConsistsGet**
> \Swagger\Client\Model\InlineResponse20017 contentV1DirectoryConsistsGet($top, $pattern)

Состав

Получение значения характеристики Состав.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 56; // int | Количество запрашиваемых значений (максимум 5000)
$pattern = "pattern_example"; // string | Поиск по наименованию значения характеристики

try {
    $result = $apiInstance->contentV1DirectoryConsistsGet($top, $pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectoryConsistsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| Количество запрашиваемых значений (максимум 5000) | [optional]
 **pattern** | **string**| Поиск по наименованию значения характеристики | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectoryContentsGet**
> \Swagger\Client\Model\InlineResponse20016 contentV1DirectoryContentsGet($top, $pattern)

Комплектация

Получение значения характеристики Комплектация.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 56; // int | Количество запрашиваемых значений
$pattern = "pattern_example"; // string | Поиск по наименованию значения характеристики

try {
    $result = $apiInstance->contentV1DirectoryContentsGet($top, $pattern);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectoryContentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| Количество запрашиваемых значений | [optional]
 **pattern** | **string**| Поиск по наименованию значения характеристики | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectoryCountriesGet**
> \Swagger\Client\Model\InlineResponse20013 contentV1DirectoryCountriesGet()

Страна Производства

Получение значения характеристики Страна Производства.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contentV1DirectoryCountriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectoryCountriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectoryKindsGet**
> \Swagger\Client\Model\InlineResponse20012 contentV1DirectoryKindsGet()

Пол

Получение значения характеристики пол.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contentV1DirectoryKindsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectoryKindsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectorySeasonsGet**
> \Swagger\Client\Model\InlineResponse20015 contentV1DirectorySeasonsGet()

Сезон

Получение значения характеристики Сезон.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contentV1DirectorySeasonsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectorySeasonsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1DirectoryTnvedGet**
> \Swagger\Client\Model\InlineResponse20019 contentV1DirectoryTnvedGet($object_name, $tnveds_like)

ТНВЭД код

С помощью данного метода можно получить список ТНВЭД кодов по имени категории и фильтру по тнвэд коду.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = "object_name_example"; // string | Поиск по наименованию категории
$tnveds_like = "tnveds_like_example"; // string | Поиск по коду ТНВЭД

try {
    $result = $apiInstance->contentV1DirectoryTnvedGet($object_name, $tnveds_like);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1DirectoryTnvedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| Поиск по наименованию категории | [optional]
 **tnveds_like** | **string**| Поиск по коду ТНВЭД | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1MediaFilePost**
> \Swagger\Client\Model\InlineResponse2002 contentV1MediaFilePost($uploadfile, $x_vendor_code, $x_photo_number)

Добавление медиа контента в КТ

Метод позволяет загрузить и добавить один медиафайл за запрос, к НМ в КТ. <br>Требования к медиафайлам: <br>`Фото`: минимальное разрешение – 450х450. <br>Максимально допустимое количество фото в КТ 30. <br>`Видео`: максимальный размер 50 мб. Форматы MOV, MP4. <br>Максимально допустимое количество видео в КТ 1.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uploadfile = "uploadfile_example"; // string | 
$x_vendor_code = "x_vendor_code_example"; // string | Артикул НМ
$x_photo_number = 56; // int | Номер медиафайла на загрузку. <b>Начинать с 1</b>. <br>Чтобы добавить фото к уже загруженным в НМ, номер медиафайла должен быть больше кол-ва загруженных в НМ медиафайлов.

try {
    $result = $apiInstance->contentV1MediaFilePost($uploadfile, $x_vendor_code, $x_photo_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1MediaFilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uploadfile** | **string****string**|  |
 **x_vendor_code** | **string**| Артикул НМ |
 **x_photo_number** | **int**| Номер медиафайла на загрузку. &lt;b&gt;Начинать с 1&lt;/b&gt;. &lt;br&gt;Чтобы добавить фото к уже загруженным в НМ, номер медиафайла должен быть больше кол-ва загруженных в НМ медиафайлов. |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1MediaSavePost**
> \Swagger\Client\Model\InlineResponse2002 contentV1MediaSavePost($body)

Изменение медиа контента КТ

Метод позволяет изменить порядок изображений или удалить медиафайлы с НМ в КТ, а также загрузить изображения в НМ со сторонних ресурсов по URL. <br>Текущие изображения заменяются на переданные в массиве data. <br> <br>Требования к медиафайлам: <br>`Фото`: минимальное разрешение – 450х450. <br>Максимально допустимое количество фото в КТ 30. <br> <br>Если хотя бы одно изображение в запросе не соответствует требованиям к медиафайлам, то даже при коде ответа 200 изображения не загрузятся в КТ.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MediaSaveBody(); // \Swagger\Client\Model\MediaSaveBody | 

try {
    $result = $apiInstance->contentV1MediaSavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1MediaSavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MediaSaveBody**](../Model/MediaSaveBody.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1ObjectAllGet**
> \Swagger\Client\Model\InlineResponse2007 contentV1ObjectAllGet($name, $top)

Категория товаров

С помощью данного метода можно получить список категорий товаров по текстовому фильтру (названию категории).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Поиск по названию категории
$top = 56; // int | Количество запрашиваемых значений

try {
    $result = $apiInstance->contentV1ObjectAllGet($name, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1ObjectAllGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Поиск по названию категории | [optional]
 **top** | **int**| Количество запрашиваемых значений | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1ObjectCharacteristicsListFilterGet**
> \Swagger\Client\Model\InlineResponse2009 contentV1ObjectCharacteristicsListFilterGet($name)

Характеристики для создания КТ по всем подкатегориям

С помощью данного метода можно получить список характеристик, которые можно или нужно заполнить при создании КТ в подкатегории определенной родительской категории.   <br>   <br>Характеристики с  `charcType=4`, имеющие единственное значение, <b>указывать строго без массива</b>, в противном случае карточка не будет создана:   <br><b>Правильно:</b>       <br>`{\"Высота упаковки\": 4}`   <br><b>Не правильно:</b>       <br>`{\"Высота упаковки\": [4]}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = "name_example"; // string | Поиск по родительской категории.

try {
    $result = $apiInstance->contentV1ObjectCharacteristicsListFilterGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1ObjectCharacteristicsListFilterGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Поиск по родительской категории. | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1ObjectCharacteristicsObjectNameGet**
> \Swagger\Client\Model\InlineResponse20010 contentV1ObjectCharacteristicsObjectNameGet($object_name)

Характеристики для создания КТ для категории товара

С помощью данного метода можно получить список характеристик, которые можно или нужно заполнить при создании КТ для определенной категории товаров. <br> <br> `Важно`: обязательная к заполнению характеристика при создании карточки любого товара - `Предмет`. <br>Значение характеристики `Предмет` соответствует значению параметра `objectName` в запросе. <br> <br>Характеристики с  `charcType=4`, имеющие единственное значение, <b>указывать строго без массива</b>, в противном случае карточка не будет создана: <br><b>Правильно:</b>     <br>`{\"Высота упаковки\": 4}` <br><b>Не правильно:</b>     <br>`{\"Высота упаковки\": [4]}`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$object_name = "object_name_example"; // string | Поиск по наименованию категории

try {
    $result = $apiInstance->contentV1ObjectCharacteristicsObjectNameGet($object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1ObjectCharacteristicsObjectNameGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **object_name** | **string**| Поиск по наименованию категории |

### Return type

[**\Swagger\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contentV1ObjectParentAllGet**
> \Swagger\Client\Model\InlineResponse2008 contentV1ObjectParentAllGet()

Родительские категории товаров

С помощью данного метода можно получить список всех родительских категорий товаров.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->contentV1ObjectParentAllGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->contentV1ObjectParentAllGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicApiV1RevokeDiscountsPost**
> string publicApiV1RevokeDiscountsPost($body)

Сброс скидок для номенклатур

Сброс скидок для номенклатур. При первом запросе ответ будет пустым. При повторной попытке сбросить скидку вернет JSON с id первичного запроса.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | Перечень номенклатур к отмене скидок

try {
    $result = $apiInstance->publicApiV1RevokeDiscountsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->publicApiV1RevokeDiscountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| Перечень номенклатур к отмене скидок |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicApiV1RevokePromocodesPost**
> string publicApiV1RevokePromocodesPost($body)

Сброс промокодов для номенклатур

Сброс промокодов для номенклатур

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | Перечень номенклатур к отмене промокодов

try {
    $result = $apiInstance->publicApiV1RevokePromocodesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->publicApiV1RevokePromocodesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)| Перечень номенклатур к отмене промокодов |

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicApiV1UpdateDiscountsPost**
> string publicApiV1UpdateDiscountsPost($body, $activate_from)

Установка скидок

Установка скидок для номенклатур. Максимальное количество номенклатур на запрос - 1000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | Перечень номенклатур
$activate_from = "activate_from_example"; // string | Дата активации скидки в формате `YYYY-MM-DD` или `YYYY-MM-DD HH:MM:SS`. Если не указывать, скидка начнет действовать сразу.

try {
    $result = $apiInstance->publicApiV1UpdateDiscountsPost($body, $activate_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->publicApiV1UpdateDiscountsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)| Перечень номенклатур |
 **activate_from** | **string**| Дата активации скидки в формате &#x60;YYYY-MM-DD&#x60; или &#x60;YYYY-MM-DD HH:MM:SS&#x60;. Если не указывать, скидка начнет действовать сразу. | [optional]

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publicApiV1UpdatePromocodesPost**
> string publicApiV1UpdatePromocodesPost($body, $activate_from)

Установка промокодов для номенклатур

Установка промокодов для номенклатур. Максимальное количество номенклатур на запрос - 1000

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: HeaderApiKey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\_Api(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \stdClass); // object[] | Перечень номенклатур
$activate_from = "activate_from_example"; // string | Дата активации промокада в формате YYYY-MM-DD или YYYY-MM-DD HH:MM:SS. Если не указывать, промокод начнет действовать сразу

try {
    $result = $apiInstance->publicApiV1UpdatePromocodesPost($body, $activate_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling _Api->publicApiV1UpdatePromocodesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**object[]**](../Model/object.md)| Перечень номенклатур |
 **activate_from** | **string**| Дата активации промокада в формате YYYY-MM-DD или YYYY-MM-DD HH:MM:SS. Если не указывать, промокод начнет действовать сразу | [optional]

### Return type

**string**

### Authorization

[HeaderApiKey](../../README.md#HeaderApiKey)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: text/plain

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

