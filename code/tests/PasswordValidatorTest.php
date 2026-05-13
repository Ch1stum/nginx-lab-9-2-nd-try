<?php

use PHPUnit\Framework\TestCase;
use App\PasswordValidator;

class PasswordValidatorTest extends TestCase
{
    private PasswordValidator $validator;

    protected function setUp(): void
    {
        $this->validator = new PasswordValidator();
    }

    public function testIsLongEnoughWithShortPassword(): void
    {
        $result = $this->validator->isLongEnough('1234567'); // 7 символов
        $this->assertFalse($result);
    }

    public function testIsLongEnoughWithLongPassword(): void
    {
        $result = $this->validator->isLongEnough('12345678'); // 8 символов
        $this->assertTrue($result);
    }

    public function testHasNumberWithoutDigits(): void
    {
        $result = $this->validator->hasNumber('password');
        $this->assertFalse($result);
    }

    public function testHasNumberWithDigits(): void
    {
        $result = $this->validator->hasNumber('pass123word');
        $this->assertTrue($result);
    }

    public function testIsValid(): void
    {
        // Невалидный пароль (короткий и без цифр)
        $result1 = $this->validator->isValid('pass');
        $this->assertFalse($result1);

        // Валидный пароль (длинный и с цифрой)
        $result2 = $this->validator->isValid('password123');
        $this->assertTrue($result2);
    }
}
