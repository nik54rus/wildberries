# SupplyOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Идентификатор сборочного задания в Маркетплейсе | [optional] 
**rid** | **string** | Идентификатор сборочного задания в системе Wildberries | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Дата создания сборочного задания (RFC3339) | [optional] 
**warehouse_id** | **int** | Идентификатор склада поставщика, на который поступило сборочное задание | [optional] 
**priority_sc** | **string[]** | Массив приоритетных СЦ для доставки сборочного задания. Если поле не заполнено или массив пустой, приоритетного СЦ для данного сборочного задания нет. | [optional] 
**offices** | **string[]** | Список офисов, куда следует привезти товар. | [optional] 
**user** | [**\Swagger\Client\Model\OrderUser**](OrderUser.md) |  | [optional] 
**skus** | **string[]** | Массив штрихкодов товара | [optional] 
**price** | **int** | Цена в валюте продажи с учетом скидок в копейках. Код валюты продажи в поле currencyCode. | [optional] 
**converted_price** | **int** | Цена продажи с учетом скидок в копейках, сконвертированная в рубли по курсу на момент создания сборочного задания. Предоставляется в информационных целях. | [optional] 
**currency_code** | **int** | Код валюты продажи (ISO 4217) | [optional] 
**converted_currency_code** | **int** | Код валюты страны поставщика (ISO 4217) | [optional] 
**order_uid** | **string** | Идентификатор транзакции для группировки сборочных заданий. Сборочные задания в одной корзине клиента будут иметь одинаковый orderUID. | [optional] 
**nm_id** | **int** | Артикул товара в системе Wildberries | [optional] 
**chrt_id** | **int** | Идентификатор размера товара в системе Wildberries | [optional] 
**article** | **string** | Артикул поставщика | [optional] 
**is_large_cargo** | [**Bool**](Bool.md) | сКГТ-признак товара, на который был сделан заказ | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

