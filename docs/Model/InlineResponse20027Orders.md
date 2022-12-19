# InlineResponse20027Orders

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Идентификатор заказа. | [optional] 
**date_created** | **string** | Дата создания заказа (&#x60;RFC3339&#x60;). | [optional] 
**wb_wh_id** | **int** | Идентификатор склада WB, на которой заказ должен быть доставлен. | [optional] 
**store_id** | **int** | Идентификатор склада поставщика, на который пришел заказ. | [optional] 
**pid** | **int** | Идентификатор ПВЗ/магазина, куда необходимо доставить заказ (если применимо). | [optional] 
**office_address** | **string** | Адрес ПВЗ/магазина, куда необходимо доставить заказ (если применимо). | [optional] 
**office_latitude** | **float** | Широта адреса ПВЗ/магазина, куда необходимо доставить заказ (если применимо). | [optional] 
**office_longitude** | **float** | Долгота адреса ПВЗ/магазина, куда необходимо доставить заказ (если применимо). | [optional] 
**delivery_address** | **string** | Адрес клиента для доставки. | [optional] 
**delivery_address_details** | [**\Swagger\Client\Model\DeliveryAddressDetails**](DeliveryAddressDetails.md) |  | [optional] 
**user_info** | [**\Swagger\Client\Model\UserInfo**](UserInfo.md) |  | [optional] 
**chrt_id** | **int** | Идентификатор артикула. | [optional] 
**barcode** | **string** | Штрихкод товара. | [optional] 
**barcodes** | **string[]** | Массив штрихкодов товара. | [optional] 
**sc_offices_names** | **string[]** | Массив СЦ приоритетных для доставки заказа. &lt;br&gt;Если поле не заполнено или массив пустой, приоритетного СЦ нет для данного заказа нет. | [optional] 
**status** | **int** | Статус выставляемый продавцами. &lt;br&gt;&#x60;0&#x60; - Новый заказ. &lt;br&gt;&#x60;1&#x60; - В работе. &lt;br&gt;&#x60;2&#x60; - Сборочное задание завершено. &lt;br&gt;&#x60;3&#x60; - Сборочное задание отклонено. &lt;br&gt;&#x60;5&#x60; - На доставке курьером. &lt;br&gt;&#x60;6&#x60; - Курьер довез и клиент принял товар. &lt;br&gt;&#x60;7&#x60; - Клиент не принял товар. | [optional] 
**user_status** | **int** | Статус выставляемый Wildberries. &lt;br&gt;&#x60;0&#x60; - Новый заказ. &lt;br&gt;&#x60;1&#x60; - Отмена клиента. &lt;br&gt;&#x60;2&#x60; - Доставлен. &lt;br&gt;&#x60;3&#x60; - Возврат. &lt;br&gt;&#x60;4&#x60; - Ожидает. &lt;br&gt;&#x60;5&#x60; - Брак. | [optional] 
**rid** | **string** | Уникальный идентификатор вещи, &#x60;разный у одинаковых chrt_id&#x60;. | [optional] 
**total_price** | **int** | Цена в валюте продажи с учетом скидок в копейках. &#x60;Код валюты продажи в поле currencyCode&#x60;. | [optional] 
**currency_code** | **int** | Код валюты по ISO 4217. &lt;br&gt;Пример: &lt;ul&gt;   &lt;li&gt;&#x60;51&#x60; - Армянский драм.   &lt;li&gt;&#x60;398&#x60; - Казахский тенге.   &lt;li&gt;&#x60;417&#x60; - Киргизский сом.   &lt;li&gt;&#x60;643&#x60; - Российский рубль.   &lt;li&gt;&#x60;840&#x60; - Доллар США.   &lt;li&gt;&#x60;933&#x60; - Белорусский рубль.   &lt;li&gt;&#x60;974&#x60; - Белорусский рубль. &lt;/ul&gt; | [optional] 
**order_uid** | **string** | Идентификатор транзакции (для группировки заказов). | [optional] 
**delivery_type** | **int** | Тип доставки:   &lt;ul&gt;     &lt;li&gt;&#x60;1&#x60; - Обычная доставка.     &lt;li&gt;&#x60;2&#x60; - Доставка силами поставщика.   &lt;/ul&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

