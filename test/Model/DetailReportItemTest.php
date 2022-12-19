<?php
/**
 * DetailReportItemTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API продавца
 *
 * # Общее описание <style> .version {   border: 0.1rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #32329FE6;   height: 25px;   width: 150px;   text-align: center }, </style> <style> .warning {   border: 1.6rem #b3b3b3 solid;   background-color: #F9F9F9;   color: #247706;   text-align: center } </style>  Wildberries API предоставляет продавцам возможность управления магазином и получения оперативной и статистической информации по протоколу HTTP RestAPI. <br> Описание API предоставляется в формате [Swagger](https://swagger.io/) (Open API) и может быть использовано для импорта в другие инструменты (такие как PostMan) или генерации клиентского кода на различных языках программирования с помощью [Swagger CodeGen](https://swagger.io/tools/swagger-codegen/)  <ul> <li> Описание в оригинальном swagger-формате <a href=\"/swagger\">swagger</a> <li> OpenAPI-файл <a href=\"/swagger.yaml\">swagger.yaml</a> </ul>  <br> Для ручной проверки API вы можете использовать: <ul> <li> Под ОС Windows - [PostMan](https://www.postman.com/) <li> Под ОС Linux - [curl](https://curl.se/)  </ul>  ## Поддержка <br> Техническая поддержка осуществляется через обращения в личном кабинете продавца. При создании нового обращения в техподдержку используйте категорию API. <br> Новости и изменения, касающиеся API, публикуются в [новостной ленте Wildberries](https://seller.wildberries.ru/news). <br> Также готовятся к публикации Release Notes по API на сайте.  После их выхода будет сделан соответствующий анонс.   ## Авторизация Вызов любого метода API должен быть авторизован.  Авторизация осуществляется по ключам API, которые  владелец личного кабинета (главный пользователь) самостоятельно  генерирует в разделе   [Профиль --> Настройки --> Доступ к API](https://seller.wildberries.ru/supplier-settings/access-to-api) для статистики   и [Профиль --> Настройки --> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api) для остальных методов.   <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a> управление всеми ключами будет перенесено в единую вкладку. </p>  ### Авторизация для методов Статистики При работе с методами Статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к API\". <br>Созданный ключ отображается в личном кабинете как \"Ключ для работы с API статистики x64\". <br>Его следует скопировать и добавлять в каждый запрос, прибавляя к запросу параметр `key`. <br>Выглядеть запрос будет примерно так: `https://suppliers-stats.wildberries.ru/api/v1/supplier/stocks?dateFrom=2022-03-25&key=.........`  <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a>: <ul>   <li>Управление всеми ключами будет перенесено в единую вкладку   <li>Для доступа к API Статистики нужно будет указывать домен <code><b>https://statistics-api.wildberries.ru</b></code>   <li>Ключ авторизации необходимо будет указывать в HTTP-заголовке <code>Authorization</code>, а не в строке параметров </ul> </p>  ### Авторизация для нестатистических методов При работе со всеми методами кроме статистики ключ авторизации генерируется в разделе \"Профиль --> Настройки --> Доступ к новому API\". <br>Обратите внимание, что ключ отображается ТОЛЬКО в момент создания. Его надо сохранить, потому что больше его отобразить будет нельзя. <br>Созданный ключ следует добавлять в каждый запрос, прибавляя к запросу заголовок (http-header) формата `Authorization: .........`. <p> <b>ВНИМАНИЕ!</b> В соответствии с <a href=\"#section/Obshee-opisanie/ANONS-Edinyj-LK-upravleniya-klyuchami-API\">Анонсом</a>: данный раздел ЛК можно будет использовать для управления всеми типами ключей. </p>  ## Форматы ### Дата и время Во всех методах API статистики дата и время передаются в формате [RFC3339](https://datatracker.ietf.org/doc/html/rfc3339).  <br> В большинстве случаев вы можете передать дату или дату со временем. Если время не указано, оно принимается равным 00:00:00. Время можно указывать с точностью до секунд или миллисекунд.  Литера `Z` в конце строки означает часовой пояс UTC. При ее отсутствии время считается в часовом поясе МСК (UTC+3). <br> Примеры: <ul> <li> `2019-06-20` <li> `2019-06-20T00:00:00Z` <li> `2019-06-20T23:59:59` <li> `2019-06-20T00:00:00.12345Z` <li> `2019-06-20T00:00:00.12345` <li> `2017-03-25T00:00:00` </ul>  ## АНОНС - Единый ЛК управления ключами API WILDBERRIES начинает постепенный перевод аккаунтов на новую (единую) схему управления токенами («ключами») публичного API продавцов.  <br> <br> **ВАЖНО** : описанные ниже изменения будут становиться доступными для продавцов постепенно в течение ноября 2022г. Если изменения уже стали доступны, в настройках магазина из-под аккаунта Владельца останется одна вкладка `Доступ в новому API` вместо двух.  <br> <br> Теперь управление **всеми** ключами программного доступа к магазину будет осуществляться в интерфейсе, доступном по адресу [Настройки -> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api). <br> Для создаваемых ключей теперь указывается `Тип ключа`, который определяет, к какой группе сервисов данный ключ имеет доступ.  На данный момент доступно два типа, список будет расширяться: <ul> <li> `Стандартный`: дает доступ к методам API Контент, Маркетплейс, Цены и Скидки. <li> `Статистика`: дает доступ только к отчетам по статистике </ul> <br> Также при создании ключа необходимо указать его Имя - произвольную строку, которая будет  выводиться в списке ключей в качестве подсказки. Пример: \"Для онлайн бухгалтерии\"  ### Информация для пользователей API статистики  Предыдущие версии ключей (так называемые `Ключ для работы с API статистики x64`) продолжат работать в прежнем режиме. По завершении перевода всех аккаунтов на новую схему сообщим об этом отдельной новостью, где также укажем дату, до которой будут поддерживаться старые токены «x32» и «x64» (ориентировочно до середины января). <br> <br>С 29 ноября новые аккаунты будут создаваться сразу с новой схемой управления токенами. <br> Чтобы перейти со старого ключа на новый, следуйте инструкции: 1. Сгенерируйте новый ключ в разделе [Настройки -> Доступ к новому API](https://seller.wildberries.ru/supplier-settings/access-to-new-api).    <br><b>Важно</b>: при генерации выберите тип ключа `Статистика` 2. Новый ключ следует указывать в HTTP-заголовке `Authorization`.    <br>Его не надо указывать в самом запросе как раньше (так называемых query parameters),    то есть параметр `&key=...` следует удалить из запроса 3. При обращении за статистикой необходимо сменить адрес (endpoint) с https://suppliers-stats.wildberries.ru/ на https://statistics-api.wildberries.ru/   ## Release Notes  #### 2022.10.31 v1.4  Метод будет отключен 2022.10.31 в v1.4: <ul> <li> `/content/v1/cards/list` </ul>  #### 2022.09.20 v1.2  В связи с переходом на новое API Контента старые методы будут отключены. К их числу относятся: <ul> <li> `/card/_*` <li> `/api/v1/config/_*` <li> `/api/v1/directory/_*` </ul> Данные методы теперь возвращают код 404.  Новое API Контента описано в данном документе в разделах Контент / *
 *
 * OpenAPI spec version: 1.4
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.36
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * DetailReportItemTest Class Doc Comment
 *
 * @category    Class
 * @description DetailReportItem
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DetailReportItemTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "DetailReportItem"
     */
    public function testDetailReportItem()
    {
    }

    /**
     * Test attribute "realizationreport_id"
     */
    public function testPropertyRealizationreportId()
    {
    }

    /**
     * Test attribute "date_from"
     */
    public function testPropertyDateFrom()
    {
    }

    /**
     * Test attribute "date_to"
     */
    public function testPropertyDateTo()
    {
    }

    /**
     * Test attribute "create_dt"
     */
    public function testPropertyCreateDt()
    {
    }

    /**
     * Test attribute "suppliercontract_code"
     */
    public function testPropertySuppliercontractCode()
    {
    }

    /**
     * Test attribute "rrd_id"
     */
    public function testPropertyRrdId()
    {
    }

    /**
     * Test attribute "gi_id"
     */
    public function testPropertyGiId()
    {
    }

    /**
     * Test attribute "subject_name"
     */
    public function testPropertySubjectName()
    {
    }

    /**
     * Test attribute "nm_id"
     */
    public function testPropertyNmId()
    {
    }

    /**
     * Test attribute "brand_name"
     */
    public function testPropertyBrandName()
    {
    }

    /**
     * Test attribute "sa_name"
     */
    public function testPropertySaName()
    {
    }

    /**
     * Test attribute "ts_name"
     */
    public function testPropertyTsName()
    {
    }

    /**
     * Test attribute "barcode"
     */
    public function testPropertyBarcode()
    {
    }

    /**
     * Test attribute "doc_type_name"
     */
    public function testPropertyDocTypeName()
    {
    }

    /**
     * Test attribute "quantity"
     */
    public function testPropertyQuantity()
    {
    }

    /**
     * Test attribute "retail_price"
     */
    public function testPropertyRetailPrice()
    {
    }

    /**
     * Test attribute "retail_amount"
     */
    public function testPropertyRetailAmount()
    {
    }

    /**
     * Test attribute "sale_percent"
     */
    public function testPropertySalePercent()
    {
    }

    /**
     * Test attribute "commission_percent"
     */
    public function testPropertyCommissionPercent()
    {
    }

    /**
     * Test attribute "office_name"
     */
    public function testPropertyOfficeName()
    {
    }

    /**
     * Test attribute "supplier_oper_name"
     */
    public function testPropertySupplierOperName()
    {
    }

    /**
     * Test attribute "order_dt"
     */
    public function testPropertyOrderDt()
    {
    }

    /**
     * Test attribute "sale_dt"
     */
    public function testPropertySaleDt()
    {
    }

    /**
     * Test attribute "rr_dt"
     */
    public function testPropertyRrDt()
    {
    }

    /**
     * Test attribute "shk_id"
     */
    public function testPropertyShkId()
    {
    }

    /**
     * Test attribute "retail_price_withdisc_rub"
     */
    public function testPropertyRetailPriceWithdiscRub()
    {
    }

    /**
     * Test attribute "delivery_amount"
     */
    public function testPropertyDeliveryAmount()
    {
    }

    /**
     * Test attribute "return_amount"
     */
    public function testPropertyReturnAmount()
    {
    }

    /**
     * Test attribute "delivery_rub"
     */
    public function testPropertyDeliveryRub()
    {
    }

    /**
     * Test attribute "gi_box_type_name"
     */
    public function testPropertyGiBoxTypeName()
    {
    }

    /**
     * Test attribute "product_discount_for_report"
     */
    public function testPropertyProductDiscountForReport()
    {
    }

    /**
     * Test attribute "supplier_promo"
     */
    public function testPropertySupplierPromo()
    {
    }

    /**
     * Test attribute "rid"
     */
    public function testPropertyRid()
    {
    }

    /**
     * Test attribute "ppvz_spp_prc"
     */
    public function testPropertyPpvzSppPrc()
    {
    }

    /**
     * Test attribute "ppvz_kvw_prc_base"
     */
    public function testPropertyPpvzKvwPrcBase()
    {
    }

    /**
     * Test attribute "ppvz_kvw_prc"
     */
    public function testPropertyPpvzKvwPrc()
    {
    }

    /**
     * Test attribute "ppvz_sales_commission"
     */
    public function testPropertyPpvzSalesCommission()
    {
    }

    /**
     * Test attribute "ppvz_for_pay"
     */
    public function testPropertyPpvzForPay()
    {
    }

    /**
     * Test attribute "ppvz_reward"
     */
    public function testPropertyPpvzReward()
    {
    }

    /**
     * Test attribute "acquiring_fee"
     */
    public function testPropertyAcquiringFee()
    {
    }

    /**
     * Test attribute "acquiring_bank"
     */
    public function testPropertyAcquiringBank()
    {
    }

    /**
     * Test attribute "ppvz_vw"
     */
    public function testPropertyPpvzVw()
    {
    }

    /**
     * Test attribute "ppvz_vw_nds"
     */
    public function testPropertyPpvzVwNds()
    {
    }

    /**
     * Test attribute "ppvz_office_id"
     */
    public function testPropertyPpvzOfficeId()
    {
    }

    /**
     * Test attribute "ppvz_office_name"
     */
    public function testPropertyPpvzOfficeName()
    {
    }

    /**
     * Test attribute "ppvz_supplier_id"
     */
    public function testPropertyPpvzSupplierId()
    {
    }

    /**
     * Test attribute "ppvz_supplier_name"
     */
    public function testPropertyPpvzSupplierName()
    {
    }

    /**
     * Test attribute "ppvz_inn"
     */
    public function testPropertyPpvzInn()
    {
    }

    /**
     * Test attribute "declaration_number"
     */
    public function testPropertyDeclarationNumber()
    {
    }

    /**
     * Test attribute "bonus_type_name"
     */
    public function testPropertyBonusTypeName()
    {
    }

    /**
     * Test attribute "sticker_id"
     */
    public function testPropertyStickerId()
    {
    }

    /**
     * Test attribute "site_country"
     */
    public function testPropertySiteCountry()
    {
    }

    /**
     * Test attribute "penalty"
     */
    public function testPropertyPenalty()
    {
    }

    /**
     * Test attribute "additional_payment"
     */
    public function testPropertyAdditionalPayment()
    {
    }

    /**
     * Test attribute "srid"
     */
    public function testPropertySrid()
    {
    }
}
