<?php
/**
 * OrdersItem
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
 * OrdersItem Class Doc Comment
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */
class OrdersItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $WildberriesModelName = 'OrdersItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesTypes = [
        'g_number' => 'string',
'date' => '\DateTime',
'last_change_date' => '\DateTime',
'supplier_article' => 'string',
'tech_size' => 'string',
'barcode' => 'string',
'total_price' => 'float',
'discount_percent' => 'int',
'warehouse_name' => 'string',
'oblast' => 'string',
'income_id' => 'int',
'odid' => 'int',
'nm_id' => 'int',
'subject' => 'string',
'category' => 'string',
'brand' => 'string',
'is_cancel' => 'bool',
'cancel_dt' => '\DateTime',
'sticker' => 'string',
'srid' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesFormats = [
        'g_number' => null,
'date' => 'date-time',
'last_change_date' => 'date-time',
'supplier_article' => null,
'tech_size' => null,
'barcode' => null,
'total_price' => null,
'discount_percent' => null,
'warehouse_name' => null,
'oblast' => null,
'income_id' => null,
'odid' => null,
'nm_id' => null,
'subject' => null,
'category' => null,
'brand' => null,
'is_cancel' => null,
'cancel_dt' => 'date-time',
'sticker' => null,
'srid' => null    ];

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
        'g_number' => 'gNumber',
'date' => 'date',
'last_change_date' => 'lastChangeDate',
'supplier_article' => 'supplierArticle',
'tech_size' => 'techSize',
'barcode' => 'barcode',
'total_price' => 'totalPrice',
'discount_percent' => 'discountPercent',
'warehouse_name' => 'warehouseName',
'oblast' => 'oblast',
'income_id' => 'incomeID',
'odid' => 'odid',
'nm_id' => 'nmId',
'subject' => 'subject',
'category' => 'category',
'brand' => 'brand',
'is_cancel' => 'isCancel',
'cancel_dt' => 'cancel_dt',
'sticker' => 'sticker',
'srid' => 'srid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'g_number' => 'setGNumber',
'date' => 'setDate',
'last_change_date' => 'setLastChangeDate',
'supplier_article' => 'setSupplierArticle',
'tech_size' => 'setTechSize',
'barcode' => 'setBarcode',
'total_price' => 'setTotalPrice',
'discount_percent' => 'setDiscountPercent',
'warehouse_name' => 'setWarehouseName',
'oblast' => 'setOblast',
'income_id' => 'setIncomeId',
'odid' => 'setOdid',
'nm_id' => 'setNmId',
'subject' => 'setSubject',
'category' => 'setCategory',
'brand' => 'setBrand',
'is_cancel' => 'setIsCancel',
'cancel_dt' => 'setCancelDt',
'sticker' => 'setSticker',
'srid' => 'setSrid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'g_number' => 'getGNumber',
'date' => 'getDate',
'last_change_date' => 'getLastChangeDate',
'supplier_article' => 'getSupplierArticle',
'tech_size' => 'getTechSize',
'barcode' => 'getBarcode',
'total_price' => 'getTotalPrice',
'discount_percent' => 'getDiscountPercent',
'warehouse_name' => 'getWarehouseName',
'oblast' => 'getOblast',
'income_id' => 'getIncomeId',
'odid' => 'getOdid',
'nm_id' => 'getNmId',
'subject' => 'getSubject',
'category' => 'getCategory',
'brand' => 'getBrand',
'is_cancel' => 'getIsCancel',
'cancel_dt' => 'getCancelDt',
'sticker' => 'getSticker',
'srid' => 'getSrid'    ];

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
        $this->container['g_number'] = isset($data['g_number']) ? $data['g_number'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['last_change_date'] = isset($data['last_change_date']) ? $data['last_change_date'] : null;
        $this->container['supplier_article'] = isset($data['supplier_article']) ? $data['supplier_article'] : null;
        $this->container['tech_size'] = isset($data['tech_size']) ? $data['tech_size'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['total_price'] = isset($data['total_price']) ? $data['total_price'] : null;
        $this->container['discount_percent'] = isset($data['discount_percent']) ? $data['discount_percent'] : null;
        $this->container['warehouse_name'] = isset($data['warehouse_name']) ? $data['warehouse_name'] : null;
        $this->container['oblast'] = isset($data['oblast']) ? $data['oblast'] : null;
        $this->container['income_id'] = isset($data['income_id']) ? $data['income_id'] : null;
        $this->container['odid'] = isset($data['odid']) ? $data['odid'] : null;
        $this->container['nm_id'] = isset($data['nm_id']) ? $data['nm_id'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['is_cancel'] = isset($data['is_cancel']) ? $data['is_cancel'] : null;
        $this->container['cancel_dt'] = isset($data['cancel_dt']) ? $data['cancel_dt'] : null;
        $this->container['sticker'] = isset($data['sticker']) ? $data['sticker'] : null;
        $this->container['srid'] = isset($data['srid']) ? $data['srid'] : null;
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
     * Gets g_number
     *
     * @return string
     */
    public function getGNumber()
    {
        return $this->container['g_number'];
    }

    /**
     * Sets g_number
     *
     * @param string $g_number Номер заказа. Объединяет все позиции одного заказа.
     *
     * @return $this
     */
    public function setGNumber($g_number)
    {
        $this->container['g_number'] = $g_number;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date Дата и время заказа. Это поле соответствует параметру `dateFrom` в запросе, если параметр `flag=1`. Если часовой пояс не указан, то берется Московское время UTC+3.
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets last_change_date
     *
     * @return \DateTime
     */
    public function getLastChangeDate()
    {
        return $this->container['last_change_date'];
    }

    /**
     * Sets last_change_date
     *
     * @param \DateTime $last_change_date Дата и время обновления информации в сервисе. Это поле соответствует параметру `dateFrom` в запросе, если параметр `flag=0` или не указан. Если часовой пояс не указан, то берется Московское время UTC+3.
     *
     * @return $this
     */
    public function setLastChangeDate($last_change_date)
    {
        $this->container['last_change_date'] = $last_change_date;

        return $this;
    }

    /**
     * Gets supplier_article
     *
     * @return string
     */
    public function getSupplierArticle()
    {
        return $this->container['supplier_article'];
    }

    /**
     * Sets supplier_article
     *
     * @param string $supplier_article Артикул поставщика
     *
     * @return $this
     */
    public function setSupplierArticle($supplier_article)
    {
        $this->container['supplier_article'] = $supplier_article;

        return $this;
    }

    /**
     * Gets tech_size
     *
     * @return string
     */
    public function getTechSize()
    {
        return $this->container['tech_size'];
    }

    /**
     * Sets tech_size
     *
     * @param string $tech_size Размер
     *
     * @return $this
     */
    public function setTechSize($tech_size)
    {
        $this->container['tech_size'] = $tech_size;

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
     * @param string $barcode Бар-код
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets total_price
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['total_price'];
    }

    /**
     * Sets total_price
     *
     * @param float $total_price Цена до согласованной итоговой скидки/промо/спп. Для получения цены со скидкой можно воспользоваться формулой `priceWithDiscount = totalPrice * (1 - discountPercent/100)`
     *
     * @return $this
     */
    public function setTotalPrice($total_price)
    {
        $this->container['total_price'] = $total_price;

        return $this;
    }

    /**
     * Gets discount_percent
     *
     * @return int
     */
    public function getDiscountPercent()
    {
        return $this->container['discount_percent'];
    }

    /**
     * Sets discount_percent
     *
     * @param int $discount_percent Согласованный итоговый дисконт. Будучи примененным к `totalPrice`, даёт сумму к оплате.
     *
     * @return $this
     */
    public function setDiscountPercent($discount_percent)
    {
        $this->container['discount_percent'] = $discount_percent;

        return $this;
    }

    /**
     * Gets warehouse_name
     *
     * @return string
     */
    public function getWarehouseName()
    {
        return $this->container['warehouse_name'];
    }

    /**
     * Sets warehouse_name
     *
     * @param string $warehouse_name Название склада отгрузки
     *
     * @return $this
     */
    public function setWarehouseName($warehouse_name)
    {
        $this->container['warehouse_name'] = $warehouse_name;

        return $this;
    }

    /**
     * Gets oblast
     *
     * @return string
     */
    public function getOblast()
    {
        return $this->container['oblast'];
    }

    /**
     * Sets oblast
     *
     * @param string $oblast Область
     *
     * @return $this
     */
    public function setOblast($oblast)
    {
        $this->container['oblast'] = $oblast;

        return $this;
    }

    /**
     * Gets income_id
     *
     * @return int
     */
    public function getIncomeId()
    {
        return $this->container['income_id'];
    }

    /**
     * Sets income_id
     *
     * @param int $income_id Номер поставки (от продавца на склад)
     *
     * @return $this
     */
    public function setIncomeId($income_id)
    {
        $this->container['income_id'] = $income_id;

        return $this;
    }

    /**
     * Gets odid
     *
     * @return int
     */
    public function getOdid()
    {
        return $this->container['odid'];
    }

    /**
     * Sets odid
     *
     * @param int $odid Уникальный идентификатор позиции заказа. Может использоваться для поиска соответствия между заказами и продажами.
     *
     * @return $this
     */
    public function setOdid($odid)
    {
        $this->container['odid'] = $odid;

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
     * @param int $nm_id Код WB
     *
     * @return $this
     */
    public function setNmId($nm_id)
    {
        $this->container['nm_id'] = $nm_id;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject Предмет
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Категория
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand Бренд
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets is_cancel
     *
     * @return bool
     */
    public function getIsCancel()
    {
        return $this->container['is_cancel'];
    }

    /**
     * Sets is_cancel
     *
     * @param bool $is_cancel Отмена заказа. true - заказ отменен до оплаты.
     *
     * @return $this
     */
    public function setIsCancel($is_cancel)
    {
        $this->container['is_cancel'] = $is_cancel;

        return $this;
    }

    /**
     * Gets cancel_dt
     *
     * @return \DateTime
     */
    public function getCancelDt()
    {
        return $this->container['cancel_dt'];
    }

    /**
     * Sets cancel_dt
     *
     * @param \DateTime $cancel_dt Дата и время отмены заказа. Если заказ не был отменен, то `\"0001-01-01T00:00:00\"`. Если часовой пояс не указан, то берется Московское время UTC+3.
     *
     * @return $this
     */
    public function setCancelDt($cancel_dt)
    {
        $this->container['cancel_dt'] = $cancel_dt;

        return $this;
    }

    /**
     * Gets sticker
     *
     * @return string
     */
    public function getSticker()
    {
        return $this->container['sticker'];
    }

    /**
     * Sets sticker
     *
     * @param string $sticker Цифровое значение стикера, который клеится на товар в процессе сборки заказа по системе Маркетплейс.
     *
     * @return $this
     */
    public function setSticker($sticker)
    {
        $this->container['sticker'] = $sticker;

        return $this;
    }

    /**
     * Gets srid
     *
     * @return string
     */
    public function getSrid()
    {
        return $this->container['srid'];
    }

    /**
     * Sets srid
     *
     * @param string $srid Уникальный идентификатор заказа, функционально аналогичный `odid`/`rid`.  Данный параметр введен в июле'22 и в течение переходного периода может быть заполнен не во всех ответах. Примечание для работающих по системе Маркетплейс: `srid` равен `rid` в ответе на метод `GET /api/v2/orders`.
     *
     * @return $this
     */
    public function setSrid($srid)
    {
        $this->container['srid'] = $srid;

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
