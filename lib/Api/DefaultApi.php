<?php
/**
 * DefaultApi
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

namespace Wildberries\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Wildberries\Client\ApiException;
use Wildberries\Client\Configuration;
use Wildberries\Client\HeaderSelector;
use Wildberries\Client\ObjectSerializer;

/**
 * DefaultApi Class Doc Comment
 *
 * @category Class
 * @package  Wildberries\Client
 * @author   Wildberries Codegen team
 * @link     https://github.com/Wildberries-api/Wildberries-codegen
 */
class DefaultApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiV1SupplierExciseGoodsGet
     *
     * Отчет по КиЗам
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Wildberries\Client\Model\ExcItem[]
     */
    public function apiV1SupplierExciseGoodsGet($key, $date_from)
    {
        list($response) = $this->apiV1SupplierExciseGoodsGetWithHttpInfo($key, $date_from);
        return $response;
    }

    /**
     * Operation apiV1SupplierExciseGoodsGetWithHttpInfo
     *
     * Отчет по КиЗам
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Wildberries\Client\Model\ExcItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1SupplierExciseGoodsGetWithHttpInfo($key, $date_from)
    {
        $returnType = '\Wildberries\Client\Model\ExcItem[]';
        $request = $this->apiV1SupplierExciseGoodsGetRequest($key, $date_from);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wildberries\Client\Model\ExcItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1SupplierExciseGoodsGetAsync
     *
     * Отчет по КиЗам
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierExciseGoodsGetAsync($key, $date_from)
    {
        return $this->apiV1SupplierExciseGoodsGetAsyncWithHttpInfo($key, $date_from)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1SupplierExciseGoodsGetAsyncWithHttpInfo
     *
     * Отчет по КиЗам
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierExciseGoodsGetAsyncWithHttpInfo($key, $date_from)
    {
        $returnType = '\Wildberries\Client\Model\ExcItem[]';
        $request = $this->apiV1SupplierExciseGoodsGetRequest($key, $date_from);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1SupplierExciseGoodsGet'
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1SupplierExciseGoodsGetRequest($key, $date_from)
    {
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling apiV1SupplierExciseGoodsGet'
            );
        }
        // verify the required parameter 'date_from' is set
        if ($date_from === null || (is_array($date_from) && count($date_from) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_from when calling apiV1SupplierExciseGoodsGet'
            );
        }

        $resourcePath = '/api/v1/supplier/excise-goods';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key, null);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from, 'RFC3339');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1SupplierIncomesGet
     *
     * Поставки
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Wildberries\Client\Model\IncomesItem[]
     */
    public function apiV1SupplierIncomesGet($key, $date_from)
    {
        list($response) = $this->apiV1SupplierIncomesGetWithHttpInfo($key, $date_from);
        return $response;
    }

    /**
     * Operation apiV1SupplierIncomesGetWithHttpInfo
     *
     * Поставки
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Wildberries\Client\Model\IncomesItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1SupplierIncomesGetWithHttpInfo($key, $date_from)
    {
        $returnType = '\Wildberries\Client\Model\IncomesItem[]';
        $request = $this->apiV1SupplierIncomesGetRequest($key, $date_from);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wildberries\Client\Model\IncomesItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1SupplierIncomesGetAsync
     *
     * Поставки
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierIncomesGetAsync($key, $date_from)
    {
        return $this->apiV1SupplierIncomesGetAsyncWithHttpInfo($key, $date_from)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1SupplierIncomesGetAsyncWithHttpInfo
     *
     * Поставки
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierIncomesGetAsyncWithHttpInfo($key, $date_from)
    {
        $returnType = '\Wildberries\Client\Model\IncomesItem[]';
        $request = $this->apiV1SupplierIncomesGetRequest($key, $date_from);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1SupplierIncomesGet'
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1SupplierIncomesGetRequest($key, $date_from)
    {
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling apiV1SupplierIncomesGet'
            );
        }
        // verify the required parameter 'date_from' is set
        if ($date_from === null || (is_array($date_from) && count($date_from) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_from when calling apiV1SupplierIncomesGet'
            );
        }

        $resourcePath = '/api/v1/supplier/incomes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key, null);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from, 'RFC3339');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1SupplierOrdersGet
     *
     * Заказы
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Wildberries\Client\Model\OrdersItem[]
     */
    public function apiV1SupplierOrdersGet($key, $date_from, $flag = '0')
    {
        list($response) = $this->apiV1SupplierOrdersGetWithHttpInfo($key, $date_from, $flag);
        return $response;
    }

    /**
     * Operation apiV1SupplierOrdersGetWithHttpInfo
     *
     * Заказы
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Wildberries\Client\Model\OrdersItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1SupplierOrdersGetWithHttpInfo($key, $date_from, $flag = '0')
    {
        $returnType = '\Wildberries\Client\Model\OrdersItem[]';
        $request = $this->apiV1SupplierOrdersGetRequest($key, $date_from, $flag);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wildberries\Client\Model\OrdersItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1SupplierOrdersGetAsync
     *
     * Заказы
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierOrdersGetAsync($key, $date_from, $flag = '0')
    {
        return $this->apiV1SupplierOrdersGetAsyncWithHttpInfo($key, $date_from, $flag)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1SupplierOrdersGetAsyncWithHttpInfo
     *
     * Заказы
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierOrdersGetAsyncWithHttpInfo($key, $date_from, $flag = '0')
    {
        $returnType = '\Wildberries\Client\Model\OrdersItem[]';
        $request = $this->apiV1SupplierOrdersGetRequest($key, $date_from, $flag);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1SupplierOrdersGet'
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1SupplierOrdersGetRequest($key, $date_from, $flag = '0')
    {
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling apiV1SupplierOrdersGet'
            );
        }
        // verify the required parameter 'date_from' is set
        if ($date_from === null || (is_array($date_from) && count($date_from) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_from when calling apiV1SupplierOrdersGet'
            );
        }

        $resourcePath = '/api/v1/supplier/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key, null);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from, 'RFC3339');
        }
        // query params
        if ($flag !== null) {
            $queryParams['flag'] = ObjectSerializer::toQueryValue($flag, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1SupplierReportDetailByPeriodGet
     *
     * Отчет о продажах по реализации
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  \DateTime $date_to Конечная дата отчета (required)
     * @param  int $limit Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000. (optional, default to 0)
     * @param  int $rrdid Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. (optional)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Wildberries\Client\Model\DetailReportItem[]
     */
    public function apiV1SupplierReportDetailByPeriodGet($key, $date_from, $date_to, $limit = '0', $rrdid = null)
    {
        list($response) = $this->apiV1SupplierReportDetailByPeriodGetWithHttpInfo($key, $date_from, $date_to, $limit, $rrdid);
        return $response;
    }

    /**
     * Operation apiV1SupplierReportDetailByPeriodGetWithHttpInfo
     *
     * Отчет о продажах по реализации
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  \DateTime $date_to Конечная дата отчета (required)
     * @param  int $limit Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000. (optional, default to 0)
     * @param  int $rrdid Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. (optional)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Wildberries\Client\Model\DetailReportItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1SupplierReportDetailByPeriodGetWithHttpInfo($key, $date_from, $date_to, $limit = '0', $rrdid = null)
    {
        $returnType = '\Wildberries\Client\Model\DetailReportItem[]';
        $request = $this->apiV1SupplierReportDetailByPeriodGetRequest($key, $date_from, $date_to, $limit, $rrdid);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wildberries\Client\Model\DetailReportItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1SupplierReportDetailByPeriodGetAsync
     *
     * Отчет о продажах по реализации
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  \DateTime $date_to Конечная дата отчета (required)
     * @param  int $limit Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000. (optional, default to 0)
     * @param  int $rrdid Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierReportDetailByPeriodGetAsync($key, $date_from, $date_to, $limit = '0', $rrdid = null)
    {
        return $this->apiV1SupplierReportDetailByPeriodGetAsyncWithHttpInfo($key, $date_from, $date_to, $limit, $rrdid)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1SupplierReportDetailByPeriodGetAsyncWithHttpInfo
     *
     * Отчет о продажах по реализации
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  \DateTime $date_to Конечная дата отчета (required)
     * @param  int $limit Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000. (optional, default to 0)
     * @param  int $rrdid Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierReportDetailByPeriodGetAsyncWithHttpInfo($key, $date_from, $date_to, $limit = '0', $rrdid = null)
    {
        $returnType = '\Wildberries\Client\Model\DetailReportItem[]';
        $request = $this->apiV1SupplierReportDetailByPeriodGetRequest($key, $date_from, $date_to, $limit, $rrdid);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1SupplierReportDetailByPeriodGet'
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  \DateTime $date_to Конечная дата отчета (required)
     * @param  int $limit Максимальное количество строк отчета, возвращаемых методом. Не может быть более 100 000. (optional, default to 0)
     * @param  int $rrdid Уникальный идентификатор строки отчета. Необходим для получения отчета частями.  &lt;br&gt; Загрузку отчета нужно начинать с &#x60;rrdid &#x3D; 0&#x60; и при последующих вызовах API передавать в запросе значение &#x60;rrd_id&#x60; из последней строки, полученной в результате предыдущего вызова.  &lt;br&gt; Таким образом для загрузки одного отчета может понадобиться вызывать API до тех пор, пока количество возвращаемых строк не станет равным нулю. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1SupplierReportDetailByPeriodGetRequest($key, $date_from, $date_to, $limit = '0', $rrdid = null)
    {
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling apiV1SupplierReportDetailByPeriodGet'
            );
        }
        // verify the required parameter 'date_from' is set
        if ($date_from === null || (is_array($date_from) && count($date_from) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_from when calling apiV1SupplierReportDetailByPeriodGet'
            );
        }
        // verify the required parameter 'date_to' is set
        if ($date_to === null || (is_array($date_to) && count($date_to) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_to when calling apiV1SupplierReportDetailByPeriodGet'
            );
        }

        $resourcePath = '/api/v1/supplier/reportDetailByPeriod';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key, null);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from, 'RFC3339');
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($date_to !== null) {
            $queryParams['dateTo'] = ObjectSerializer::toQueryValue($date_to, 'date');
        }
        // query params
        if ($rrdid !== null) {
            $queryParams['rrdid'] = ObjectSerializer::toQueryValue($rrdid, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1SupplierSalesGet
     *
     * Продажи
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Wildberries\Client\Model\SalesItem[]
     */
    public function apiV1SupplierSalesGet($key, $date_from, $flag = '0')
    {
        list($response) = $this->apiV1SupplierSalesGetWithHttpInfo($key, $date_from, $flag);
        return $response;
    }

    /**
     * Operation apiV1SupplierSalesGetWithHttpInfo
     *
     * Продажи
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Wildberries\Client\Model\SalesItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1SupplierSalesGetWithHttpInfo($key, $date_from, $flag = '0')
    {
        $returnType = '\Wildberries\Client\Model\SalesItem[]';
        $request = $this->apiV1SupplierSalesGetRequest($key, $date_from, $flag);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wildberries\Client\Model\SalesItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1SupplierSalesGetAsync
     *
     * Продажи
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierSalesGetAsync($key, $date_from, $flag = '0')
    {
        return $this->apiV1SupplierSalesGetAsyncWithHttpInfo($key, $date_from, $flag)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1SupplierSalesGetAsyncWithHttpInfo
     *
     * Продажи
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierSalesGetAsyncWithHttpInfo($key, $date_from, $flag = '0')
    {
        $returnType = '\Wildberries\Client\Model\SalesItem[]';
        $request = $this->apiV1SupplierSalesGetRequest($key, $date_from, $flag);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1SupplierSalesGet'
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     * @param  int $flag Если параметр &#x60;flag&#x3D;0&#x60; (или не указан в строке запроса), при вызове API возвращаются данные,  у которых значение поля &#x60;lastChangeDate&#x60; (дата время обновления информации в сервисе) больше или равно переданному  значению параметра &#x60;dateFrom&#x60;.  При этом количество возвращенных строк данных варьируется в интервале от 0 до примерно 100 000. &lt;br&gt; Если параметр &#x60;flag&#x3D;1&#x60;, то будет выгружена информация обо всех заказах или продажах с датой,  равной переданному параметру &#x60;dateFrom&#x60; (в данном случае время в дате значения не имеет).  При этом количество возвращенных строк данных будет равно количеству всех заказов или продаж,  сделанных в указанную дату, переданную в параметре &#x60;dateFrom&#x60;. (optional, default to 0)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1SupplierSalesGetRequest($key, $date_from, $flag = '0')
    {
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling apiV1SupplierSalesGet'
            );
        }
        // verify the required parameter 'date_from' is set
        if ($date_from === null || (is_array($date_from) && count($date_from) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_from when calling apiV1SupplierSalesGet'
            );
        }

        $resourcePath = '/api/v1/supplier/sales';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key, null);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from, 'RFC3339');
        }
        // query params
        if ($flag !== null) {
            $queryParams['flag'] = ObjectSerializer::toQueryValue($flag, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV1SupplierStocksGet
     *
     * Склад
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Wildberries\Client\Model\StocksItem[]
     */
    public function apiV1SupplierStocksGet($key, $date_from)
    {
        list($response) = $this->apiV1SupplierStocksGetWithHttpInfo($key, $date_from);
        return $response;
    }

    /**
     * Operation apiV1SupplierStocksGetWithHttpInfo
     *
     * Склад
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Wildberries\Client\Model\StocksItem[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV1SupplierStocksGetWithHttpInfo($key, $date_from)
    {
        $returnType = '\Wildberries\Client\Model\StocksItem[]';
        $request = $this->apiV1SupplierStocksGetRequest($key, $date_from);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wildberries\Client\Model\StocksItem[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV1SupplierStocksGetAsync
     *
     * Склад
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierStocksGetAsync($key, $date_from)
    {
        return $this->apiV1SupplierStocksGetAsyncWithHttpInfo($key, $date_from)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV1SupplierStocksGetAsyncWithHttpInfo
     *
     * Склад
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV1SupplierStocksGetAsyncWithHttpInfo($key, $date_from)
    {
        $returnType = '\Wildberries\Client\Model\StocksItem[]';
        $request = $this->apiV1SupplierStocksGetRequest($key, $date_from);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiV1SupplierStocksGet'
     *
     * @param  string $key Ключ аутентификации.&lt;br&gt;  Генерируется самостоятельно на портале Продавца в разделе «Профиль» - «Настройки» - «Доступ к API». (required)
     * @param  string $date_from Дата в формате RFC3339. Можно передать дату или дату со временем.  Время можно указывать с точностью до секунд или миллисекунд.  Литера &#x60;Z&#x60; в конце строки означает, что время передается в UTC-часовом поясе.  При ее отсутствии время считается в часовом поясе МСК (UTC+3). &lt;br&gt;Примеры: &lt;ul&gt; &lt;li&gt; &#x60;2019-06-20&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00Z&#x60; &lt;li&gt; &#x60;2019-06-20T23:59:59&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345Z&#x60; &lt;li&gt; &#x60;2019-06-20T00:00:00.12345&#x60; &lt;li&gt; &#x60;2017-03-25T00:00:00&#x60; &lt;/ul&gt; (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV1SupplierStocksGetRequest($key, $date_from)
    {
        // verify the required parameter 'key' is set
        if ($key === null || (is_array($key) && count($key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $key when calling apiV1SupplierStocksGet'
            );
        }
        // verify the required parameter 'date_from' is set
        if ($date_from === null || (is_array($date_from) && count($date_from) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date_from when calling apiV1SupplierStocksGet'
            );
        }

        $resourcePath = '/api/v1/supplier/stocks';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($key !== null) {
            $queryParams['key'] = ObjectSerializer::toQueryValue($key, null);
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from, 'RFC3339');
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('key');
        if ($apiKey !== null) {
            $queryParams['key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation publicApiV1InfoGet
     *
     * Получение информации о ценах.
     *
     * @param  int $quantity &#x60;2&#x60; - товар с нулевым остатком, &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком (optional)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Wildberries\Client\Model\InlineResponse200
     */
    public function publicApiV1InfoGet($quantity = null)
    {
        list($response) = $this->publicApiV1InfoGetWithHttpInfo($quantity);
        return $response;
    }

    /**
     * Operation publicApiV1InfoGetWithHttpInfo
     *
     * Получение информации о ценах.
     *
     * @param  int $quantity &#x60;2&#x60; - товар с нулевым остатком, &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком (optional)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Wildberries\Client\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function publicApiV1InfoGetWithHttpInfo($quantity = null)
    {
        $returnType = '\Wildberries\Client\Model\InlineResponse200';
        $request = $this->publicApiV1InfoGetRequest($quantity);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Wildberries\Client\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation publicApiV1InfoGetAsync
     *
     * Получение информации о ценах.
     *
     * @param  int $quantity &#x60;2&#x60; - товар с нулевым остатком, &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicApiV1InfoGetAsync($quantity = null)
    {
        return $this->publicApiV1InfoGetAsyncWithHttpInfo($quantity)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation publicApiV1InfoGetAsyncWithHttpInfo
     *
     * Получение информации о ценах.
     *
     * @param  int $quantity &#x60;2&#x60; - товар с нулевым остатком, &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicApiV1InfoGetAsyncWithHttpInfo($quantity = null)
    {
        $returnType = '\Wildberries\Client\Model\InlineResponse200';
        $request = $this->publicApiV1InfoGetRequest($quantity);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'publicApiV1InfoGet'
     *
     * @param  int $quantity &#x60;2&#x60; - товар с нулевым остатком, &#x60;1&#x60; - товар с ненулевым остатком, &#x60;0&#x60; - товар с любым остатком (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function publicApiV1InfoGetRequest($quantity = null)
    {

        $resourcePath = '/public/api/v1/info';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($quantity !== null) {
            $queryParams['quantity'] = ObjectSerializer::toQueryValue($quantity, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation publicApiV1PricesPost
     *
     * Загрузка цен
     *
     * @param  \Wildberries\Client\Model\V1PricesBody[] $body body (optional)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function publicApiV1PricesPost($body = null)
    {
        $this->publicApiV1PricesPostWithHttpInfo($body);
    }

    /**
     * Operation publicApiV1PricesPostWithHttpInfo
     *
     * Загрузка цен
     *
     * @param  \Wildberries\Client\Model\V1PricesBody[] $body (optional)
     *
     * @throws \Wildberries\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function publicApiV1PricesPostWithHttpInfo($body = null)
    {
        $returnType = '';
        $request = $this->publicApiV1PricesPostRequest($body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation publicApiV1PricesPostAsync
     *
     * Загрузка цен
     *
     * @param  \Wildberries\Client\Model\V1PricesBody[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicApiV1PricesPostAsync($body = null)
    {
        return $this->publicApiV1PricesPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation publicApiV1PricesPostAsyncWithHttpInfo
     *
     * Загрузка цен
     *
     * @param  \Wildberries\Client\Model\V1PricesBody[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function publicApiV1PricesPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '';
        $request = $this->publicApiV1PricesPostRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'publicApiV1PricesPost'
     *
     * @param  \Wildberries\Client\Model\V1PricesBody[] $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function publicApiV1PricesPostRequest($body = null)
    {

        $resourcePath = '/public/api/v1/prices';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
