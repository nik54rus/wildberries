# CardsUpdateBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**imt_id** | **int** | Идентификатор карточки товара | [optional] 
**nm_id** | **int** | Числовой идентификатор номенклатуры Wildberries | [optional] 
**vendor_code** | **string** | Вендор код, текстовый идентификатор номенклатуры поставщика | [optional] 
**sizes** | [**\Swagger\Client\Model\Contentv1cardsupdateSizes[]**](Contentv1cardsupdateSizes.md) | Массив размеров для номенклатуры (для безразмерного товара все равно нужно передавать данный массив с одним элементом и нулевым размером, но с ценой и баркодом) | [optional] 
**characteristics** | **object[]** | Массив характеристик, индивидуальный для каждой категории | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

