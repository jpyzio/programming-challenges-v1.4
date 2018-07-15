<?php
/**
 * Created by PhpStorm.
 * User: spid3r
 * Date: 08.08.18
 * Time: 11:11
 */

namespace Spid3r\TempConverter;

class TempConverter
{
    function celsiusFahrenheit(float $celsius): float
    {
        return $celsius * 1.8 + 32;
    }

    function celsiusRankine(float $celsius): float
    {
        return (273.15 + $celsius) * 1.8;
    }

    function celsiusReaumur(float $celsius): float
    {
        return $celsius * 0.8;
    }

    function celsiusKelvin(float $celsius): float
    {
        return 273.15 + $celsius;
    }

    function fahrenheitCelsius(float $fahrenheit): float
    {
        return ($fahrenheit - 32) / 1.8;
    }

    function fahrenheitRankine(float $fahrenheit): float
    {
        return $fahrenheit + 459.67;
    }

    function fahrenheitReaumur(float $fahrenheit): float
    {
        return ($fahrenheit - 32) * 4 / 9;
    }

    function fahrenheitKelvin(float $fahrenheit): float
    {
        return ($fahrenheit + 459.67) * 5 / 9;
    }

    function rankineCelsius(float $rankine): float
    {
        return ($rankine - 491.67) * 5 / 9;
    }

    function rankineFahrenheit(float $rankine): float
    {
        return $rankine - 459.67;
    }

    function rankineReaumur(float $rankine): float
    {
        return ($rankine - 491.67) * 4 / 9;
    }

    function rankineKelvin(float $rankine): float
    {
        return $rankine * 5 / 9;
    }

    function reaumurCelsius(float $reaumur): float
    {
        return $reaumur / 0.8;
    }

    function reaumurFahrenheit(float $reaumur): float
    {
        return $reaumur * 2.25 + 32;
    }

    function reaumurRankine(float $reaumur): float
    {
        return $reaumur * 2.2500 + 491.67;
    }

    function reaumurKelvin(float $reaumur): float
    {
        return $reaumur * 5 / 4 + 273.15;
    }

    function kelvinCelsius(float $kelvin): float
    {
        return $kelvin - 273.15;
    }

    function kelvinFahrenheit(float $kelvin): float
    {
        return $kelvin * 9 / 5 - 459.67;
    }

    function kelvinRankine(float $kelvin): float
    {
        return $kelvin * 1.8;
    }

    function kelvinReaumur(float $kelvin): float
    {
        return ($kelvin - 273.15) * 4 / 5;
    }
}
