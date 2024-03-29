<?php

/*
 * This file is part of the rocky-huas/weather.
 *
 * (c) RockyHuas <1169078896@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace RockyHuas\Weather\Tests;

use PHPUnit\Framework\TestCase;
use RockyHuas\Weather\Exceptions\InvalidArgumentException;
use RockyHuas\Weather\Weather;

class WeatherTest extends TestCase
{
    // 检查 $type 参数
    public function testGetWeatherWithInvalidType()
    {
        $w = new Weather('mock-key');

        // 断言会抛出此异常类
        $this->expectException(InvalidArgumentException::class);

        // 断言异常消息为 'Invalid type value(base/all): foo'
        $this->expectExceptionMessage('Invalid type value(base/all): foo');

        $w->getWeather('深圳', 'foo');

        $this->fail('Failed to assert getWeather throw exception with invalid argument.');
    }

    // 检查 $format 参数
    public function testGetWeatherWithInvalidFormat()
    {
        $w = new Weather('mock-key');

        // 断言会抛出此异常类
        $this->expectException(InvalidArgumentException::class);

        // 断言异常消息为 'Invalid response format: array'
        $this->expectExceptionMessage('Invalid response format: array');

        // 因为支持的格式为 xml/json，所以传入 array 会抛出异常
        $w->getWeather('深圳', 'base', 'array');

        // 如果没有抛出异常，就会运行到这行，标记当前测试没成功
        $this->fail('Failed to assert getWeather throw exception with invalid argument.');
    }

    public function testGetWeather()
    {
    }

    public function testGetHttpClient()
    {
    }

    public function testSetGuzzleOptions()
    {
    }
}
