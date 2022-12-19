<?php
/**
 * Marketplace_Api
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * Marketplace_Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Marketplace_Api
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
     * Operation apiV2WarehousesGet
     *
     * Cписок складов
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20026[]
     */
    public function apiV2WarehousesGet()
    {
        list($response) = $this->apiV2WarehousesGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation apiV2WarehousesGetWithHttpInfo
     *
     * Cписок складов
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20026[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV2WarehousesGetWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20026[]';
        $request = $this->apiV2WarehousesGetRequest();

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
                        '\Swagger\Client\Model\InlineResponse20026[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV2WarehousesGetAsync
     *
     * Cписок складов
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2WarehousesGetAsync()
    {
        return $this->apiV2WarehousesGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV2WarehousesGetAsyncWithHttpInfo
     *
     * Cписок складов
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV2WarehousesGetAsyncWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20026[]';
        $request = $this->apiV2WarehousesGetRequest();

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
     * Create request for operation 'apiV2WarehousesGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV2WarehousesGetRequest()
    {

        $resourcePath = '/api/v2/warehouses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation apiV3OrdersGet
     *
     * Получить информацию по сборочным заданиям
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     * @param  int $date_from Дата начала периода в формате Unix timestamp. Необязательный параметр. (optional)
     * @param  int $date_to Дата конца периода в формате Unix timestamp. Необязательный параметр. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20036
     */
    public function apiV3OrdersGet($limit, $next, $date_from = null, $date_to = null)
    {
        list($response) = $this->apiV3OrdersGetWithHttpInfo($limit, $next, $date_from, $date_to);
        return $response;
    }

    /**
     * Operation apiV3OrdersGetWithHttpInfo
     *
     * Получить информацию по сборочным заданиям
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     * @param  int $date_from Дата начала периода в формате Unix timestamp. Необязательный параметр. (optional)
     * @param  int $date_to Дата конца периода в формате Unix timestamp. Необязательный параметр. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20036, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3OrdersGetWithHttpInfo($limit, $next, $date_from = null, $date_to = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20036';
        $request = $this->apiV3OrdersGetRequest($limit, $next, $date_from, $date_to);

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
                        '\Swagger\Client\Model\InlineResponse20036',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3OrdersGetAsync
     *
     * Получить информацию по сборочным заданиям
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     * @param  int $date_from Дата начала периода в формате Unix timestamp. Необязательный параметр. (optional)
     * @param  int $date_to Дата конца периода в формате Unix timestamp. Необязательный параметр. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersGetAsync($limit, $next, $date_from = null, $date_to = null)
    {
        return $this->apiV3OrdersGetAsyncWithHttpInfo($limit, $next, $date_from, $date_to)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3OrdersGetAsyncWithHttpInfo
     *
     * Получить информацию по сборочным заданиям
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     * @param  int $date_from Дата начала периода в формате Unix timestamp. Необязательный параметр. (optional)
     * @param  int $date_to Дата конца периода в формате Unix timestamp. Необязательный параметр. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersGetAsyncWithHttpInfo($limit, $next, $date_from = null, $date_to = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20036';
        $request = $this->apiV3OrdersGetRequest($limit, $next, $date_from, $date_to);

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
     * Create request for operation 'apiV3OrdersGet'
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     * @param  int $date_from Дата начала периода в формате Unix timestamp. Необязательный параметр. (optional)
     * @param  int $date_to Дата конца периода в формате Unix timestamp. Необязательный параметр. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3OrdersGetRequest($limit, $next, $date_from = null, $date_to = null)
    {
        // verify the required parameter 'limit' is set
        if ($limit === null || (is_array($limit) && count($limit) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $limit when calling apiV3OrdersGet'
            );
        }
        // verify the required parameter 'next' is set
        if ($next === null || (is_array($next) && count($next) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $next when calling apiV3OrdersGet'
            );
        }

        $resourcePath = '/api/v3/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($next !== null) {
            $queryParams['next'] = ObjectSerializer::toQueryValue($next, 'int64');
        }
        // query params
        if ($date_from !== null) {
            $queryParams['dateFrom'] = ObjectSerializer::toQueryValue($date_from, null);
        }
        // query params
        if ($date_to !== null) {
            $queryParams['dateTo'] = ObjectSerializer::toQueryValue($date_to, null);
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
     * Operation apiV3OrdersNewGet
     *
     * Получить список новых сборочных заданий
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20037
     */
    public function apiV3OrdersNewGet()
    {
        list($response) = $this->apiV3OrdersNewGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation apiV3OrdersNewGetWithHttpInfo
     *
     * Получить список новых сборочных заданий
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20037, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3OrdersNewGetWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20037';
        $request = $this->apiV3OrdersNewGetRequest();

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
                        '\Swagger\Client\Model\InlineResponse20037',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3OrdersNewGetAsync
     *
     * Получить список новых сборочных заданий
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersNewGetAsync()
    {
        return $this->apiV3OrdersNewGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3OrdersNewGetAsyncWithHttpInfo
     *
     * Получить список новых сборочных заданий
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersNewGetAsyncWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20037';
        $request = $this->apiV3OrdersNewGetRequest();

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
     * Create request for operation 'apiV3OrdersNewGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3OrdersNewGetRequest()
    {

        $resourcePath = '/api/v3/orders/new';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation apiV3OrdersOrderCancelPatch
     *
     * Отменить сборочное задание
     *
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3OrdersOrderCancelPatch($order)
    {
        $this->apiV3OrdersOrderCancelPatchWithHttpInfo($order);
    }

    /**
     * Operation apiV3OrdersOrderCancelPatchWithHttpInfo
     *
     * Отменить сборочное задание
     *
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3OrdersOrderCancelPatchWithHttpInfo($order)
    {
        $returnType = '';
        $request = $this->apiV3OrdersOrderCancelPatchRequest($order);

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
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3OrdersOrderCancelPatchAsync
     *
     * Отменить сборочное задание
     *
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersOrderCancelPatchAsync($order)
    {
        return $this->apiV3OrdersOrderCancelPatchAsyncWithHttpInfo($order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3OrdersOrderCancelPatchAsyncWithHttpInfo
     *
     * Отменить сборочное задание
     *
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersOrderCancelPatchAsyncWithHttpInfo($order)
    {
        $returnType = '';
        $request = $this->apiV3OrdersOrderCancelPatchRequest($order);

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
     * Create request for operation 'apiV3OrdersOrderCancelPatch'
     *
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3OrdersOrderCancelPatchRequest($order)
    {
        // verify the required parameter 'order' is set
        if ($order === null || (is_array($order) && count($order) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order when calling apiV3OrdersOrderCancelPatch'
            );
        }

        $resourcePath = '/api/v3/orders/{order}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order !== null) {
            $resourcePath = str_replace(
                '{' . 'order' . '}',
                ObjectSerializer::toPathValue($order),
                $resourcePath
            );
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
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV3OrdersOrderMetaSgtinPost
     *
     * Закрепить за сборочным заданием КиЗ (маркировку Честного знака)
     *
     * @param  int $order Идентификатор сборочного задания (required)
     * @param  \Swagger\Client\Model\MetaSgtinBody $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3OrdersOrderMetaSgtinPost($order, $body = null)
    {
        $this->apiV3OrdersOrderMetaSgtinPostWithHttpInfo($order, $body);
    }

    /**
     * Operation apiV3OrdersOrderMetaSgtinPostWithHttpInfo
     *
     * Закрепить за сборочным заданием КиЗ (маркировку Честного знака)
     *
     * @param  int $order Идентификатор сборочного задания (required)
     * @param  \Swagger\Client\Model\MetaSgtinBody $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3OrdersOrderMetaSgtinPostWithHttpInfo($order, $body = null)
    {
        $returnType = '';
        $request = $this->apiV3OrdersOrderMetaSgtinPostRequest($order, $body);

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
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3OrdersOrderMetaSgtinPostAsync
     *
     * Закрепить за сборочным заданием КиЗ (маркировку Честного знака)
     *
     * @param  int $order Идентификатор сборочного задания (required)
     * @param  \Swagger\Client\Model\MetaSgtinBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersOrderMetaSgtinPostAsync($order, $body = null)
    {
        return $this->apiV3OrdersOrderMetaSgtinPostAsyncWithHttpInfo($order, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3OrdersOrderMetaSgtinPostAsyncWithHttpInfo
     *
     * Закрепить за сборочным заданием КиЗ (маркировку Честного знака)
     *
     * @param  int $order Идентификатор сборочного задания (required)
     * @param  \Swagger\Client\Model\MetaSgtinBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersOrderMetaSgtinPostAsyncWithHttpInfo($order, $body = null)
    {
        $returnType = '';
        $request = $this->apiV3OrdersOrderMetaSgtinPostRequest($order, $body);

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
     * Create request for operation 'apiV3OrdersOrderMetaSgtinPost'
     *
     * @param  int $order Идентификатор сборочного задания (required)
     * @param  \Swagger\Client\Model\MetaSgtinBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3OrdersOrderMetaSgtinPostRequest($order, $body = null)
    {
        // verify the required parameter 'order' is set
        if ($order === null || (is_array($order) && count($order) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order when calling apiV3OrdersOrderMetaSgtinPost'
            );
        }

        $resourcePath = '/api/v3/orders/{order}/meta/sgtin';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($order !== null) {
            $resourcePath = str_replace(
                '{' . 'order' . '}',
                ObjectSerializer::toPathValue($order),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
     * Operation apiV3OrdersStatusPost
     *
     * Получить статусы сборочных заданий
     *
     * @param  \Swagger\Client\Model\OrdersStatusBody $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20035
     */
    public function apiV3OrdersStatusPost($body = null)
    {
        list($response) = $this->apiV3OrdersStatusPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation apiV3OrdersStatusPostWithHttpInfo
     *
     * Получить статусы сборочных заданий
     *
     * @param  \Swagger\Client\Model\OrdersStatusBody $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20035, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3OrdersStatusPostWithHttpInfo($body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20035';
        $request = $this->apiV3OrdersStatusPostRequest($body);

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
                        '\Swagger\Client\Model\InlineResponse20035',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3OrdersStatusPostAsync
     *
     * Получить статусы сборочных заданий
     *
     * @param  \Swagger\Client\Model\OrdersStatusBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersStatusPostAsync($body = null)
    {
        return $this->apiV3OrdersStatusPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3OrdersStatusPostAsyncWithHttpInfo
     *
     * Получить статусы сборочных заданий
     *
     * @param  \Swagger\Client\Model\OrdersStatusBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersStatusPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20035';
        $request = $this->apiV3OrdersStatusPostRequest($body);

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
     * Create request for operation 'apiV3OrdersStatusPost'
     *
     * @param  \Swagger\Client\Model\OrdersStatusBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3OrdersStatusPostRequest($body = null)
    {

        $resourcePath = '/api/v3/orders/status';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
     * Operation apiV3OrdersStickersPost
     *
     * Получить этикетки для сборочных заданий
     *
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     * @param  \Swagger\Client\Model\OrdersStickersBody $body body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20038
     */
    public function apiV3OrdersStickersPost($type, $width, $height, $body = null)
    {
        list($response) = $this->apiV3OrdersStickersPostWithHttpInfo($type, $width, $height, $body);
        return $response;
    }

    /**
     * Operation apiV3OrdersStickersPostWithHttpInfo
     *
     * Получить этикетки для сборочных заданий
     *
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     * @param  \Swagger\Client\Model\OrdersStickersBody $body (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20038, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3OrdersStickersPostWithHttpInfo($type, $width, $height, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20038';
        $request = $this->apiV3OrdersStickersPostRequest($type, $width, $height, $body);

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
                        '\Swagger\Client\Model\InlineResponse20038',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3OrdersStickersPostAsync
     *
     * Получить этикетки для сборочных заданий
     *
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     * @param  \Swagger\Client\Model\OrdersStickersBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersStickersPostAsync($type, $width, $height, $body = null)
    {
        return $this->apiV3OrdersStickersPostAsyncWithHttpInfo($type, $width, $height, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3OrdersStickersPostAsyncWithHttpInfo
     *
     * Получить этикетки для сборочных заданий
     *
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     * @param  \Swagger\Client\Model\OrdersStickersBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3OrdersStickersPostAsyncWithHttpInfo($type, $width, $height, $body = null)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20038';
        $request = $this->apiV3OrdersStickersPostRequest($type, $width, $height, $body);

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
     * Create request for operation 'apiV3OrdersStickersPost'
     *
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     * @param  \Swagger\Client\Model\OrdersStickersBody $body (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3OrdersStickersPostRequest($type, $width, $height, $body = null)
    {
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling apiV3OrdersStickersPost'
            );
        }
        // verify the required parameter 'width' is set
        if ($width === null || (is_array($width) && count($width) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $width when calling apiV3OrdersStickersPost'
            );
        }
        // verify the required parameter 'height' is set
        if ($height === null || (is_array($height) && count($height) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $height when calling apiV3OrdersStickersPost'
            );
        }

        $resourcePath = '/api/v3/orders/stickers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type, null);
        }
        // query params
        if ($width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($width, null);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($height, null);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
     * Operation apiV3StocksWarehouseDelete
     *
     * Удалить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody2 $body body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3StocksWarehouseDelete($body, $warehouse)
    {
        $this->apiV3StocksWarehouseDeleteWithHttpInfo($body, $warehouse);
    }

    /**
     * Operation apiV3StocksWarehouseDeleteWithHttpInfo
     *
     * Удалить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody2 $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3StocksWarehouseDeleteWithHttpInfo($body, $warehouse)
    {
        $returnType = '';
        $request = $this->apiV3StocksWarehouseDeleteRequest($body, $warehouse);

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
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3StocksWarehouseDeleteAsync
     *
     * Удалить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody2 $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3StocksWarehouseDeleteAsync($body, $warehouse)
    {
        return $this->apiV3StocksWarehouseDeleteAsyncWithHttpInfo($body, $warehouse)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3StocksWarehouseDeleteAsyncWithHttpInfo
     *
     * Удалить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody2 $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3StocksWarehouseDeleteAsyncWithHttpInfo($body, $warehouse)
    {
        $returnType = '';
        $request = $this->apiV3StocksWarehouseDeleteRequest($body, $warehouse);

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
     * Create request for operation 'apiV3StocksWarehouseDelete'
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody2 $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3StocksWarehouseDeleteRequest($body, $warehouse)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling apiV3StocksWarehouseDelete'
            );
        }
        // verify the required parameter 'warehouse' is set
        if ($warehouse === null || (is_array($warehouse) && count($warehouse) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $warehouse when calling apiV3StocksWarehouseDelete'
            );
        }

        $resourcePath = '/api/v3/stocks/{warehouse}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($warehouse !== null) {
            $resourcePath = str_replace(
                '{' . 'warehouse' . '}',
                ObjectSerializer::toPathValue($warehouse),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV3StocksWarehousePost
     *
     * Получить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody1 $body body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20030
     */
    public function apiV3StocksWarehousePost($body, $warehouse)
    {
        list($response) = $this->apiV3StocksWarehousePostWithHttpInfo($body, $warehouse);
        return $response;
    }

    /**
     * Operation apiV3StocksWarehousePostWithHttpInfo
     *
     * Получить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody1 $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20030, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3StocksWarehousePostWithHttpInfo($body, $warehouse)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20030';
        $request = $this->apiV3StocksWarehousePostRequest($body, $warehouse);

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
                        '\Swagger\Client\Model\InlineResponse20030',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3StocksWarehousePostAsync
     *
     * Получить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody1 $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3StocksWarehousePostAsync($body, $warehouse)
    {
        return $this->apiV3StocksWarehousePostAsyncWithHttpInfo($body, $warehouse)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3StocksWarehousePostAsyncWithHttpInfo
     *
     * Получить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody1 $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3StocksWarehousePostAsyncWithHttpInfo($body, $warehouse)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20030';
        $request = $this->apiV3StocksWarehousePostRequest($body, $warehouse);

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
     * Create request for operation 'apiV3StocksWarehousePost'
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody1 $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3StocksWarehousePostRequest($body, $warehouse)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling apiV3StocksWarehousePost'
            );
        }
        // verify the required parameter 'warehouse' is set
        if ($warehouse === null || (is_array($warehouse) && count($warehouse) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $warehouse when calling apiV3StocksWarehousePost'
            );
        }

        $resourcePath = '/api/v3/stocks/{warehouse}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($warehouse !== null) {
            $resourcePath = str_replace(
                '{' . 'warehouse' . '}',
                ObjectSerializer::toPathValue($warehouse),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
     * Operation apiV3StocksWarehousePut
     *
     * Обновить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody $body body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3StocksWarehousePut($body, $warehouse)
    {
        $this->apiV3StocksWarehousePutWithHttpInfo($body, $warehouse);
    }

    /**
     * Operation apiV3StocksWarehousePutWithHttpInfo
     *
     * Обновить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3StocksWarehousePutWithHttpInfo($body, $warehouse)
    {
        $returnType = '';
        $request = $this->apiV3StocksWarehousePutRequest($body, $warehouse);

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
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3StocksWarehousePutAsync
     *
     * Обновить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3StocksWarehousePutAsync($body, $warehouse)
    {
        return $this->apiV3StocksWarehousePutAsyncWithHttpInfo($body, $warehouse)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3StocksWarehousePutAsyncWithHttpInfo
     *
     * Обновить остатки товаров
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3StocksWarehousePutAsyncWithHttpInfo($body, $warehouse)
    {
        $returnType = '';
        $request = $this->apiV3StocksWarehousePutRequest($body, $warehouse);

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
     * Create request for operation 'apiV3StocksWarehousePut'
     *
     * @param  \Swagger\Client\Model\StocksWarehouseBody $body (required)
     * @param  int $warehouse Идентификатор склада поставщика (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3StocksWarehousePutRequest($body, $warehouse)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling apiV3StocksWarehousePut'
            );
        }
        // verify the required parameter 'warehouse' is set
        if ($warehouse === null || (is_array($warehouse) && count($warehouse) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $warehouse when calling apiV3StocksWarehousePut'
            );
        }

        $resourcePath = '/api/v3/stocks/{warehouse}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($warehouse !== null) {
            $resourcePath = str_replace(
                '{' . 'warehouse' . '}',
                ObjectSerializer::toPathValue($warehouse),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV3SuppliesGet
     *
     * Получить список поставок
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20031
     */
    public function apiV3SuppliesGet($limit, $next)
    {
        list($response) = $this->apiV3SuppliesGetWithHttpInfo($limit, $next);
        return $response;
    }

    /**
     * Operation apiV3SuppliesGetWithHttpInfo
     *
     * Получить список поставок
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20031, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesGetWithHttpInfo($limit, $next)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20031';
        $request = $this->apiV3SuppliesGetRequest($limit, $next);

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
                        '\Swagger\Client\Model\InlineResponse20031',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesGetAsync
     *
     * Получить список поставок
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesGetAsync($limit, $next)
    {
        return $this->apiV3SuppliesGetAsyncWithHttpInfo($limit, $next)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesGetAsyncWithHttpInfo
     *
     * Получить список поставок
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesGetAsyncWithHttpInfo($limit, $next)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20031';
        $request = $this->apiV3SuppliesGetRequest($limit, $next);

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
     * Create request for operation 'apiV3SuppliesGet'
     *
     * @param  int $limit Параметр пагинации. Устанавливает предельное количество возвращаемых данных. (required)
     * @param  int $next Параметр пагинации. Устанавливает значение, с которого надо получить следующий пакет данных. Для получения полного списка данных должен быть равен 0 в первом запросе. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesGetRequest($limit, $next)
    {
        // verify the required parameter 'limit' is set
        if ($limit === null || (is_array($limit) && count($limit) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $limit when calling apiV3SuppliesGet'
            );
        }
        // verify the required parameter 'next' is set
        if ($next === null || (is_array($next) && count($next) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $next when calling apiV3SuppliesGet'
            );
        }

        $resourcePath = '/api/v3/supplies';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = ObjectSerializer::toQueryValue($limit, null);
        }
        // query params
        if ($next !== null) {
            $queryParams['next'] = ObjectSerializer::toQueryValue($next, 'int64');
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
     * Operation apiV3SuppliesOrdersReshipmentGet
     *
     * Получить все сборочные задания на повторную отгрузку
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20033
     */
    public function apiV3SuppliesOrdersReshipmentGet()
    {
        list($response) = $this->apiV3SuppliesOrdersReshipmentGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation apiV3SuppliesOrdersReshipmentGetWithHttpInfo
     *
     * Получить все сборочные задания на повторную отгрузку
     *
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20033, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesOrdersReshipmentGetWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20033';
        $request = $this->apiV3SuppliesOrdersReshipmentGetRequest();

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
                        '\Swagger\Client\Model\InlineResponse20033',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesOrdersReshipmentGetAsync
     *
     * Получить все сборочные задания на повторную отгрузку
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesOrdersReshipmentGetAsync()
    {
        return $this->apiV3SuppliesOrdersReshipmentGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesOrdersReshipmentGetAsyncWithHttpInfo
     *
     * Получить все сборочные задания на повторную отгрузку
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesOrdersReshipmentGetAsyncWithHttpInfo()
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20033';
        $request = $this->apiV3SuppliesOrdersReshipmentGetRequest();

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
     * Create request for operation 'apiV3SuppliesOrdersReshipmentGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesOrdersReshipmentGetRequest()
    {

        $resourcePath = '/api/v3/supplies/orders/reshipment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation apiV3SuppliesPost
     *
     * Создать новую поставку
     *
     * @param  \Swagger\Client\Model\V3SuppliesBody $body body (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse2011
     */
    public function apiV3SuppliesPost($body)
    {
        list($response) = $this->apiV3SuppliesPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation apiV3SuppliesPostWithHttpInfo
     *
     * Создать новую поставку
     *
     * @param  \Swagger\Client\Model\V3SuppliesBody $body (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse2011, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesPostWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2011';
        $request = $this->apiV3SuppliesPostRequest($body);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\InlineResponse2011',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesPostAsync
     *
     * Создать новую поставку
     *
     * @param  \Swagger\Client\Model\V3SuppliesBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesPostAsync($body)
    {
        return $this->apiV3SuppliesPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesPostAsyncWithHttpInfo
     *
     * Создать новую поставку
     *
     * @param  \Swagger\Client\Model\V3SuppliesBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesPostAsyncWithHttpInfo($body)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse2011';
        $request = $this->apiV3SuppliesPostRequest($body);

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
     * Create request for operation 'apiV3SuppliesPost'
     *
     * @param  \Swagger\Client\Model\V3SuppliesBody $body (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesPostRequest($body)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling apiV3SuppliesPost'
            );
        }

        $resourcePath = '/api/v3/supplies';
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
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
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
     * Operation apiV3SuppliesSupplyBarcodeGet
     *
     * Получить QR поставки
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20034
     */
    public function apiV3SuppliesSupplyBarcodeGet($supply, $type, $width, $height)
    {
        list($response) = $this->apiV3SuppliesSupplyBarcodeGetWithHttpInfo($supply, $type, $width, $height);
        return $response;
    }

    /**
     * Operation apiV3SuppliesSupplyBarcodeGetWithHttpInfo
     *
     * Получить QR поставки
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20034, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesSupplyBarcodeGetWithHttpInfo($supply, $type, $width, $height)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20034';
        $request = $this->apiV3SuppliesSupplyBarcodeGetRequest($supply, $type, $width, $height);

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
                        '\Swagger\Client\Model\InlineResponse20034',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesSupplyBarcodeGetAsync
     *
     * Получить QR поставки
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyBarcodeGetAsync($supply, $type, $width, $height)
    {
        return $this->apiV3SuppliesSupplyBarcodeGetAsyncWithHttpInfo($supply, $type, $width, $height)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesSupplyBarcodeGetAsyncWithHttpInfo
     *
     * Получить QR поставки
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyBarcodeGetAsyncWithHttpInfo($supply, $type, $width, $height)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20034';
        $request = $this->apiV3SuppliesSupplyBarcodeGetRequest($supply, $type, $width, $height);

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
     * Create request for operation 'apiV3SuppliesSupplyBarcodeGet'
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  string $type Тип этикетки (required)
     * @param  int $width Ширина этикетки (required)
     * @param  int $height Высота этикетки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesSupplyBarcodeGetRequest($supply, $type, $width, $height)
    {
        // verify the required parameter 'supply' is set
        if ($supply === null || (is_array($supply) && count($supply) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $supply when calling apiV3SuppliesSupplyBarcodeGet'
            );
        }
        // verify the required parameter 'type' is set
        if ($type === null || (is_array($type) && count($type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $type when calling apiV3SuppliesSupplyBarcodeGet'
            );
        }
        // verify the required parameter 'width' is set
        if ($width === null || (is_array($width) && count($width) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $width when calling apiV3SuppliesSupplyBarcodeGet'
            );
        }
        // verify the required parameter 'height' is set
        if ($height === null || (is_array($height) && count($height) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $height when calling apiV3SuppliesSupplyBarcodeGet'
            );
        }

        $resourcePath = '/api/v3/supplies/{supply}/barcode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($type !== null) {
            $queryParams['type'] = ObjectSerializer::toQueryValue($type, null);
        }
        // query params
        if ($width !== null) {
            $queryParams['width'] = ObjectSerializer::toQueryValue($width, null);
        }
        // query params
        if ($height !== null) {
            $queryParams['height'] = ObjectSerializer::toQueryValue($height, null);
        }

        // path params
        if ($supply !== null) {
            $resourcePath = str_replace(
                '{' . 'supply' . '}',
                ObjectSerializer::toPathValue($supply),
                $resourcePath
            );
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
     * Operation apiV3SuppliesSupplyDelete
     *
     * Удалить поставку
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3SuppliesSupplyDelete($supply)
    {
        $this->apiV3SuppliesSupplyDeleteWithHttpInfo($supply);
    }

    /**
     * Operation apiV3SuppliesSupplyDeleteWithHttpInfo
     *
     * Удалить поставку
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesSupplyDeleteWithHttpInfo($supply)
    {
        $returnType = '';
        $request = $this->apiV3SuppliesSupplyDeleteRequest($supply);

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
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesSupplyDeleteAsync
     *
     * Удалить поставку
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyDeleteAsync($supply)
    {
        return $this->apiV3SuppliesSupplyDeleteAsyncWithHttpInfo($supply)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesSupplyDeleteAsyncWithHttpInfo
     *
     * Удалить поставку
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyDeleteAsyncWithHttpInfo($supply)
    {
        $returnType = '';
        $request = $this->apiV3SuppliesSupplyDeleteRequest($supply);

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
     * Create request for operation 'apiV3SuppliesSupplyDelete'
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesSupplyDeleteRequest($supply)
    {
        // verify the required parameter 'supply' is set
        if ($supply === null || (is_array($supply) && count($supply) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $supply when calling apiV3SuppliesSupplyDelete'
            );
        }

        $resourcePath = '/api/v3/supplies/{supply}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($supply !== null) {
            $resourcePath = str_replace(
                '{' . 'supply' . '}',
                ObjectSerializer::toPathValue($supply),
                $resourcePath
            );
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV3SuppliesSupplyDeliverPatch
     *
     * Передать поставку в доставку
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3SuppliesSupplyDeliverPatch($supply)
    {
        $this->apiV3SuppliesSupplyDeliverPatchWithHttpInfo($supply);
    }

    /**
     * Operation apiV3SuppliesSupplyDeliverPatchWithHttpInfo
     *
     * Передать поставку в доставку
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesSupplyDeliverPatchWithHttpInfo($supply)
    {
        $returnType = '';
        $request = $this->apiV3SuppliesSupplyDeliverPatchRequest($supply);

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
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesSupplyDeliverPatchAsync
     *
     * Передать поставку в доставку
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyDeliverPatchAsync($supply)
    {
        return $this->apiV3SuppliesSupplyDeliverPatchAsyncWithHttpInfo($supply)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesSupplyDeliverPatchAsyncWithHttpInfo
     *
     * Передать поставку в доставку
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyDeliverPatchAsyncWithHttpInfo($supply)
    {
        $returnType = '';
        $request = $this->apiV3SuppliesSupplyDeliverPatchRequest($supply);

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
     * Create request for operation 'apiV3SuppliesSupplyDeliverPatch'
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesSupplyDeliverPatchRequest($supply)
    {
        // verify the required parameter 'supply' is set
        if ($supply === null || (is_array($supply) && count($supply) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $supply when calling apiV3SuppliesSupplyDeliverPatch'
            );
        }

        $resourcePath = '/api/v3/supplies/{supply}/deliver';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($supply !== null) {
            $resourcePath = str_replace(
                '{' . 'supply' . '}',
                ObjectSerializer::toPathValue($supply),
                $resourcePath
            );
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
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiV3SuppliesSupplyGet
     *
     * Получить информацию о поставке
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\Supply
     */
    public function apiV3SuppliesSupplyGet($supply)
    {
        list($response) = $this->apiV3SuppliesSupplyGetWithHttpInfo($supply);
        return $response;
    }

    /**
     * Operation apiV3SuppliesSupplyGetWithHttpInfo
     *
     * Получить информацию о поставке
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\Supply, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesSupplyGetWithHttpInfo($supply)
    {
        $returnType = '\Swagger\Client\Model\Supply';
        $request = $this->apiV3SuppliesSupplyGetRequest($supply);

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
                        '\Swagger\Client\Model\Supply',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesSupplyGetAsync
     *
     * Получить информацию о поставке
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyGetAsync($supply)
    {
        return $this->apiV3SuppliesSupplyGetAsyncWithHttpInfo($supply)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesSupplyGetAsyncWithHttpInfo
     *
     * Получить информацию о поставке
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyGetAsyncWithHttpInfo($supply)
    {
        $returnType = '\Swagger\Client\Model\Supply';
        $request = $this->apiV3SuppliesSupplyGetRequest($supply);

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
     * Create request for operation 'apiV3SuppliesSupplyGet'
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesSupplyGetRequest($supply)
    {
        // verify the required parameter 'supply' is set
        if ($supply === null || (is_array($supply) && count($supply) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $supply when calling apiV3SuppliesSupplyGet'
            );
        }

        $resourcePath = '/api/v3/supplies/{supply}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($supply !== null) {
            $resourcePath = str_replace(
                '{' . 'supply' . '}',
                ObjectSerializer::toPathValue($supply),
                $resourcePath
            );
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
     * Operation apiV3SuppliesSupplyOrdersGet
     *
     * Получить сборочные задания в поставке
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\InlineResponse20032
     */
    public function apiV3SuppliesSupplyOrdersGet($supply)
    {
        list($response) = $this->apiV3SuppliesSupplyOrdersGetWithHttpInfo($supply);
        return $response;
    }

    /**
     * Operation apiV3SuppliesSupplyOrdersGetWithHttpInfo
     *
     * Получить сборочные задания в поставке
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\InlineResponse20032, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesSupplyOrdersGetWithHttpInfo($supply)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20032';
        $request = $this->apiV3SuppliesSupplyOrdersGetRequest($supply);

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
                        '\Swagger\Client\Model\InlineResponse20032',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesSupplyOrdersGetAsync
     *
     * Получить сборочные задания в поставке
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyOrdersGetAsync($supply)
    {
        return $this->apiV3SuppliesSupplyOrdersGetAsyncWithHttpInfo($supply)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesSupplyOrdersGetAsyncWithHttpInfo
     *
     * Получить сборочные задания в поставке
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyOrdersGetAsyncWithHttpInfo($supply)
    {
        $returnType = '\Swagger\Client\Model\InlineResponse20032';
        $request = $this->apiV3SuppliesSupplyOrdersGetRequest($supply);

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
     * Create request for operation 'apiV3SuppliesSupplyOrdersGet'
     *
     * @param  string $supply Идентификатор поставки (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesSupplyOrdersGetRequest($supply)
    {
        // verify the required parameter 'supply' is set
        if ($supply === null || (is_array($supply) && count($supply) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $supply when calling apiV3SuppliesSupplyOrdersGet'
            );
        }

        $resourcePath = '/api/v3/supplies/{supply}/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($supply !== null) {
            $resourcePath = str_replace(
                '{' . 'supply' . '}',
                ObjectSerializer::toPathValue($supply),
                $resourcePath
            );
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
     * Operation apiV3SuppliesSupplyOrdersOrderPatch
     *
     * Добавить к поставке сборочное задание
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiV3SuppliesSupplyOrdersOrderPatch($supply, $order)
    {
        $this->apiV3SuppliesSupplyOrdersOrderPatchWithHttpInfo($supply, $order);
    }

    /**
     * Operation apiV3SuppliesSupplyOrdersOrderPatchWithHttpInfo
     *
     * Добавить к поставке сборочное задание
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiV3SuppliesSupplyOrdersOrderPatchWithHttpInfo($supply, $order)
    {
        $returnType = '';
        $request = $this->apiV3SuppliesSupplyOrdersOrderPatchRequest($supply, $order);

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
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Error',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiV3SuppliesSupplyOrdersOrderPatchAsync
     *
     * Добавить к поставке сборочное задание
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyOrdersOrderPatchAsync($supply, $order)
    {
        return $this->apiV3SuppliesSupplyOrdersOrderPatchAsyncWithHttpInfo($supply, $order)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiV3SuppliesSupplyOrdersOrderPatchAsyncWithHttpInfo
     *
     * Добавить к поставке сборочное задание
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiV3SuppliesSupplyOrdersOrderPatchAsyncWithHttpInfo($supply, $order)
    {
        $returnType = '';
        $request = $this->apiV3SuppliesSupplyOrdersOrderPatchRequest($supply, $order);

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
     * Create request for operation 'apiV3SuppliesSupplyOrdersOrderPatch'
     *
     * @param  string $supply Идентификатор поставки (required)
     * @param  int $order Идентификатор сборочного задания (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiV3SuppliesSupplyOrdersOrderPatchRequest($supply, $order)
    {
        // verify the required parameter 'supply' is set
        if ($supply === null || (is_array($supply) && count($supply) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $supply when calling apiV3SuppliesSupplyOrdersOrderPatch'
            );
        }
        // verify the required parameter 'order' is set
        if ($order === null || (is_array($order) && count($order) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $order when calling apiV3SuppliesSupplyOrdersOrderPatch'
            );
        }

        $resourcePath = '/api/v3/supplies/{supply}/orders/{order}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($supply !== null) {
            $resourcePath = str_replace(
                '{' . 'supply' . '}',
                ObjectSerializer::toPathValue($supply),
                $resourcePath
            );
        }
        // path params
        if ($order !== null) {
            $resourcePath = str_replace(
                '{' . 'order' . '}',
                ObjectSerializer::toPathValue($order),
                $resourcePath
            );
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
            'PATCH',
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
