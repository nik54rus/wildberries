<?php
/**
 * V0CpmBody
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
 * # Общее описание <style> .version {   border: 0.1rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #32329FE6;   height: 25px;   width: 150px;   text-align: center }, </style> <style> .warning {   border: 1.6rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #247706;   text-align: center } </style>  Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Wildberries](https://Wildberries.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Wildberries CodeGen](https://Wildberries.io/tools/Wildberries-codegen/)  <ul> <li> Описание в оригинальном Wildberries-формате <a href=\"/Wildberries\">Wildberries</a> <li> OpenAPI-файл <a href=\"/Wildberries.yaml\">Wildberries.yaml</a> </ul>  <br> Для ручной проверки API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul>  ## Поддержка <br> Техническая поддержка осуществляется через обращения в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API. <br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> Также готовятся к публикации Release Notes по API на сайте.  После их выхода будет сделан соответствующий анонс.   ## Авторизация Авторизация осуществляется по ключам API, которые  владелец личного кабинета (главный пользователь) самостоятельно  генерирует в разделе   [Профиль --> Настройки --> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api). <br>Обратите внимание, что ключ отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный ключ следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: .........`. <br> <br>Внимание! Изменился домен для методов статистики, актуальный: https://statistics-api.wildberries.ru ## Форматы ### Дата и время Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul> ## Release Notes    #### 2023.01.13 v1.7      Добавлено описание API рекламы  #### 2022.12.21 v1.6 Добавлена инструкция по загрузке статистики в Excel #### 2022.12.15 v1.5  Новая авторизация для методов API статистики 2022.12.15 в v1.5: #### 2022.10.31 v1.4  Метод будет отключен 2022.10.31 в v1.4: <ul> <li> `/content/v1/cards/list` </ul>  #### 2022.09.20 v1.2  В связи с переходом на новое API Контента старые методы будут отключены. К их числу относятся: <ul> <li> `/card/_*` <li> `/api/v1/config/_*` <li> `/api/v1/directory/_*` </ul> Данные методы теперь возвращают код 404.  Новое API Контента описано в данном документе в разделах Контент / *
 *
 * OpenAPI spec version: 1.7
 * 
 * Generated by: https://github.com/Wildberries-api/Wildberries-codegen.git
 * Wildberries Codegen version: 3.0.37
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
 * V0CpmBody Class Doc Comment
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */
class V0CpmBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $WildberriesModelName = 'v0_cpm_body';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesTypes = [
        'advert_id' => 'int',
'type' => 'int',
'cpm' => 'int',
'param' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesFormats = [
        'advert_id' => null,
'type' => null,
'cpm' => null,
'param' => null    ];

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
        'advert_id' => 'advertId',
'type' => 'type',
'cpm' => 'cpm',
'param' => 'param'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'advert_id' => 'setAdvertId',
'type' => 'setType',
'cpm' => 'setCpm',
'param' => 'setParam'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'advert_id' => 'getAdvertId',
'type' => 'getType',
'cpm' => 'getCpm',
'param' => 'getParam'    ];

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

    const TYPE_5 = 5;
const TYPE_6 = 6;
const TYPE_7 = 7;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_5,
self::TYPE_6,
self::TYPE_7,        ];
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
        $this->container['advert_id'] = isset($data['advert_id']) ? $data['advert_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cpm'] = isset($data['cpm']) ? $data['cpm'] : null;
        $this->container['param'] = isset($data['param']) ? $data['param'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets advert_id
     *
     * @return int
     */
    public function getAdvertId()
    {
        return $this->container['advert_id'];
    }

    /**
     * Sets advert_id
     *
     * @param int $advert_id Идентификатор РК, где меняется ставка
     *
     * @return $this
     */
    public function setAdvertId($advert_id)
    {
        $this->container['advert_id'] = $advert_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type <dl> <dt>Тип РК, где меняется ставка:</dt> <dd><code>5</code> - реклама в карточке товара</dd> <dd><code>6</code> - реклама в поиске</dd> <dd><code>7</code> - реклама в рекомендациях на главной странице</dd> </dl>
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets cpm
     *
     * @return int
     */
    public function getCpm()
    {
        return $this->container['cpm'];
    }

    /**
     * Sets cpm
     *
     * @param int $cpm Новое значение ставки
     *
     * @return $this
     */
    public function setCpm($cpm)
    {
        $this->container['cpm'] = $cpm;

        return $this;
    }

    /**
     * Gets param
     *
     * @return int
     */
    public function getParam()
    {
        return $this->container['param'];
    }

    /**
     * Sets param
     *
     * @param int $param Параметр, для которго будет внесено изменение (является значением `subjectId` или `setId` в зависимости от типа РК)
     *
     * @return $this
     */
    public function setParam($param)
    {
        $this->container['param'] = $param;

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
