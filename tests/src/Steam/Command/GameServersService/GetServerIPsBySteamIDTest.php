<?php

namespace Steam\Command\GameServersService;

class GetServerIPsBySteamIDTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GetServerIPsBySteamID
     */
    protected $instance;

    public function setUp()
    {
        $this->instance = new GetServerIPsBySteamID(123);
    }

    public function testValues()
    {
        $this->assertEquals('IGameServersService', $this->instance->getInterface());
        $this->assertEquals('GetServerIPsBySteamID', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('GET', $this->instance->getRequestMethod());
        $this->assertEquals(['server_steamids' => 123], $this->instance->getParams());
    }
}
 