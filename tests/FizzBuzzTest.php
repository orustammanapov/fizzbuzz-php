<?php declare(strict_types=1);

namespace App\Tests;

use App\FizzBuzz;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testMultipleOfFifteenProducesFizzBuzz(): void
    {
        $expected = 'FizzBuzz';

        $actual = FizzBuzz::from(15);

        $this->assertSame($expected, (string) $actual);
    }

    public function testMultipleOfThreeProducesFizz(): void
    {
        $expected = 'Fizz';

        $actual = FizzBuzz::from(3);

        $this->assertSame($expected, (string) $actual);
    }

    public function testMultipleOfFiveProducesBuzz(): void
    {
        $expected = 'Buzz';

        $actual = FizzBuzz::from(5);

        $this->assertSame($expected, (string) $actual);
    }

    public function testInputCannotBeLessThanOne(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        FizzBuzz::from(FizzBuzz::MIN - 1);
    }

    public function testInputCannotBeGreaterThanHundred(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        FizzBuzz::from(FizzBuzz::MAX + 1);
    }

    public function testDoesNotThrowExceptionForBoundaries(): void
    {
        $this->expectNotToPerformAssertions();

        FizzBuzz::from(FizzBuzz::MIN);
        FizzBuzz::from(FizzBuzz::MAX);
    }

    #[DataProvider('provider')]
    public function testWorksForNumbersThroughOneToTwenty(string $expected, string $actual): void
    {
        $this->assertEquals($expected, $actual);
    }

    public static function provider(): array
    {
        return [
            ['1', (string) FizzBuzz::from(1)],
            ['2', (string) FizzBuzz::from(2)],
            ['Fizz', (string) FizzBuzz::from(3)],
            ['4', (string) FizzBuzz::from(4)],
            ['Buzz', (string) FizzBuzz::from(5)],
            ['Fizz', (string) FizzBuzz::from(6)],
            ['7', (string) FizzBuzz::from(7)],
            ['8', (string) FizzBuzz::from(8)],
            ['Fizz', (string) FizzBuzz::from(9)],
            ['Buzz', (string) FizzBuzz::from(10)],
            ['11', (string) FizzBuzz::from(11)],
            ['Fizz', (string) FizzBuzz::from(12)],
            ['13', (string) FizzBuzz::from(13)],
            ['14', (string) FizzBuzz::from(14)],
            ['FizzBuzz', (string) FizzBuzz::from(15)],
            ['16', (string) FizzBuzz::from(16)],
            ['17', (string) FizzBuzz::from(17)],
            ['Fizz', (string) FizzBuzz::from(18)],
            ['19', (string) FizzBuzz::from(19)],
            ['Buzz', (string) FizzBuzz::from(20)],
        ];
    }
}

