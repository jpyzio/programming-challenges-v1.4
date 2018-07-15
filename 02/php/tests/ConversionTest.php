<?php
declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use Spid3r\TempConverter\TempConverter;

final class ConversionTest extends TestCase
{
    /** @var TempConverter */
    private $converter;

    protected function setUp()
    {
        parent::setUp();
        $this->converter = new TempConverter();
    }


    function testCelsiusFahrenheit()
    {
        $result = $this->converter->celsiusFahrenheit(100);
        $this->assertEquals(212, $result);
    }

    function testCelsiusRankine()
    {
        $result = $this->converter->celsiusRankine(100);
        $this->assertEquals(671.67, $result);
    }

    function testCelsiusReaumur()
    {
        $result = $this->converter->celsiusReaumur(100);
        $this->assertEquals(80, $result);
    }

    function testCelsiusKelvin()
    {
        $result = $this->converter->celsiusKelvin(100);
        $this->assertEquals(373.15, $result);
    }

    function testFahrenheitCelsius()
    {
        $result = $this->converter->fahrenheitCelsius(100);
        $this->assertEquals(37.77777777777778, $result);
    }

    function testFahrenheitRankine()
    {
        $result = $this->converter->fahrenheitRankine(100);
        $this->assertEquals(559.67, $result);
    }

    function testFahrenheitReaumur()
    {
        $result = $this->converter->fahrenheitReaumur(100);
        $this->assertEquals(30.22222222222222, $result);
    }

    function testFahrenheitKelvin()
    {
        $result = $this->converter->fahrenheitKelvin(100);
        $this->assertEquals(310.9277777777778, $result);
    }

    function testRankineCelsius()
    {
        $result = $this->converter->rankineCelsius(100);
        $this->assertEquals(-217.59444444444446, $result);
    }

    function testRankineFahrenheit()
    {
        $result = $this->converter->rankineFahrenheit(100);
        $this->assertEquals(-359.67, $result);
    }

    function testRankineReaumur()
    {
        $result = $this->converter->rankineReaumur(100);
        $this->assertEquals(-174.07555555555555, $result);
    }

    function testRankineKelvin()
    {
        $result = $this->converter->rankineKelvin(100);
        $this->assertEquals(55.55555555555556, $result);
    }

    function testReaumurCelsius()
    {
        $result = $this->converter->reaumurCelsius(100);
        $this->assertEquals(125, $result);
    }

    function testReaumurFahrenheit()
    {
        $result = $this->converter->reaumurFahrenheit(100);
        $this->assertEquals(257, $result);
    }

    function testReaumurRankine()
    {
        $result = $this->converter->reaumurRankine(100);
        $this->assertEquals(716.67, $result);
    }

    function testReaumurKelvin()
    {
        $result = $this->converter->reaumurKelvin(100);
        $this->assertEquals(398.15, $result);
    }

    function testKelvinCelsius()
    {
        $result = $this->converter->kelvinCelsius(100);
        $this->assertEquals(-173.15, $result);
    }

    function testKelvinFahrenheit()
    {
        $result = $this->converter->kelvinFahrenheit(100);
        $this->assertEquals(-279.67, $result);
    }

    function testKelvinRankine()
    {
        $result = $this->converter->kelvinRankine(100);
        $this->assertEquals(180, $result);
    }

    function testKelvinReaumur()
    {
        $result = $this->converter->kelvinReaumur(100);
        $this->assertEquals(-138.52, $result);
    }
}