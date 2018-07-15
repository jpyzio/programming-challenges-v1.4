<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ExampleTest extends TestCase
{
    public function testGreetings(): void
    {
        $greetings = 'Hello World';
        $this->assertEquals('Hello World', $greetings);
    }
}
