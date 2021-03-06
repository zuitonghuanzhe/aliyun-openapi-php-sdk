<?php

namespace retailcloud\Request\V20180313;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of UpdateApp
 *
 * @method string getBizTitle()
 * @method string getServiceType()
 * @method array getUserRoless()
 * @method string getAppId()
 * @method string getOperatingSystem()
 * @method string getDescription()
 * @method string getLanguage()
 * @method array getMiddleWareIdLists()
 */
class UpdateAppRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'retailcloud',
            '2018-03-13',
            'UpdateApp',
            'retailcloud'
        );
    }

    /**
     * @param string $bizTitle
     *
     * @return $this
     */
    public function setBizTitle($bizTitle)
    {
        $this->requestParameters['BizTitle'] = $bizTitle;
        $this->queryParameters['BizTitle'] = $bizTitle;

        return $this;
    }

    /**
     * @param string $serviceType
     *
     * @return $this
     */
    public function setServiceType($serviceType)
    {
        $this->requestParameters['ServiceType'] = $serviceType;
        $this->queryParameters['ServiceType'] = $serviceType;

        return $this;
    }

    /**
     * @param array $userRoles
     *
     * @return $this
     */
	public function setUserRoless(array $userRoles)
	{
	    $this->requestParameters['UserRoless'] = $userRoles;
		foreach ($userRoles as $depth1 => $depth1Value) {
			$this->queryParameters['UserRoles.' . ($depth1 + 1) . '.RoleName'] = $depth1Value['RoleName'];
			$this->queryParameters['UserRoles.' . ($depth1 + 1) . '.UserType'] = $depth1Value['UserType'];
			$this->queryParameters['UserRoles.' . ($depth1 + 1) . '.UserId'] = $depth1Value['UserId'];
		}

		return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        $this->requestParameters['AppId'] = $appId;
        $this->queryParameters['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $operatingSystem
     *
     * @return $this
     */
    public function setOperatingSystem($operatingSystem)
    {
        $this->requestParameters['OperatingSystem'] = $operatingSystem;
        $this->queryParameters['OperatingSystem'] = $operatingSystem;

        return $this;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->requestParameters['Description'] = $description;
        $this->queryParameters['Description'] = $description;

        return $this;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->requestParameters['Language'] = $language;
        $this->queryParameters['Language'] = $language;

        return $this;
    }

    /**
     * @param array $middleWareIdList
     *
     * @return $this
     */
	public function setMiddleWareIdLists(array $middleWareIdList)
	{
	    $this->requestParameters['MiddleWareIdLists'] = $middleWareIdList;
		foreach ($middleWareIdList as $i => $iValue) {
			$this->queryParameters['MiddleWareIdList.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}
