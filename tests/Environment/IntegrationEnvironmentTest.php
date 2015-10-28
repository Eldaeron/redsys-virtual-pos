<?php

/**
 * @coversDefaultClass \nkm\RedsysVirtualPos\Environment\IntegrationEnvironment
 */
class IntegrationEnvironmentTest extends PHPUnit_Framework_TestCase
{
    private $className          = '\nkm\RedsysVirtualPos\Environment\IntegrationEnvironment';
    private $exceptionClassName = '\nkm\RedsysVirtualPos\Environment\EnvironmentException';

    private $environment;

    public function setUp()
    {
        $this->environment = new $this->className();
    }

    public function getEmptyProvider()
    {
        return [
            [''],
            [0],
            [0.0],
            ['0'],
            [null],
            [[]],
            [new stdClass],
        ];
    }

    /**
     * @covers ::getSecret
     */
    public function testGetSecretDefault()
    {
        $this->setExpectedException(
            $this->exceptionClassName,
            'Merchant secret is not set.'
        );

        $this->environment->getSecret();
    }

    /**
     * @covers          ::getSecret
     * @dataProvider    getEmptyProvider
     */
    public function testGetSecretEmpty($newSecret)
    {
        $this->setExpectedException(
            $this->exceptionClassName,
            'Merchant secret is not set.'
        );

        $this->environment->setSecret($newSecret);

        $this->environment->getSecret();
    }

    public function setSecretProvider()
    {
        return [
            ['This cosmic dance﻿ of bursting decadence and withheld permissions'],
            ['twists all our arms collectively, but if sweetness can win, and it can,'],
            ['then I\'ll still be here tomorrow, to high five you yesterday my friend.'],
            ['Peace'],
        ];
    }

    /**
     * @covers          ::setSecret
     * @dataProvider    setSecretProvider
     */
    public function testSetSecret($newSecret)
    {
        $this->environment->setSecret($newSecret);

        $this->assertEquals($newSecret, $this->environment->getSecret());
    }

    public function getEndpointProvider()
    {
        return [
            [true,  '/whatevs',                'https://sis-i.redsys.es:25443/whatevs'],
            [true,  '/Oh-My-Glob',             'https://sis-i.redsys.es:25443/Oh-My-Glob'],
            [true,  'this-is-wrong-but-valid', 'https://sis-i.redsys.es:25443this-is-wrong-but-valid'],
            [false, 'this-is-not-valid',       'https://sis-i.redsys.es:25443/this-is-not-valid'],
            [false, 'this-is-not-valid',       ''],
        ];
    }

    /**
     * @covers          ::getEndpoint
     * @dataProvider    getEndpointProvider
     */
    public function testGetEndpoint($expected, $partialEndpoint, $fullEndpoint)
    {
        $this->assertEquals(
            $expected,
            $this->environment->getEndpoint($partialEndpoint) === $fullEndpoint
        );
    }

    /**
     * @covers          ::getEndpoint
     * @dataProvider    getEmptyProvider
     */
    public function testGetEndpointEmpty($endpoint)
    {
        $this->setExpectedException('\InvalidArgumentException');

        $this->environment->getEndpoint($endpoint);
    }
}
