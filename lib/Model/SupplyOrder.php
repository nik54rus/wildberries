<?php
/**
 * SupplyOrder
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
 * SupplyOrder Class Doc Comment
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */
class SupplyOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $WildberriesModelName = 'SupplyOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesTypes = [
        'id' => 'int',
'rid' => 'string',
'created_at' => '\DateTime',
'warehouse_id' => 'int',
'priority_sc' => 'string[]',
'offices' => 'string[]',
'user' => '\Wildberries\Client\Model\OrderUser',
'skus' => 'string[]',
'price' => 'int',
'converted_price' => 'int',
'currency_code' => 'int',
'converted_currency_code' => 'int',
'order_uid' => 'string',
'nm_id' => 'int',
'chrt_id' => 'int',
'article' => 'string',
'is_large_cargo' => 'Bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesFormats = [
        'id' => 'int64',
'rid' => null,
'created_at' => 'date-time',
'warehouse_id' => null,
'priority_sc' => null,
'offices' => null,
'user' => null,
'skus' => null,
'price' => null,
'converted_price' => null,
'currency_code' => null,
'converted_currency_code' => null,
'order_uid' => null,
'nm_id' => null,
'chrt_id' => null,
'article' => null,
'is_large_cargo' => null    ];

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
        'id' => 'id',
'rid' => 'rid',
'created_at' => 'createdAt',
'warehouse_id' => 'warehouseId',
'priority_sc' => 'prioritySc',
'offices' => 'offices',
'user' => 'user',
'skus' => 'skus',
'price' => 'price',
'converted_price' => 'convertedPrice',
'currency_code' => 'currencyCode',
'converted_currency_code' => 'convertedCurrencyCode',
'order_uid' => 'orderUid',
'nm_id' => 'nmId',
'chrt_id' => 'chrtId',
'article' => 'article',
'is_large_cargo' => 'isLargeCargo'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'rid' => 'setRid',
'created_at' => 'setCreatedAt',
'warehouse_id' => 'setWarehouseId',
'priority_sc' => 'setPrioritySc',
'offices' => 'setOffices',
'user' => 'setUser',
'skus' => 'setSkus',
'price' => 'setPrice',
'converted_price' => 'setConvertedPrice',
'currency_code' => 'setCurrencyCode',
'converted_currency_code' => 'setConvertedCurrencyCode',
'order_uid' => 'setOrderUid',
'nm_id' => 'setNmId',
'chrt_id' => 'setChrtId',
'article' => 'setArticle',
'is_large_cargo' => 'setIsLargeCargo'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'rid' => 'getRid',
'created_at' => 'getCreatedAt',
'warehouse_id' => 'getWarehouseId',
'priority_sc' => 'getPrioritySc',
'offices' => 'getOffices',
'user' => 'getUser',
'skus' => 'getSkus',
'price' => 'getPrice',
'converted_price' => 'getConvertedPrice',
'currency_code' => 'getCurrencyCode',
'converted_currency_code' => 'getConvertedCurrencyCode',
'order_uid' => 'getOrderUid',
'nm_id' => 'getNmId',
'chrt_id' => 'getChrtId',
'article' => 'getArticle',
'is_large_cargo' => 'getIsLargeCargo'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['rid'] = isset($data['rid']) ? $data['rid'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['priority_sc'] = isset($data['priority_sc']) ? $data['priority_sc'] : null;
        $this->container['offices'] = isset($data['offices']) ? $data['offices'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['skus'] = isset($data['skus']) ? $data['skus'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['converted_price'] = isset($data['converted_price']) ? $data['converted_price'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['converted_currency_code'] = isset($data['converted_currency_code']) ? $data['converted_currency_code'] : null;
        $this->container['order_uid'] = isset($data['order_uid']) ? $data['order_uid'] : null;
        $this->container['nm_id'] = isset($data['nm_id']) ? $data['nm_id'] : null;
        $this->container['chrt_id'] = isset($data['chrt_id']) ? $data['chrt_id'] : null;
        $this->container['article'] = isset($data['article']) ? $data['article'] : null;
        $this->container['is_large_cargo'] = isset($data['is_large_cargo']) ? $data['is_large_cargo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Идентификатор сборочного задания в Маркетплейсе
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $rid Идентификатор сборочного задания в системе Wildberries
     *
     * @return $this
     */
    public function setRid($rid)
    {
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Дата создания сборочного задания (RFC3339)
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int $warehouse_id Идентификатор склада поставщика, на который поступило сборочное задание
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets priority_sc
     *
     * @return string[]
     */
    public function getPrioritySc()
    {
        return $this->container['priority_sc'];
    }

    /**
     * Sets priority_sc
     *
     * @param string[] $priority_sc Массив приоритетных СЦ для доставки сборочного задания. Если поле не заполнено или массив пустой, приоритетного СЦ для данного сборочного задания нет.
     *
     * @return $this
     */
    public function setPrioritySc($priority_sc)
    {
        $this->container['priority_sc'] = $priority_sc;

        return $this;
    }

    /**
     * Gets offices
     *
     * @return string[]
     */
    public function getOffices()
    {
        return $this->container['offices'];
    }

    /**
     * Sets offices
     *
     * @param string[] $offices Список офисов, куда следует привезти товар.
     *
     * @return $this
     */
    public function setOffices($offices)
    {
        $this->container['offices'] = $offices;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \Wildberries\Client\Model\OrderUser
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Wildberries\Client\Model\OrderUser $user user
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets skus
     *
     * @return string[]
     */
    public function getSkus()
    {
        return $this->container['skus'];
    }

    /**
     * Sets skus
     *
     * @param string[] $skus Массив штрихкодов товара
     *
     * @return $this
     */
    public function setSkus($skus)
    {
        $this->container['skus'] = $skus;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price Цена в валюте продажи с учетом скидок в копейках. Код валюты продажи в поле currencyCode.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets converted_price
     *
     * @return int
     */
    public function getConvertedPrice()
    {
        return $this->container['converted_price'];
    }

    /**
     * Sets converted_price
     *
     * @param int $converted_price Цена продажи с учетом скидок в копейках, сконвертированная в рубли по курсу на момент создания сборочного задания. Предоставляется в информационных целях.
     *
     * @return $this
     */
    public function setConvertedPrice($converted_price)
    {
        $this->container['converted_price'] = $converted_price;

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
     * @param int $currency_code Код валюты продажи (ISO 4217)
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets converted_currency_code
     *
     * @return int
     */
    public function getConvertedCurrencyCode()
    {
        return $this->container['converted_currency_code'];
    }

    /**
     * Sets converted_currency_code
     *
     * @param int $converted_currency_code Код валюты страны поставщика (ISO 4217)
     *
     * @return $this
     */
    public function setConvertedCurrencyCode($converted_currency_code)
    {
        $this->container['converted_currency_code'] = $converted_currency_code;

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
     * @param string $order_uid Идентификатор транзакции для группировки сборочных заданий. Сборочные задания в одной корзине клиента будут иметь одинаковый orderUID.
     *
     * @return $this
     */
    public function setOrderUid($order_uid)
    {
        $this->container['order_uid'] = $order_uid;

        return $this;
    }

    /**
     * Gets nm_id
     *
     * @return int
     */
    public function getNmId()
    {
        return $this->container['nm_id'];
    }

    /**
     * Sets nm_id
     *
     * @param int $nm_id Артикул товара в системе Wildberries
     *
     * @return $this
     */
    public function setNmId($nm_id)
    {
        $this->container['nm_id'] = $nm_id;

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
     * @param int $chrt_id Идентификатор размера товара в системе Wildberries
     *
     * @return $this
     */
    public function setChrtId($chrt_id)
    {
        $this->container['chrt_id'] = $chrt_id;

        return $this;
    }

    /**
     * Gets article
     *
     * @return string
     */
    public function getArticle()
    {
        return $this->container['article'];
    }

    /**
     * Sets article
     *
     * @param string $article Артикул поставщика
     *
     * @return $this
     */
    public function setArticle($article)
    {
        $this->container['article'] = $article;

        return $this;
    }

    /**
     * Gets is_large_cargo
     *
     * @return Bool
     */
    public function getIsLargeCargo()
    {
        return $this->container['is_large_cargo'];
    }

    /**
     * Sets is_large_cargo
     *
     * @param Bool $is_large_cargo сКГТ-признак товара, на который был сделан заказ
     *
     * @return $this
     */
    public function setIsLargeCargo($is_large_cargo)
    {
        $this->container['is_large_cargo'] = $is_large_cargo;

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
