<?php

namespace Steam\Command\WebApiUtil;

class GetSupportedApiListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GetSupportedAPIList
     */
    protected $instance;

    public function setUp()
    {
        $this->instance = new GetSupportedApiList();
    }

    public function testValues()
    {
        $this->assertEquals('ISteamWebAPIUtil', $this->instance->getInterface());
        $this->assertEquals('GetSupportedAPIList', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals([], $this->instance->getParams());
    }
}
 