# V2OrdersBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | Идентификатор заказа. | [optional] 
**status** | **int** | Статус. &#x60;0&#x60; - Новый заказ. &#x60;1&#x60; - В работе. &#x60;2&#x60; - Сборочное задание завершено. &#x60;3&#x60; - Сборочное задание отклонено. &#x60;5&#x60; - На доставке курьером. &#x60;6&#x60; - Клиент получил товар (курьерская доставка и самовывоз). &#x60;7&#x60; - Клиент не принял товар (курьерская доставка и самовывоз). &#x60;8&#x60; - Товар для самовывоза из магазина принят к работе. &#x60;9&#x60; - Товар для самовывоза из магазина готов к выдаче. | [optional] 
**sgtin** | [**\Wildberries\Client\Model\Apiv2ordersSgtin[]**](Apiv2ordersSgtin.md) | Массив КИЗов. Требуется только для фармацевтической продукции при переводе её в статус &#x60;6&#x60; (\&quot;Клиент получил товар\&quot;). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

