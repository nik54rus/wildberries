# IncomesItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**income_id** | **int** | Номер поставки | [optional] 
**number** | **string** | Номер УПД | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Дата поступления. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional] 
**last_change_date** | [**\DateTime**](\DateTime.md) | Дата и время обновления информации в сервисе. Это поле соответствует параметру &#x60;dateFrom&#x60; в запросе. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional] 
**supplier_article** | **string** | Артикул поставщика | [optional] 
**tech_size** | **string** | Размер | [optional] 
**barcode** | **string** | Бар-код | [optional] 
**quantity** | **int** | Количество | [optional] 
**total_price** | **float** | Цена из УПД | [optional] 
**date_close** | [**\DateTime**](\DateTime.md) | Дата принятия (закрытия) в WB. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional] 
**warehouse_name** | **string** | Название склада | [optional] 
**nm_id** | **int** | Код WB | [optional] 
**status** | **string** | Текущий статус поставки | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

