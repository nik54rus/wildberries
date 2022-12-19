<?php
/**
 * InlineResponse20027Orders
 *
 * PHP version 5
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */

/**
 * API продавца
 *
 * # Общее описание <style> .version {   border: 0.1rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #32329FE6;   height: 25px;   width: 150px;   text-align: center }, </style> <style> .warning {   border: 1.6rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #247706;   text-align: center } </style>  Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Wildberries](https://Wildberries.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Wildberries CodeGen](https://Wildberries.io/tools/Wildberries-codegen/)  <ul> <li> Описание в оригинальном Wildberries-формате <a href=\"/Wildberries\">Wildberries</a> <li> OpenAPI-файл <a href=\"/Wildberries.yaml\">Wildberries.yaml</a> </ul>  <br> Для ручной проверки API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul>  ## Поддержка <br> Техническая поддержка осуществляется через обращения в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API. <br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> Также готовятся к публикации Release Notes по API на сайте.  После их выхода будет сделан соответствующий анонс.   ## Авторизация Вызов любого метода API должен быть авторизован.  Авторизация осуществляется по ключам API, которые  владелец личного кабинета (главный пользователь) самостоятельно  генерирует в разделе   [Профиль --> Настройки --> Доступ к API](https://seller.wildberries.ru/supplier-settings/access-to-api) для статистики   и [Профиль --> Настройки --> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api) для остальных методов.   <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a> управление всеми ключами будет перенесено в единую вкладку. </p>  ### Авторизация для методов Статистики При работе с методами Статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к API\". <br>Созданный ключ отображается в личном кабинете как \"Ключ для работы с API статистики x64\". <br>Его следует скопировать и добавлять в каждый запрос, прибавляя к запросу параметр `key`. <br>Выглядеть запрос будет примерно так: `https://suppliers-stats.wildberries.ru/api/v1/supplier/stocks?dateFrom=2022-03-25&key=.........`  <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a>: <ul>   <li>Управление всеми ключами будет перенесено в единую вкладку   <li>Для доступа к API Статистики нужно будет указывать домен <code><b>https://statistics-api.wildberries.ru</b></code>   <li>Ключ авторизации необходимо будет указывать в HTTP-заголовке <code>Authorization</code>, а не в строке параметров </ul> </p>  ### Авторизация для нестатистических методов При работе со всеми методами кроме статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к новому API\". <br>Обратите внимание, что ключ отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный ключ следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: .........`. <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a>: данный раздел ЛК можно будет использовать для управления всеми типами ключей. </p>  ## Форматы ### Дата и время Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>  ## АНОНС - Единый ЛК управления ключами API WILDBERRIES начинает постепенный перевод аккаунтов на новую (единую) схему управления токенами («ключами») публичного API продавцов.  <br> <br> **ВАЖНО** : описанные ниже изменения будут становиться доступными для продавцов постепенно в течение ноября 2022г. Если изменения уже стали доступны, в настройках магазина из-под аккаунта Владельца останется одна вкладка `Доступ в новому API` вместо двух.  <br> <br> Теперь управление **всеми** ключами программного доступа к магазину будет осуществляться в интерфейсе, доступном по адресу [Настройки -> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api). <br> Для создаваемых ключей теперь указывается `Тип ключа`, который определяет, к какой группе сервисов данный ключ имеет доступ.  На данный момент доступно два типа, список будет расширяться: <ul> <li> `Стандартный`: дает доступ к методам API Контент, Маркетплейс, Цены и Скидки. <li> `Статистика`: дает доступ только к отчетам по статистике </ul> <br> Также при создании ключа необходимо указать его Имя - произвольную строку, которая будет  выводиться в списке ключей в качестве подсказки. Пример: \"Для онлайн бухгалтерии\"  ### Информация для пользователей API статистики  Предыдущие версии ключей (так называемые `Ключ для работы с API статистики x64`) продолжат работать в прежнем режиме. По завершении перевода всех аккаунтов на новую схему сообщим об этом отдельной новостью, где также укажем дату, до которой будут поддерживаться старые токены «x32» и «x64» (ориентировочно до середины января). <br> <br>С 29 ноября новые аккаунты будут создаваться сразу с новой схемой управления токенами. <br> Чтобы перейти со старого ключа на новый, следуйте инструкции: 1. Сгенерируйте новый ключ в разделе [Настройки -> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api).    <br><b>Важно</b>: при генерации выберите тип ключа `Статистика` 2. Новый ключ следует указывать в HTTP-заголовке `Authorization`.    <br>Его не надо указывать в самом запросе как раньше (так называемых query parameters),    то есть параметр `&key=...` следует удалить из запроса 3. При обращении за статистикой необходимо сменить адрес (endpoint) с https://suppliers-stats.wildberries.ru/ на https://statistics-api.wildberries.ru/   ## Release Notes  #### 2022.10.31 v1.4  Метод будет отключен 2022.10.31 в v1.4: <ul> <li> `/content/v1/cards/list` </ul>  #### 2022.09.20 v1.2  В связи с переходом на новое API Контента старые методы будут отключены. К их числу относятся: <ul> <li> `/card/_*` <li> `/api/v1/config/_*` <li> `/api/v1/directory/_*` </ul> Данные методы теперь возвращают код 404.  Новое API Контента описано в данном документе в разделах Контент / *
 *
 * OpenAPI spec version: 1.4
 * 
 * Generated by: https://github.com/Wildberries-api/Wildberries-codegen.git
 * Wildberries Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the Wildberries code generator program.
 * https://github.com/Wildberries-api/Wildberries-codegen
 * Do not edit the class manually.
 */

namespace Wildberries\Client\Model;

use \ArrayAccess;
use \Wildberries\Client\ObjectSerializer;

/**
 * InlineResponse20027Orders Class Doc Comment
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */
class InlineResponse20027Orders implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $WildberriesModelName = 'inline_response_200_27_orders';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesTypes = [
        'order_id' => 'string',
'date_created' => 'string',
'wb_wh_id' => 'int',
'store_id' => 'int',
'pid' => 'int',
'office_address' => 'string',
'office_latitude' => 'float',
'office_longitude' => 'float',
'delivery_address' => 'string',
'delivery_address_details' => '\Wildberries\Client\Model\DeliveryAddressDetails',
'user_info' => '\Wildberries\Client\Model\UserInfo',
'chrt_id' => 'int',
'barcode' => 'string',
'barcodes' => 'string[]',
'sc_offices_names' => 'string[]',
'status' => 'int',
'user_status' => 'int',
'rid' => 'string',
'total_price' => 'int',
'currency_code' => 'int',
'order_uid' => 'string',
'delivery_type' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesFormats = [
        'order_id' => null,
'date_created' => null,
'wb_wh_id' => null,
'store_id' => null,
'pid' => null,
'office_address' => null,
'office_latitude' => null,
'office_longitude' => null,
'delivery_address' => null,
'delivery_address_details' => null,
'user_info' => null,
'chrt_id' => null,
'barcode' => null,
'barcodes' => null,
'sc_offices_names' => null,
'status' => null,
'user_status' => null,
'rid' => null,
'total_price' => null,
'currency_code' => null,
'order_uid' => null,
'delivery_type' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function WildberriesTypes()
    {
        return self::$WildberriesTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function WildberriesFormats()
    {
        return self::$WildberriesFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_id' => 'orderId',
'date_created' => 'dateCreated',
'wb_wh_id' => 'wbWhId',
'store_id' => 'storeId',
'pid' => 'pid',
'office_address' => 'officeAddress',
'office_latitude' => 'OfficeLatitude',
'office_longitude' => 'OfficeLongitude',
'delivery_address' => 'deliveryAddress',
'delivery_address_details' => 'deliveryAddressDetails',
'user_info' => 'userInfo',
'chrt_id' => 'chrtId',
'barcode' => 'barcode',
'barcodes' => 'barcodes',
'sc_offices_names' => 'scOfficesNames',
'status' => 'status',
'user_status' => 'userStatus',
'rid' => 'rid',
'total_price' => 'totalPrice',
'currency_code' => 'currencyCode',
'order_uid' => 'orderUID',
'delivery_type' => 'deliveryType'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
'date_created' => 'setDateCreated',
'wb_wh_id' => 'setWbWhId',
'store_id' => 'setStoreId',
'pid' => 'setPid',
'office_address' => 'setOfficeAddress',
'office_latitude' => 'setOfficeLatitude',
'office_longitude' => 'setOfficeLongitude',
'delivery_address' => 'setDeliveryAddress',
'delivery_address_details' => 'setDeliveryAddressDetails',
'user_info' => 'setUserInfo',
'chrt_id' => 'setChrtId',
'barcode' => 'setBarcode',
'barcodes' => 'setBarcodes',
'sc_offices_names' => 'setScOfficesNames',
'status' => 'setStatus',
'user_status' => 'setUserStatus',
'rid' => 'setRid',
'total_price' => 'setTotalPrice',
'currency_code' => 'setCurrencyCode',
'order_uid' => 'setOrderUid',
'delivery_type' => 'setDeliveryType'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
'date_created' => 'getDateCreated',
'wb_wh_id' => 'getWbWhId',
'store_id' => 'getStoreId',
'pid' => 'getPid',
'office_address' => 'getOfficeAddress',
'office_latitude' => 'getOfficeLatitude',
'office_longitude' => 'getOfficeLongitude',
'delivery_address' => 'getDeliveryAddress',
'delivery_address_details' => 'getDeliveryAddressDetails',
'user_info' => 'getUserInfo',
'chrt_id' => 'getChrtId',
'barcode' => 'getBarcode',
'barcodes' => 'getBarcodes',
'sc_offices_names' => 'getScOfficesNames',
'status' => 'getStatus',
'user_status' => 'getUserStatus',
'rid' => 'getRid',
'total_price' => 'getTotalPrice',
'currency_code' => 'getCurrencyCode',
'order_uid' => 'getOrderUid',
'delivery_type' => 'getDeliveryType'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$WildberriesModelName;
    }

    const STATUS_0 = 0;
const STATUS_1 = 1;
const STATUS_2 = 2;
const STATUS_3 = 3;
const STATUS_5 = 5;
const STATUS_6 = 6;
const STATUS_7 = 7;
const USER_STATUS_0 = 0;
const USER_STATUS_1 = 1;
const USER_STATUS_2 = 2;
const USER_STATUS_3 = 3;
const USER_STATUS_4 = 4;
const USER_STATUS_5 = 5;
const DELIVERY_TYPE_1 = 1;
const DELIVERY_TYPE_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
self::STATUS_1,
self::STATUS_2,
self::STATUS_3,
self::STATUS_5,
self::STATUS_6,
self::STATUS_7,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUserStatusAllowableValues()
    {
        return [
            self::USER_STATUS_0,
self::USER_STATUS_1,
self::USER_STATUS_2,
self::USER_STATUS_3,
self::USER_STATUS_4,
self::USER_STATUS_5,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeliveryTypeAllowableValues()
    {
        return [
            self::DELIVERY_TYPE_1,
self::DELIVERY_TYPE_2,        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['wb_wh_id'] = isset($data['wb_wh_id']) ? $data['wb_wh_id'] : null;
        $this->container['store_id'] = isset($data['store_id']) ? $data['store_id'] : null;
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['office_address'] = isset($data['office_address']) ? $data['office_address'] : null;
        $this->container['office_latitude'] = isset($data['office_latitude']) ? $data['office_latitude'] : null;
        $this->container['office_longitude'] = isset($data['office_longitude']) ? $data['office_longitude'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['delivery_address_details'] = isset($data['delivery_address_details']) ? $data['delivery_address_details'] : null;
        $this->container['user_info'] = isset($data['user_info']) ? $data['user_info'] : null;
        $this->container['chrt_id'] = isset($data['chrt_id']) ? $data['chrt_id'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['barcodes'] = isset($data['barcodes']) ? $data['barcodes'] : null;
        $this->container['sc_offices_names'] = isset($data['sc_offices_names']) ? $data['sc_offices_names'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['user_status'] = isset($data['user_status']) ? $data['user_status'] : null;
        $this->container['rid'] = isset($data['rid']) ? $data['rid'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['order_uid'] = isset($data['order_uid']) ? $data['order_uid'] : null;
        $this->container['delivery_type'] = isset($data['delivery_type']) ? $data['delivery_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUserStatusAllowableValues();
        if (!is_null($this->container['user_status']) && !in_array($this->container['user_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'user_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDeliveryTypeAllowableValues();
        if (!is_null($this->container['delivery_type']) && !in_array($this->container['delivery_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'delivery_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id Идентификатор заказа.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets date_created
     *
     * @return string
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     *
     * @param string $date_created Дата создания заказа (`RFC3339`).
     *
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets wb_wh_id
     *
     * @return int
     */
    public function getWbWhId()
    {
        return $this->container['wb_wh_id'];
    }

    /**
     * Sets wb_wh_id
     *
     * @param int $wb_wh_id Идентификатор склада WB, на которой заказ должен быть доставлен.
     *
     * @return $this
     */
    public function setWbWhId($wb_wh_id)
    {
        $this->container['wb_wh_id'] = $wb_wh_id;

        return $this;
    }

    /**
     * Gets store_id
     *
     * @return int
     */
    public function getStoreId()
    {
        return $this->container['store_id'];
    }

    /**
     * Sets store_id
     *
     * @param int $store_id Идентификатор склада поставщика, на который пришел заказ.
     *
     * @return $this
     */
    public function setStoreId($store_id)
    {
        $this->container['store_id'] = $store_id;

        return $this;
    }

    /**
     * Gets pid
     *
     * @return int
     */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
     * Sets pid
     *
     * @param int $pid Идентификатор ПВЗ/магазина, куда необходимо доставить заказ (если применимо).
     *
     * @return $this
     */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;

        return $this;
    }

    /**
     * Gets office_address
     *
     * @return string
     */
    public function getOfficeAddress()
    {
        return $this->container['office_address'];
    }

    /**
     * Sets office_address
     *
     * @param string $office_address Адрес ПВЗ/магазина, куда необходимо доставить заказ (если применимо).
     *
     * @return $this
     */
    public function setOfficeAddress($office_address)
    {
        $this->container['office_address'] = $office_address;

        return $this;
    }

    /**
     * Gets office_latitude
     *
     * @return float
     */
    public function getOfficeLatitude()
    {
        return $this->container['office_latitude'];
    }

    /**
     * Sets office_latitude
     *
     * @param float $office_latitude Широта адреса ПВЗ/магазина, куда необходимо доставить заказ (если применимо).
     *
     * @return $this
     */
    public function setOfficeLatitude($office_latitude)
    {
        $this->container['office_latitude'] = $office_latitude;

        return $this;
    }

    /**
     * Gets office_longitude
     *
     * @return float
     */
    public function getOfficeLongitude()
    {
        return $this->container['office_longitude'];
    }

    /**
     * Sets office_longitude
     *
     * @param float $office_longitude Долгота адреса ПВЗ/магазина, куда необходимо доставить заказ (если применимо).
     *
     * @return $this
     */
    public function setOfficeLongitude($office_longitude)
    {
        $this->container['office_longitude'] = $office_longitude;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return string
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param string $delivery_address Адрес клиента для доставки.
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets delivery_address_details
     *
     * @return \Wildberries\Client\Model\DeliveryAddressDetails
     */
    public function getDeliveryAddressDetails()
    {
        return $this->container['delivery_address_details'];
    }

    /**
     * Sets delivery_address_details
     *
     * @param \Wildberries\Client\Model\DeliveryAddressDetails $delivery_address_details delivery_address_details
     *
     * @return $this
     */
    public function setDeliveryAddressDetails($delivery_address_details)
    {
        $this->container['delivery_address_details'] = $delivery_address_details;

        return $this;
    }

    /**
     * Gets user_info
     *
     * @return \Wildberries\Client\Model\UserInfo
     */
    public function getUserInfo()
    {
        return $this->container['user_info'];
    }

    /**
     * Sets user_info
     *
     * @param \Wildberries\Client\Model\UserInfo $user_info user_info
     *
     * @return $this
     */
    public function setUserInfo($user_info)
    {
        $this->container['user_info'] = $user_info;

        return $this;
    }

    /**
     * Gets chrt_id
     *
     * @return int
     */
    public function getChrtId()
    {
        return $this->container['chrt_id'];
    }

    /**
     * Sets chrt_id
     *
     * @param int $chrt_id Идентификатор артикула.
     *
     * @return $this
     */
    public function setChrtId($chrt_id)
    {
        $this->container['chrt_id'] = $chrt_id;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode Штрихкод товара.
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets barcodes
     *
     * @return string[]
     */
    public function getBarcodes()
    {
        return $this->container['barcodes'];
    }

    /**
     * Sets barcodes
     *
     * @param string[] $barcodes Массив штрихкодов товара.
     *
     * @return $this
     */
    public function setBarcodes($barcodes)
    {
        $this->container['barcodes'] = $barcodes;

        return $this;
    }

    /**
     * Gets sc_offices_names
     *
     * @return string[]
     */
    public function getScOfficesNames()
    {
        return $this->container['sc_offices_names'];
    }

    /**
     * Sets sc_offices_names
     *
     * @param string[] $sc_offices_names Массив СЦ приоритетных для доставки заказа. <br>Если поле не заполнено или массив пустой, приоритетного СЦ нет для данного заказа нет.
     *
     * @return $this
     */
    public function setScOfficesNames($sc_offices_names)
    {
        $this->container['sc_offices_names'] = $sc_offices_names;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status Статус выставляемый продавцами. <br>`0` - Новый заказ. <br>`1` - В работе. <br>`2` - Сборочное задание завершено. <br>`3` - Сборочное задание отклонено. <br>`5` - На доставке курьером. <br>`6` - Курьер довез и клиент принял товар. <br>`7` - Клиент не принял товар.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user_status
     *
     * @return int
     */
    public function getUserStatus()
    {
        return $this->container['user_status'];
    }

    /**
     * Sets user_status
     *
     * @param int $user_status Статус выставляемый Wildberries. <br>`0` - Новый заказ. <br>`1` - Отмена клиента. <br>`2` - Доставлен. <br>`3` - Возврат. <br>`4` - Ожидает. <br>`5` - Брак.
     *
     * @return $this
     */
    public function setUserStatus($user_status)
    {
        $allowedValues = $this->getUserStatusAllowableValues();
        if (!is_null($user_status) && !in_array($user_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'user_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['user_status'] = $user_status;

        return $this;
    }

    /**
     * Gets rid
     *
     * @return string
     */
    public function getRid()
    {
        return $this->container['rid'];
    }

    /**
     * Sets rid
     *
     * @param string $rid Уникальный идентификатор вещи, `разный у одинаковых chrt_id`.
     *
     * @return $this
     */
    public function setRid($rid)
    {
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return int
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param int $total_price Цена в валюте продажи с учетом скидок в копейках. `Код валюты продажи в поле currencyCode`.
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return int
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param int $currency_code Код валюты по ISO 4217. <br>Пример: <ul>   <li>`51` - Армянский драм.   <li>`398` - Казахский тенге.   <li>`417` - Киргизский сом.   <li>`643` - Российский рубль.   <li>`840` - Доллар США.   <li>`933` - Белорусский рубль.   <li>`974` - Белорусский рубль. </ul>
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets order_uid
     *
     * @return string
     */
    public function getOrderUid()
    {
        return $this->container['order_uid'];
    }

    /**
     * Sets order_uid
     *
     * @param string $order_uid Идентификатор транзакции (для группировки заказов).
     *
     * @return $this
     */
    public function setOrderUid($order_uid)
    {
        $this->container['order_uid'] = $order_uid;

        return $this;
    }

    /**
     * Gets delivery_type
     *
     * @return int
     */
    public function getDeliveryType()
    {
        return $this->container['delivery_type'];
    }

    /**
     * Sets delivery_type
     *
     * @param int $delivery_type Тип доставки:   <ul>     <li>`1` - Обычная доставка.     <li>`2` - Доставка силами поставщика.   </ul>
     *
     * @return $this
     */
    public function setDeliveryType($delivery_type)
    {
        $allowedValues = $this->getDeliveryTypeAllowableValues();
        if (!is_null($delivery_type) && !in_array($delivery_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'delivery_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['delivery_type'] = $delivery_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange] 
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange] 
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
