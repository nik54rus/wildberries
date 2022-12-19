# ExcItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Внутренний код операции | [optional] 
**finished_price** | **float** | Цена товара с учетом НДС | [optional] 
**operation_type_id** | **int** | Тип операции (&#x60;1&#x60; - продажа, &#x60;2&#x60; - возврат) | [optional] 
**fiscal_dt** | [**\DateTime**](\DateTime.md) | Время фискализации. Передается с указанием часового пояса. | [optional] 
**doc_number** | **int** | Номер фискального документа | [optional] 
**fn_number** | **string** | Номер фискального накопителя | [optional] 
**reg_number** | **string** | Регистрационный номер ККТ | [optional] 
**excise** | **string** | Акциз (он же киз) | [optional] 
**date** | [**\DateTime**](\DateTime.md) | Дата появления данных в системе. Передается с указанием часового пояса. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

