<?php
/**
 * DetailReportItem
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
 * DetailReportItem Class Doc Comment
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */
class DetailReportItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $WildberriesModelName = 'DetailReportItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesTypes = [
        'realizationreport_id' => 'int',
'date_from' => '\DateTime',
'date_to' => '\DateTime',
'create_dt' => '\DateTime',
'suppliercontract_code' => 'object',
'rrd_id' => 'int',
'gi_id' => 'int',
'subject_name' => 'string',
'nm_id' => 'int',
'brand_name' => 'string',
'sa_name' => 'string',
'ts_name' => 'string',
'barcode' => 'string',
'doc_type_name' => 'string',
'quantity' => 'int',
'retail_price' => 'float',
'retail_amount' => 'float',
'sale_percent' => 'int',
'commission_percent' => 'float',
'office_name' => 'string',
'supplier_oper_name' => 'string',
'order_dt' => '\DateTime',
'sale_dt' => '\DateTime',
'rr_dt' => '\DateTime',
'shk_id' => 'int',
'retail_price_withdisc_rub' => 'float',
'delivery_amount' => 'int',
'return_amount' => 'int',
'delivery_rub' => 'float',
'gi_box_type_name' => 'string',
'product_discount_for_report' => 'float',
'supplier_promo' => 'float',
'rid' => 'int',
'ppvz_spp_prc' => 'float',
'ppvz_kvw_prc_base' => 'float',
'ppvz_kvw_prc' => 'float',
'ppvz_sales_commission' => 'float',
'ppvz_for_pay' => 'float',
'ppvz_reward' => 'float',
'acquiring_fee' => 'float',
'acquiring_bank' => 'string',
'ppvz_vw' => 'float',
'ppvz_vw_nds' => 'float',
'ppvz_office_id' => 'int',
'ppvz_office_name' => 'string',
'ppvz_supplier_id' => 'int',
'ppvz_supplier_name' => 'string',
'ppvz_inn' => 'string',
'declaration_number' => 'string',
'bonus_type_name' => 'string',
'sticker_id' => 'string',
'site_country' => 'string',
'penalty' => 'float',
'additional_payment' => 'float',
'srid' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $WildberriesFormats = [
        'realizationreport_id' => null,
'date_from' => 'date-time',
'date_to' => 'date-time',
'create_dt' => 'date-time',
'suppliercontract_code' => null,
'rrd_id' => null,
'gi_id' => null,
'subject_name' => null,
'nm_id' => null,
'brand_name' => null,
'sa_name' => null,
'ts_name' => null,
'barcode' => null,
'doc_type_name' => null,
'quantity' => null,
'retail_price' => null,
'retail_amount' => null,
'sale_percent' => null,
'commission_percent' => null,
'office_name' => null,
'supplier_oper_name' => null,
'order_dt' => 'date-time',
'sale_dt' => 'date-time',
'rr_dt' => 'date-time',
'shk_id' => null,
'retail_price_withdisc_rub' => null,
'delivery_amount' => null,
'return_amount' => null,
'delivery_rub' => null,
'gi_box_type_name' => null,
'product_discount_for_report' => null,
'supplier_promo' => null,
'rid' => null,
'ppvz_spp_prc' => null,
'ppvz_kvw_prc_base' => null,
'ppvz_kvw_prc' => null,
'ppvz_sales_commission' => null,
'ppvz_for_pay' => null,
'ppvz_reward' => null,
'acquiring_fee' => null,
'acquiring_bank' => null,
'ppvz_vw' => null,
'ppvz_vw_nds' => null,
'ppvz_office_id' => null,
'ppvz_office_name' => null,
'ppvz_supplier_id' => null,
'ppvz_supplier_name' => null,
'ppvz_inn' => null,
'declaration_number' => null,
'bonus_type_name' => null,
'sticker_id' => null,
'site_country' => null,
'penalty' => null,
'additional_payment' => null,
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
        'realizationreport_id' => 'realizationreport_id',
'date_from' => 'date_from',
'date_to' => 'date_to',
'create_dt' => 'create_dt',
'suppliercontract_code' => 'suppliercontract_code',
'rrd_id' => 'rrd_id',
'gi_id' => 'gi_id',
'subject_name' => 'subject_name',
'nm_id' => 'nm_id',
'brand_name' => 'brand_name',
'sa_name' => 'sa_name',
'ts_name' => 'ts_name',
'barcode' => 'barcode',
'doc_type_name' => 'doc_type_name',
'quantity' => 'quantity',
'retail_price' => 'retail_price',
'retail_amount' => 'retail_amount',
'sale_percent' => 'sale_percent',
'commission_percent' => 'commission_percent',
'office_name' => 'office_name',
'supplier_oper_name' => 'supplier_oper_name',
'order_dt' => 'order_dt',
'sale_dt' => 'sale_dt',
'rr_dt' => 'rr_dt',
'shk_id' => 'shk_id',
'retail_price_withdisc_rub' => 'retail_price_withdisc_rub',
'delivery_amount' => 'delivery_amount',
'return_amount' => 'return_amount',
'delivery_rub' => 'delivery_rub',
'gi_box_type_name' => 'gi_box_type_name',
'product_discount_for_report' => 'product_discount_for_report',
'supplier_promo' => 'supplier_promo',
'rid' => 'rid',
'ppvz_spp_prc' => 'ppvz_spp_prc',
'ppvz_kvw_prc_base' => 'ppvz_kvw_prc_base',
'ppvz_kvw_prc' => 'ppvz_kvw_prc',
'ppvz_sales_commission' => 'ppvz_sales_commission',
'ppvz_for_pay' => 'ppvz_for_pay',
'ppvz_reward' => 'ppvz_reward',
'acquiring_fee' => 'acquiring_fee',
'acquiring_bank' => 'acquiring_bank',
'ppvz_vw' => 'ppvz_vw',
'ppvz_vw_nds' => 'ppvz_vw_nds',
'ppvz_office_id' => 'ppvz_office_id',
'ppvz_office_name' => 'ppvz_office_name',
'ppvz_supplier_id' => 'ppvz_supplier_id',
'ppvz_supplier_name' => 'ppvz_supplier_name',
'ppvz_inn' => 'ppvz_inn',
'declaration_number' => 'declaration_number',
'bonus_type_name' => 'bonus_type_name',
'sticker_id' => 'sticker_id',
'site_country' => 'site_country',
'penalty' => 'penalty',
'additional_payment' => 'additional_payment',
'srid' => 'srid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'realizationreport_id' => 'setRealizationreportId',
'date_from' => 'setDateFrom',
'date_to' => 'setDateTo',
'create_dt' => 'setCreateDt',
'suppliercontract_code' => 'setSuppliercontractCode',
'rrd_id' => 'setRrdId',
'gi_id' => 'setGiId',
'subject_name' => 'setSubjectName',
'nm_id' => 'setNmId',
'brand_name' => 'setBrandName',
'sa_name' => 'setSaName',
'ts_name' => 'setTsName',
'barcode' => 'setBarcode',
'doc_type_name' => 'setDocTypeName',
'quantity' => 'setQuantity',
'retail_price' => 'setRetailPrice',
'retail_amount' => 'setRetailAmount',
'sale_percent' => 'setSalePercent',
'commission_percent' => 'setCommissionPercent',
'office_name' => 'setOfficeName',
'supplier_oper_name' => 'setSupplierOperName',
'order_dt' => 'setOrderDt',
'sale_dt' => 'setSaleDt',
'rr_dt' => 'setRrDt',
'shk_id' => 'setShkId',
'retail_price_withdisc_rub' => 'setRetailPriceWithdiscRub',
'delivery_amount' => 'setDeliveryAmount',
'return_amount' => 'setReturnAmount',
'delivery_rub' => 'setDeliveryRub',
'gi_box_type_name' => 'setGiBoxTypeName',
'product_discount_for_report' => 'setProductDiscountForReport',
'supplier_promo' => 'setSupplierPromo',
'rid' => 'setRid',
'ppvz_spp_prc' => 'setPpvzSppPrc',
'ppvz_kvw_prc_base' => 'setPpvzKvwPrcBase',
'ppvz_kvw_prc' => 'setPpvzKvwPrc',
'ppvz_sales_commission' => 'setPpvzSalesCommission',
'ppvz_for_pay' => 'setPpvzForPay',
'ppvz_reward' => 'setPpvzReward',
'acquiring_fee' => 'setAcquiringFee',
'acquiring_bank' => 'setAcquiringBank',
'ppvz_vw' => 'setPpvzVw',
'ppvz_vw_nds' => 'setPpvzVwNds',
'ppvz_office_id' => 'setPpvzOfficeId',
'ppvz_office_name' => 'setPpvzOfficeName',
'ppvz_supplier_id' => 'setPpvzSupplierId',
'ppvz_supplier_name' => 'setPpvzSupplierName',
'ppvz_inn' => 'setPpvzInn',
'declaration_number' => 'setDeclarationNumber',
'bonus_type_name' => 'setBonusTypeName',
'sticker_id' => 'setStickerId',
'site_country' => 'setSiteCountry',
'penalty' => 'setPenalty',
'additional_payment' => 'setAdditionalPayment',
'srid' => 'setSrid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'realizationreport_id' => 'getRealizationreportId',
'date_from' => 'getDateFrom',
'date_to' => 'getDateTo',
'create_dt' => 'getCreateDt',
'suppliercontract_code' => 'getSuppliercontractCode',
'rrd_id' => 'getRrdId',
'gi_id' => 'getGiId',
'subject_name' => 'getSubjectName',
'nm_id' => 'getNmId',
'brand_name' => 'getBrandName',
'sa_name' => 'getSaName',
'ts_name' => 'getTsName',
'barcode' => 'getBarcode',
'doc_type_name' => 'getDocTypeName',
'quantity' => 'getQuantity',
'retail_price' => 'getRetailPrice',
'retail_amount' => 'getRetailAmount',
'sale_percent' => 'getSalePercent',
'commission_percent' => 'getCommissionPercent',
'office_name' => 'getOfficeName',
'supplier_oper_name' => 'getSupplierOperName',
'order_dt' => 'getOrderDt',
'sale_dt' => 'getSaleDt',
'rr_dt' => 'getRrDt',
'shk_id' => 'getShkId',
'retail_price_withdisc_rub' => 'getRetailPriceWithdiscRub',
'delivery_amount' => 'getDeliveryAmount',
'return_amount' => 'getReturnAmount',
'delivery_rub' => 'getDeliveryRub',
'gi_box_type_name' => 'getGiBoxTypeName',
'product_discount_for_report' => 'getProductDiscountForReport',
'supplier_promo' => 'getSupplierPromo',
'rid' => 'getRid',
'ppvz_spp_prc' => 'getPpvzSppPrc',
'ppvz_kvw_prc_base' => 'getPpvzKvwPrcBase',
'ppvz_kvw_prc' => 'getPpvzKvwPrc',
'ppvz_sales_commission' => 'getPpvzSalesCommission',
'ppvz_for_pay' => 'getPpvzForPay',
'ppvz_reward' => 'getPpvzReward',
'acquiring_fee' => 'getAcquiringFee',
'acquiring_bank' => 'getAcquiringBank',
'ppvz_vw' => 'getPpvzVw',
'ppvz_vw_nds' => 'getPpvzVwNds',
'ppvz_office_id' => 'getPpvzOfficeId',
'ppvz_office_name' => 'getPpvzOfficeName',
'ppvz_supplier_id' => 'getPpvzSupplierId',
'ppvz_supplier_name' => 'getPpvzSupplierName',
'ppvz_inn' => 'getPpvzInn',
'declaration_number' => 'getDeclarationNumber',
'bonus_type_name' => 'getBonusTypeName',
'sticker_id' => 'getStickerId',
'site_country' => 'getSiteCountry',
'penalty' => 'getPenalty',
'additional_payment' => 'getAdditionalPayment',
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
        $this->container['realizationreport_id'] = isset($data['realizationreport_id']) ? $data['realizationreport_id'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['create_dt'] = isset($data['create_dt']) ? $data['create_dt'] : null;
        $this->container['suppliercontract_code'] = isset($data['suppliercontract_code']) ? $data['suppliercontract_code'] : null;
        $this->container['rrd_id'] = isset($data['rrd_id']) ? $data['rrd_id'] : null;
        $this->container['gi_id'] = isset($data['gi_id']) ? $data['gi_id'] : null;
        $this->container['subject_name'] = isset($data['subject_name']) ? $data['subject_name'] : null;
        $this->container['nm_id'] = isset($data['nm_id']) ? $data['nm_id'] : null;
        $this->container['brand_name'] = isset($data['brand_name']) ? $data['brand_name'] : null;
        $this->container['sa_name'] = isset($data['sa_name']) ? $data['sa_name'] : null;
        $this->container['ts_name'] = isset($data['ts_name']) ? $data['ts_name'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['doc_type_name'] = isset($data['doc_type_name']) ? $data['doc_type_name'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['retail_price'] = isset($data['retail_price']) ? $data['retail_price'] : null;
        $this->container['retail_amount'] = isset($data['retail_amount']) ? $data['retail_amount'] : null;
        $this->container['sale_percent'] = isset($data['sale_percent']) ? $data['sale_percent'] : null;
        $this->container['commission_percent'] = isset($data['commission_percent']) ? $data['commission_percent'] : null;
        $this->container['office_name'] = isset($data['office_name']) ? $data['office_name'] : null;
        $this->container['supplier_oper_name'] = isset($data['supplier_oper_name']) ? $data['supplier_oper_name'] : null;
        $this->container['order_dt'] = isset($data['order_dt']) ? $data['order_dt'] : null;
        $this->container['sale_dt'] = isset($data['sale_dt']) ? $data['sale_dt'] : null;
        $this->container['rr_dt'] = isset($data['rr_dt']) ? $data['rr_dt'] : null;
        $this->container['shk_id'] = isset($data['shk_id']) ? $data['shk_id'] : null;
        $this->container['retail_price_withdisc_rub'] = isset($data['retail_price_withdisc_rub']) ? $data['retail_price_withdisc_rub'] : null;
        $this->container['delivery_amount'] = isset($data['delivery_amount']) ? $data['delivery_amount'] : null;
        $this->container['return_amount'] = isset($data['return_amount']) ? $data['return_amount'] : null;
        $this->container['delivery_rub'] = isset($data['delivery_rub']) ? $data['delivery_rub'] : null;
        $this->container['gi_box_type_name'] = isset($data['gi_box_type_name']) ? $data['gi_box_type_name'] : null;
        $this->container['product_discount_for_report'] = isset($data['product_discount_for_report']) ? $data['product_discount_for_report'] : null;
        $this->container['supplier_promo'] = isset($data['supplier_promo']) ? $data['supplier_promo'] : null;
        $this->container['rid'] = isset($data['rid']) ? $data['rid'] : null;
        $this->container['ppvz_spp_prc'] = isset($data['ppvz_spp_prc']) ? $data['ppvz_spp_prc'] : null;
        $this->container['ppvz_kvw_prc_base'] = isset($data['ppvz_kvw_prc_base']) ? $data['ppvz_kvw_prc_base'] : null;
        $this->container['ppvz_kvw_prc'] = isset($data['ppvz_kvw_prc']) ? $data['ppvz_kvw_prc'] : null;
        $this->container['ppvz_sales_commission'] = isset($data['ppvz_sales_commission']) ? $data['ppvz_sales_commission'] : null;
        $this->container['ppvz_for_pay'] = isset($data['ppvz_for_pay']) ? $data['ppvz_for_pay'] : null;
        $this->container['ppvz_reward'] = isset($data['ppvz_reward']) ? $data['ppvz_reward'] : null;
        $this->container['acquiring_fee'] = isset($data['acquiring_fee']) ? $data['acquiring_fee'] : null;
        $this->container['acquiring_bank'] = isset($data['acquiring_bank']) ? $data['acquiring_bank'] : null;
        $this->container['ppvz_vw'] = isset($data['ppvz_vw']) ? $data['ppvz_vw'] : null;
        $this->container['ppvz_vw_nds'] = isset($data['ppvz_vw_nds']) ? $data['ppvz_vw_nds'] : null;
        $this->container['ppvz_office_id'] = isset($data['ppvz_office_id']) ? $data['ppvz_office_id'] : null;
        $this->container['ppvz_office_name'] = isset($data['ppvz_office_name']) ? $data['ppvz_office_name'] : null;
        $this->container['ppvz_supplier_id'] = isset($data['ppvz_supplier_id']) ? $data['ppvz_supplier_id'] : null;
        $this->container['ppvz_supplier_name'] = isset($data['ppvz_supplier_name']) ? $data['ppvz_supplier_name'] : null;
        $this->container['ppvz_inn'] = isset($data['ppvz_inn']) ? $data['ppvz_inn'] : null;
        $this->container['declaration_number'] = isset($data['declaration_number']) ? $data['declaration_number'] : null;
        $this->container['bonus_type_name'] = isset($data['bonus_type_name']) ? $data['bonus_type_name'] : null;
        $this->container['sticker_id'] = isset($data['sticker_id']) ? $data['sticker_id'] : null;
        $this->container['site_country'] = isset($data['site_country']) ? $data['site_country'] : null;
        $this->container['penalty'] = isset($data['penalty']) ? $data['penalty'] : null;
        $this->container['additional_payment'] = isset($data['additional_payment']) ? $data['additional_payment'] : null;
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
     * Gets realizationreport_id
     *
     * @return int
     */
    public function getRealizationreportId()
    {
        return $this->container['realizationreport_id'];
    }

    /**
     * Sets realizationreport_id
     *
     * @param int $realizationreport_id Номер отчета
     *
     * @return $this
     */
    public function setRealizationreportId($realizationreport_id)
    {
        $this->container['realizationreport_id'] = $realizationreport_id;

        return $this;
    }

    /**
     * Gets date_from
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param \DateTime $date_from Дата начала отчетного периода <div class=\"version\">С версии 1.0.10</div>
     *
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param \DateTime $date_to Дата конца отчетного периода <div class=\"version\">С версии 1.0.10</div>
     *
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets create_dt
     *
     * @return \DateTime
     */
    public function getCreateDt()
    {
        return $this->container['create_dt'];
    }

    /**
     * Sets create_dt
     *
     * @param \DateTime $create_dt Дата формирования отчёта
     *
     * @return $this
     */
    public function setCreateDt($create_dt)
    {
        $this->container['create_dt'] = $create_dt;

        return $this;
    }

    /**
     * Gets suppliercontract_code
     *
     * @return object
     */
    public function getSuppliercontractCode()
    {
        return $this->container['suppliercontract_code'];
    }

    /**
     * Sets suppliercontract_code
     *
     * @param object $suppliercontract_code Договор
     *
     * @return $this
     */
    public function setSuppliercontractCode($suppliercontract_code)
    {
        $this->container['suppliercontract_code'] = $suppliercontract_code;

        return $this;
    }

    /**
     * Gets rrd_id
     *
     * @return int
     */
    public function getRrdId()
    {
        return $this->container['rrd_id'];
    }

    /**
     * Sets rrd_id
     *
     * @param int $rrd_id Номер строки
     *
     * @return $this
     */
    public function setRrdId($rrd_id)
    {
        $this->container['rrd_id'] = $rrd_id;

        return $this;
    }

    /**
     * Gets gi_id
     *
     * @return int
     */
    public function getGiId()
    {
        return $this->container['gi_id'];
    }

    /**
     * Sets gi_id
     *
     * @param int $gi_id Номер поставки
     *
     * @return $this
     */
    public function setGiId($gi_id)
    {
        $this->container['gi_id'] = $gi_id;

        return $this;
    }

    /**
     * Gets subject_name
     *
     * @return string
     */
    public function getSubjectName()
    {
        return $this->container['subject_name'];
    }

    /**
     * Sets subject_name
     *
     * @param string $subject_name Предмет
     *
     * @return $this
     */
    public function setSubjectName($subject_name)
    {
        $this->container['subject_name'] = $subject_name;

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
     * @param int $nm_id Артикул
     *
     * @return $this
     */
    public function setNmId($nm_id)
    {
        $this->container['nm_id'] = $nm_id;

        return $this;
    }

    /**
     * Gets brand_name
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->container['brand_name'];
    }

    /**
     * Sets brand_name
     *
     * @param string $brand_name Бренд
     *
     * @return $this
     */
    public function setBrandName($brand_name)
    {
        $this->container['brand_name'] = $brand_name;

        return $this;
    }

    /**
     * Gets sa_name
     *
     * @return string
     */
    public function getSaName()
    {
        return $this->container['sa_name'];
    }

    /**
     * Sets sa_name
     *
     * @param string $sa_name Артикул поставщика
     *
     * @return $this
     */
    public function setSaName($sa_name)
    {
        $this->container['sa_name'] = $sa_name;

        return $this;
    }

    /**
     * Gets ts_name
     *
     * @return string
     */
    public function getTsName()
    {
        return $this->container['ts_name'];
    }

    /**
     * Sets ts_name
     *
     * @param string $ts_name Размер
     *
     * @return $this
     */
    public function setTsName($ts_name)
    {
        $this->container['ts_name'] = $ts_name;

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
     * Gets doc_type_name
     *
     * @return string
     */
    public function getDocTypeName()
    {
        return $this->container['doc_type_name'];
    }

    /**
     * Sets doc_type_name
     *
     * @param string $doc_type_name Тип документа
     *
     * @return $this
     */
    public function setDocTypeName($doc_type_name)
    {
        $this->container['doc_type_name'] = $doc_type_name;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Количество
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets retail_price
     *
     * @return float
     */
    public function getRetailPrice()
    {
        return $this->container['retail_price'];
    }

    /**
     * Sets retail_price
     *
     * @param float $retail_price Цена розничная
     *
     * @return $this
     */
    public function setRetailPrice($retail_price)
    {
        $this->container['retail_price'] = $retail_price;

        return $this;
    }

    /**
     * Gets retail_amount
     *
     * @return float
     */
    public function getRetailAmount()
    {
        return $this->container['retail_amount'];
    }

    /**
     * Sets retail_amount
     *
     * @param float $retail_amount Сумма продаж (возвратов)
     *
     * @return $this
     */
    public function setRetailAmount($retail_amount)
    {
        $this->container['retail_amount'] = $retail_amount;

        return $this;
    }

    /**
     * Gets sale_percent
     *
     * @return int
     */
    public function getSalePercent()
    {
        return $this->container['sale_percent'];
    }

    /**
     * Sets sale_percent
     *
     * @param int $sale_percent Согласованная скидка
     *
     * @return $this
     */
    public function setSalePercent($sale_percent)
    {
        $this->container['sale_percent'] = $sale_percent;

        return $this;
    }

    /**
     * Gets commission_percent
     *
     * @return float
     */
    public function getCommissionPercent()
    {
        return $this->container['commission_percent'];
    }

    /**
     * Sets commission_percent
     *
     * @param float $commission_percent Процент комиссии
     *
     * @return $this
     */
    public function setCommissionPercent($commission_percent)
    {
        $this->container['commission_percent'] = $commission_percent;

        return $this;
    }

    /**
     * Gets office_name
     *
     * @return string
     */
    public function getOfficeName()
    {
        return $this->container['office_name'];
    }

    /**
     * Sets office_name
     *
     * @param string $office_name Склад
     *
     * @return $this
     */
    public function setOfficeName($office_name)
    {
        $this->container['office_name'] = $office_name;

        return $this;
    }

    /**
     * Gets supplier_oper_name
     *
     * @return string
     */
    public function getSupplierOperName()
    {
        return $this->container['supplier_oper_name'];
    }

    /**
     * Sets supplier_oper_name
     *
     * @param string $supplier_oper_name Обоснование для оплаты
     *
     * @return $this
     */
    public function setSupplierOperName($supplier_oper_name)
    {
        $this->container['supplier_oper_name'] = $supplier_oper_name;

        return $this;
    }

    /**
     * Gets order_dt
     *
     * @return \DateTime
     */
    public function getOrderDt()
    {
        return $this->container['order_dt'];
    }

    /**
     * Sets order_dt
     *
     * @param \DateTime $order_dt Дата заказа. Присылается с явным указанием часового пояса.
     *
     * @return $this
     */
    public function setOrderDt($order_dt)
    {
        $this->container['order_dt'] = $order_dt;

        return $this;
    }

    /**
     * Gets sale_dt
     *
     * @return \DateTime
     */
    public function getSaleDt()
    {
        return $this->container['sale_dt'];
    }

    /**
     * Sets sale_dt
     *
     * @param \DateTime $sale_dt Дата продажи. Присылается с явным указанием часового пояса.
     *
     * @return $this
     */
    public function setSaleDt($sale_dt)
    {
        $this->container['sale_dt'] = $sale_dt;

        return $this;
    }

    /**
     * Gets rr_dt
     *
     * @return \DateTime
     */
    public function getRrDt()
    {
        return $this->container['rr_dt'];
    }

    /**
     * Sets rr_dt
     *
     * @param \DateTime $rr_dt Дата операции. Присылается с явным указанием часового пояса.
     *
     * @return $this
     */
    public function setRrDt($rr_dt)
    {
        $this->container['rr_dt'] = $rr_dt;

        return $this;
    }

    /**
     * Gets shk_id
     *
     * @return int
     */
    public function getShkId()
    {
        return $this->container['shk_id'];
    }

    /**
     * Sets shk_id
     *
     * @param int $shk_id Штрих-код
     *
     * @return $this
     */
    public function setShkId($shk_id)
    {
        $this->container['shk_id'] = $shk_id;

        return $this;
    }

    /**
     * Gets retail_price_withdisc_rub
     *
     * @return float
     */
    public function getRetailPriceWithdiscRub()
    {
        return $this->container['retail_price_withdisc_rub'];
    }

    /**
     * Sets retail_price_withdisc_rub
     *
     * @param float $retail_price_withdisc_rub Цена розничная с учетом согласованной скидки
     *
     * @return $this
     */
    public function setRetailPriceWithdiscRub($retail_price_withdisc_rub)
    {
        $this->container['retail_price_withdisc_rub'] = $retail_price_withdisc_rub;

        return $this;
    }

    /**
     * Gets delivery_amount
     *
     * @return int
     */
    public function getDeliveryAmount()
    {
        return $this->container['delivery_amount'];
    }

    /**
     * Sets delivery_amount
     *
     * @param int $delivery_amount Количество доставок
     *
     * @return $this
     */
    public function setDeliveryAmount($delivery_amount)
    {
        $this->container['delivery_amount'] = $delivery_amount;

        return $this;
    }

    /**
     * Gets return_amount
     *
     * @return int
     */
    public function getReturnAmount()
    {
        return $this->container['return_amount'];
    }

    /**
     * Sets return_amount
     *
     * @param int $return_amount Количество возвратов
     *
     * @return $this
     */
    public function setReturnAmount($return_amount)
    {
        $this->container['return_amount'] = $return_amount;

        return $this;
    }

    /**
     * Gets delivery_rub
     *
     * @return float
     */
    public function getDeliveryRub()
    {
        return $this->container['delivery_rub'];
    }

    /**
     * Sets delivery_rub
     *
     * @param float $delivery_rub Стоимость логистики
     *
     * @return $this
     */
    public function setDeliveryRub($delivery_rub)
    {
        $this->container['delivery_rub'] = $delivery_rub;

        return $this;
    }

    /**
     * Gets gi_box_type_name
     *
     * @return string
     */
    public function getGiBoxTypeName()
    {
        return $this->container['gi_box_type_name'];
    }

    /**
     * Sets gi_box_type_name
     *
     * @param string $gi_box_type_name Тип коробов
     *
     * @return $this
     */
    public function setGiBoxTypeName($gi_box_type_name)
    {
        $this->container['gi_box_type_name'] = $gi_box_type_name;

        return $this;
    }

    /**
     * Gets product_discount_for_report
     *
     * @return float
     */
    public function getProductDiscountForReport()
    {
        return $this->container['product_discount_for_report'];
    }

    /**
     * Sets product_discount_for_report
     *
     * @param float $product_discount_for_report Согласованный продуктовый дисконт
     *
     * @return $this
     */
    public function setProductDiscountForReport($product_discount_for_report)
    {
        $this->container['product_discount_for_report'] = $product_discount_for_report;

        return $this;
    }

    /**
     * Gets supplier_promo
     *
     * @return float
     */
    public function getSupplierPromo()
    {
        return $this->container['supplier_promo'];
    }

    /**
     * Sets supplier_promo
     *
     * @param float $supplier_promo Промокод
     *
     * @return $this
     */
    public function setSupplierPromo($supplier_promo)
    {
        $this->container['supplier_promo'] = $supplier_promo;

        return $this;
    }

    /**
     * Gets rid
     *
     * @return int
     */
    public function getRid()
    {
        return $this->container['rid'];
    }

    /**
     * Sets rid
     *
     * @param int $rid Уникальный идентификатор позиции заказа
     *
     * @return $this
     */
    public function setRid($rid)
    {
        $this->container['rid'] = $rid;

        return $this;
    }

    /**
     * Gets ppvz_spp_prc
     *
     * @return float
     */
    public function getPpvzSppPrc()
    {
        return $this->container['ppvz_spp_prc'];
    }

    /**
     * Sets ppvz_spp_prc
     *
     * @param float $ppvz_spp_prc Скидка постоянного покупателя
     *
     * @return $this
     */
    public function setPpvzSppPrc($ppvz_spp_prc)
    {
        $this->container['ppvz_spp_prc'] = $ppvz_spp_prc;

        return $this;
    }

    /**
     * Gets ppvz_kvw_prc_base
     *
     * @return float
     */
    public function getPpvzKvwPrcBase()
    {
        return $this->container['ppvz_kvw_prc_base'];
    }

    /**
     * Sets ppvz_kvw_prc_base
     *
     * @param float $ppvz_kvw_prc_base Размер кВВ без НДС, % базовый
     *
     * @return $this
     */
    public function setPpvzKvwPrcBase($ppvz_kvw_prc_base)
    {
        $this->container['ppvz_kvw_prc_base'] = $ppvz_kvw_prc_base;

        return $this;
    }

    /**
     * Gets ppvz_kvw_prc
     *
     * @return float
     */
    public function getPpvzKvwPrc()
    {
        return $this->container['ppvz_kvw_prc'];
    }

    /**
     * Sets ppvz_kvw_prc
     *
     * @param float $ppvz_kvw_prc Итоговый кВВ без НДС, %
     *
     * @return $this
     */
    public function setPpvzKvwPrc($ppvz_kvw_prc)
    {
        $this->container['ppvz_kvw_prc'] = $ppvz_kvw_prc;

        return $this;
    }

    /**
     * Gets ppvz_sales_commission
     *
     * @return float
     */
    public function getPpvzSalesCommission()
    {
        return $this->container['ppvz_sales_commission'];
    }

    /**
     * Sets ppvz_sales_commission
     *
     * @param float $ppvz_sales_commission Вознаграждение с продаж до вычета услуг поверенного, без НДС
     *
     * @return $this
     */
    public function setPpvzSalesCommission($ppvz_sales_commission)
    {
        $this->container['ppvz_sales_commission'] = $ppvz_sales_commission;

        return $this;
    }

    /**
     * Gets ppvz_for_pay
     *
     * @return float
     */
    public function getPpvzForPay()
    {
        return $this->container['ppvz_for_pay'];
    }

    /**
     * Sets ppvz_for_pay
     *
     * @param float $ppvz_for_pay К перечислению продавцу за реализованный товар
     *
     * @return $this
     */
    public function setPpvzForPay($ppvz_for_pay)
    {
        $this->container['ppvz_for_pay'] = $ppvz_for_pay;

        return $this;
    }

    /**
     * Gets ppvz_reward
     *
     * @return float
     */
    public function getPpvzReward()
    {
        return $this->container['ppvz_reward'];
    }

    /**
     * Sets ppvz_reward
     *
     * @param float $ppvz_reward Возмещение за выдачу и возврат товаров на ПВЗ
     *
     * @return $this
     */
    public function setPpvzReward($ppvz_reward)
    {
        $this->container['ppvz_reward'] = $ppvz_reward;

        return $this;
    }

    /**
     * Gets acquiring_fee
     *
     * @return float
     */
    public function getAcquiringFee()
    {
        return $this->container['acquiring_fee'];
    }

    /**
     * Sets acquiring_fee
     *
     * @param float $acquiring_fee Возмещение расходов по эквайрингу. <br>Расходы WB на услуги эквайринга: вычитаются из вознаграждения WB и не влияют на доход продавца.
     *
     * @return $this
     */
    public function setAcquiringFee($acquiring_fee)
    {
        $this->container['acquiring_fee'] = $acquiring_fee;

        return $this;
    }

    /**
     * Gets acquiring_bank
     *
     * @return string
     */
    public function getAcquiringBank()
    {
        return $this->container['acquiring_bank'];
    }

    /**
     * Sets acquiring_bank
     *
     * @param string $acquiring_bank Наименование банка, предоставляющего услуги эквайринга
     *
     * @return $this
     */
    public function setAcquiringBank($acquiring_bank)
    {
        $this->container['acquiring_bank'] = $acquiring_bank;

        return $this;
    }

    /**
     * Gets ppvz_vw
     *
     * @return float
     */
    public function getPpvzVw()
    {
        return $this->container['ppvz_vw'];
    }

    /**
     * Sets ppvz_vw
     *
     * @param float $ppvz_vw Вознаграждение WB без НДС
     *
     * @return $this
     */
    public function setPpvzVw($ppvz_vw)
    {
        $this->container['ppvz_vw'] = $ppvz_vw;

        return $this;
    }

    /**
     * Gets ppvz_vw_nds
     *
     * @return float
     */
    public function getPpvzVwNds()
    {
        return $this->container['ppvz_vw_nds'];
    }

    /**
     * Sets ppvz_vw_nds
     *
     * @param float $ppvz_vw_nds НДС с вознаграждения WB
     *
     * @return $this
     */
    public function setPpvzVwNds($ppvz_vw_nds)
    {
        $this->container['ppvz_vw_nds'] = $ppvz_vw_nds;

        return $this;
    }

    /**
     * Gets ppvz_office_id
     *
     * @return int
     */
    public function getPpvzOfficeId()
    {
        return $this->container['ppvz_office_id'];
    }

    /**
     * Sets ppvz_office_id
     *
     * @param int $ppvz_office_id Номер офиса
     *
     * @return $this
     */
    public function setPpvzOfficeId($ppvz_office_id)
    {
        $this->container['ppvz_office_id'] = $ppvz_office_id;

        return $this;
    }

    /**
     * Gets ppvz_office_name
     *
     * @return string
     */
    public function getPpvzOfficeName()
    {
        return $this->container['ppvz_office_name'];
    }

    /**
     * Sets ppvz_office_name
     *
     * @param string $ppvz_office_name Наименование офиса доставки
     *
     * @return $this
     */
    public function setPpvzOfficeName($ppvz_office_name)
    {
        $this->container['ppvz_office_name'] = $ppvz_office_name;

        return $this;
    }

    /**
     * Gets ppvz_supplier_id
     *
     * @return int
     */
    public function getPpvzSupplierId()
    {
        return $this->container['ppvz_supplier_id'];
    }

    /**
     * Sets ppvz_supplier_id
     *
     * @param int $ppvz_supplier_id Номер партнера
     *
     * @return $this
     */
    public function setPpvzSupplierId($ppvz_supplier_id)
    {
        $this->container['ppvz_supplier_id'] = $ppvz_supplier_id;

        return $this;
    }

    /**
     * Gets ppvz_supplier_name
     *
     * @return string
     */
    public function getPpvzSupplierName()
    {
        return $this->container['ppvz_supplier_name'];
    }

    /**
     * Sets ppvz_supplier_name
     *
     * @param string $ppvz_supplier_name Партнер
     *
     * @return $this
     */
    public function setPpvzSupplierName($ppvz_supplier_name)
    {
        $this->container['ppvz_supplier_name'] = $ppvz_supplier_name;

        return $this;
    }

    /**
     * Gets ppvz_inn
     *
     * @return string
     */
    public function getPpvzInn()
    {
        return $this->container['ppvz_inn'];
    }

    /**
     * Sets ppvz_inn
     *
     * @param string $ppvz_inn ИНН партнера
     *
     * @return $this
     */
    public function setPpvzInn($ppvz_inn)
    {
        $this->container['ppvz_inn'] = $ppvz_inn;

        return $this;
    }

    /**
     * Gets declaration_number
     *
     * @return string
     */
    public function getDeclarationNumber()
    {
        return $this->container['declaration_number'];
    }

    /**
     * Sets declaration_number
     *
     * @param string $declaration_number Номер таможенной декларации
     *
     * @return $this
     */
    public function setDeclarationNumber($declaration_number)
    {
        $this->container['declaration_number'] = $declaration_number;

        return $this;
    }

    /**
     * Gets bonus_type_name
     *
     * @return string
     */
    public function getBonusTypeName()
    {
        return $this->container['bonus_type_name'];
    }

    /**
     * Sets bonus_type_name
     *
     * @param string $bonus_type_name Обоснование штрафов и доплат. <br> Поле будет в ответе, если заполнены(о) поля `penalty` или `additional_payment`.
     *
     * @return $this
     */
    public function setBonusTypeName($bonus_type_name)
    {
        $this->container['bonus_type_name'] = $bonus_type_name;

        return $this;
    }

    /**
     * Gets sticker_id
     *
     * @return string
     */
    public function getStickerId()
    {
        return $this->container['sticker_id'];
    }

    /**
     * Sets sticker_id
     *
     * @param string $sticker_id Цифровое значение стикера, который клеится на товар в процессе сборки заказа по системе Маркетплейс.
     *
     * @return $this
     */
    public function setStickerId($sticker_id)
    {
        $this->container['sticker_id'] = $sticker_id;

        return $this;
    }

    /**
     * Gets site_country
     *
     * @return string
     */
    public function getSiteCountry()
    {
        return $this->container['site_country'];
    }

    /**
     * Sets site_country
     *
     * @param string $site_country Страна продажи
     *
     * @return $this
     */
    public function setSiteCountry($site_country)
    {
        $this->container['site_country'] = $site_country;

        return $this;
    }

    /**
     * Gets penalty
     *
     * @return float
     */
    public function getPenalty()
    {
        return $this->container['penalty'];
    }

    /**
     * Sets penalty
     *
     * @param float $penalty Штрафы
     *
     * @return $this
     */
    public function setPenalty($penalty)
    {
        $this->container['penalty'] = $penalty;

        return $this;
    }

    /**
     * Gets additional_payment
     *
     * @return float
     */
    public function getAdditionalPayment()
    {
        return $this->container['additional_payment'];
    }

    /**
     * Sets additional_payment
     *
     * @param float $additional_payment Доплаты
     *
     * @return $this
     */
    public function setAdditionalPayment($additional_payment)
    {
        $this->container['additional_payment'] = $additional_payment;

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
