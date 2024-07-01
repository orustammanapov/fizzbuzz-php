<?php declare(strict_types=1);

namespace App;

final class FizzBuzz implements \Stringable
{
    public const int MIN = 1;
    public const int MAX = 100;

    private int $value;

    private function __construct(int $value)
    {
        $this->ensureValidInput($value);

        $this->value = $value;
    }

    public static function from(int $value): self
    {
        return new self($value);
    }

    public function __toString(): string
    {
        return match (true) {
            $this->value % 15 === 0 => 'FizzBuzz',
            $this->value % 3 === 0 => 'Fizz',
            $this->value % 5 === 0 => 'Buzz',
            default => (string) $this->value,
        };
    }

    private function ensureValidInput(int $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_INT)) {
            throw new \InvalidArgumentException(
                sprintf('"%s" must be an integer', $value)
            );
        }

        if (self::MIN > $value || $value > self::MAX) {
            throw new \InvalidArgumentException(
                sprintf('"%s" must be between min:%s and max:%s', $value, self::MIN, self::MAX)
            );
        }
    }
}