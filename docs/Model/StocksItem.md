# StocksItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_change_date** | [**\DateTime**](\DateTime.md) | Дата и время обновления информации в сервисе. Это поле соответствует параметру &#x60;dateFrom&#x60; в запросе. Если часовой пояс не указан, то берется Московское время UTC+3. | [optional] 
**supplier_article** | **string** | Артикул поставщика | [optional] 
**tech_size** | **string** | Размер | [optional] 
**barcode** | **string** | Бар-код | [optional] 
**quantity** | **int** | Количество, доступное для продажи (сколько можно добавить в корзину) | [optional] 
**is_supply** | **bool** | Договор поставки | [optional] 
**is_realization** | **bool** | Договор реализации | [optional] 
**quantity_full** | **int** | Полное (непроданное) количество, которое числится за складом (&#x3D; &#x60;quantity&#x60; + в пути) | [optional] 
**warehouse_name** | **string** | Название склада | [optional] 
**nm_id** | **int** | Код WB | [optional] 
**subject** | **string** | Предмет | [optional] 
**category** | **string** | Категория | [optional] 
**days_on_site** | **int** | Количество дней на сайте | [optional] 
**brand** | **string** | Бренд | [optional] 
**sc_code** | **string** | Код контракта | [optional] 
**price** | **float** | Цена | [optional] 
**discount** | **float** | Скидка | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

