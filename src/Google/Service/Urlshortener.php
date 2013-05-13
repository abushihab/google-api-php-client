<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Urlshortener (v1).
 *
 * <p>
 * Lets you create, inspect, and manage goo.gl short URLs
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/urlshortener/v1/getting_started.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Urlshortener extends Google_Service {
  public $url;
  /**
   * Constructs the internal representation of the Urlshortener service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client) {
    $this->servicePath = 'urlshortener/v1/';
    $this->version = 'v1';
    $this->serviceName = 'urlshortener';

    $client->addService($this->serviceName, $this->version);
    $this->url = new Google_Service_Urlshortener_Url_Resource($this, $this->serviceName, 'url', json_decode('{"methods": {"get": {"id": "urlshortener.url.get", "path": "url", "httpMethod": "GET", "parameters": {"projection": {"type": "string", "enum": ["ANALYTICS_CLICKS", "ANALYTICS_TOP_STRINGS", "FULL"], "location": "query"}, "shortUrl": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "Url"}}, "insert": {"id": "urlshortener.url.insert", "path": "url", "httpMethod": "POST", "request": {"$ref": "Url"}, "response": {"$ref": "Url"}, "scopes": ["https://www.googleapis.com/auth/urlshortener"]}, "list": {"id": "urlshortener.url.list", "path": "url/history", "httpMethod": "GET", "parameters": {"projection": {"type": "string", "enum": ["ANALYTICS_CLICKS", "FULL"], "location": "query"}, "start-token": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlHistory"}, "scopes": ["https://www.googleapis.com/auth/urlshortener"]}}}', true));

  }
}


  /**
   * The "url" collection of methods.
   * Typical usage is:
   *  <code>
   *   $urlshortenerService = new Google_Service_Urlshortener(...);
   *   $url = $urlshortenerService->url;
   *  </code>
   */
  class Google_Service_Urlshortener_Url_Resource extends Google_Service_Resource {


    /**
     * Expands a short URL or gets creation time and analytics. (url.get)
     *
     * @param string $shortUrl The short URL, including the protocol.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Additional information to return.
     * @return Google_Service_Urlshortener_Url
     */
    public function get($shortUrl, $optParams = array()) {
      $params = array('shortUrl' => $shortUrl);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Urlshortener_Url($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new short URL. (url.insert)
     *
     * @param Google_Url $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Urlshortener_Url
     */
    public function insert(Google_Service_Urlshortener_Url $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Urlshortener_Url($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of URLs shortened by a user. (url.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Additional information to return.
     * @opt_param string start-token Token for requesting successive pages of results.
     * @return Google_Service_Urlshortener_UrlHistory
     */
    public function listUrl($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Urlshortener_UrlHistory($data);
      } else {
        return $data;
      }
    }
  }




class Google_Service_Urlshortener_AnalyticsSnapshot
    extends Google_Collection {
  protected $__browsersType = 'Google_Service_Urlshortener_StringCount';
  protected $__browsersDataType = 'array';
  public $browsers;
  protected $__countriesType = 'Google_Service_Urlshortener_StringCount';
  protected $__countriesDataType = 'array';
  public $countries;
  public $longUrlClicks;
  protected $__platformsType = 'Google_Service_Urlshortener_StringCount';
  protected $__platformsDataType = 'array';
  public $platforms;
  protected $__referrersType = 'Google_Service_Urlshortener_StringCount';
  protected $__referrersDataType = 'array';
  public $referrers;
  public $shortUrlClicks;
  public function setBrowsers($browsers) {
    $this->browsers = $browsers;
  }
  public function getBrowsers() {
    return $this->browsers;
  }
  public function setCountries($countries) {
    $this->countries = $countries;
  }
  public function getCountries() {
    return $this->countries;
  }
  public function setLongUrlClicks($longUrlClicks) {
    $this->longUrlClicks = $longUrlClicks;
  }
  public function getLongUrlClicks() {
    return $this->longUrlClicks;
  }
  public function setPlatforms($platforms) {
    $this->platforms = $platforms;
  }
  public function getPlatforms() {
    return $this->platforms;
  }
  public function setReferrers($referrers) {
    $this->referrers = $referrers;
  }
  public function getReferrers() {
    return $this->referrers;
  }
  public function setShortUrlClicks($shortUrlClicks) {
    $this->shortUrlClicks = $shortUrlClicks;
  }
  public function getShortUrlClicks() {
    return $this->shortUrlClicks;
  }
}

class Google_Service_Urlshortener_AnalyticsSummary
    extends Google_Model {
  protected $__allTimeType = 'Google_Service_Urlshortener_AnalyticsSnapshot';
  protected $__allTimeDataType = '';
  public $allTime;
  protected $__dayType = 'Google_Service_Urlshortener_AnalyticsSnapshot';
  protected $__dayDataType = '';
  public $day;
  protected $__monthType = 'Google_Service_Urlshortener_AnalyticsSnapshot';
  protected $__monthDataType = '';
  public $month;
  protected $__twoHoursType = 'Google_Service_Urlshortener_AnalyticsSnapshot';
  protected $__twoHoursDataType = '';
  public $twoHours;
  protected $__weekType = 'Google_Service_Urlshortener_AnalyticsSnapshot';
  protected $__weekDataType = '';
  public $week;
  public function setAllTime(Google_Service_Urlshortener_AnalyticsSnapshot$allTime) {
    $this->allTime = $allTime;
  }
  public function getAllTime() {
    return $this->allTime;
  }
  public function setDay(Google_Service_Urlshortener_AnalyticsSnapshot$day) {
    $this->day = $day;
  }
  public function getDay() {
    return $this->day;
  }
  public function setMonth(Google_Service_Urlshortener_AnalyticsSnapshot$month) {
    $this->month = $month;
  }
  public function getMonth() {
    return $this->month;
  }
  public function setTwoHours(Google_Service_Urlshortener_AnalyticsSnapshot$twoHours) {
    $this->twoHours = $twoHours;
  }
  public function getTwoHours() {
    return $this->twoHours;
  }
  public function setWeek(Google_Service_Urlshortener_AnalyticsSnapshot$week) {
    $this->week = $week;
  }
  public function getWeek() {
    return $this->week;
  }
}

class Google_Service_Urlshortener_StringCount
    extends Google_Model {
  public $count;
  public $id;
  public function setCount($count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class Google_Service_Urlshortener_Url
    extends Google_Model {
  protected $__analyticsType = 'Google_Service_Urlshortener_AnalyticsSummary';
  protected $__analyticsDataType = '';
  public $analytics;
  public $created;
  public $id;
  public $kind;
  public $longUrl;
  public $status;
  public function setAnalytics(Google_Service_Urlshortener_AnalyticsSummary$analytics) {
    $this->analytics = $analytics;
  }
  public function getAnalytics() {
    return $this->analytics;
  }
  public function setCreated($created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLongUrl($longUrl) {
    $this->longUrl = $longUrl;
  }
  public function getLongUrl() {
    return $this->longUrl;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class Google_Service_Urlshortener_UrlHistory
    extends Google_Collection {
  protected $__itemsType = 'Google_Service_Urlshortener_Url';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextPageToken;
  public $totalItems;
  public function setItems($items) {
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage($itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setTotalItems($totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}