<?php

namespace Tests\Unit\Domain\Validation;

use Core\Domain\Exception\EntityValidationException;
use Core\Domain\Validation\DomainValidation;
use PHPUnit\Framework\TestCase;
use Throwable;

class DomainValidationUnitTest extends TestCase
{
    public function testeNotNull()
    {
        try {
            $value = '';
            DomainValidation::notNull($value);

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th);
        }
    }

    public function testeNotNullCustomMessageException()
    {
        try {
            $value = '';
            DomainValidation::notNull($value, 'Custom message exception');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th, 'Custom message exception');
        }
    }

    public function testeStrMaxLength()
    {
        try {
            $value = 'Teste';
            DomainValidation::strMaxlength($value, 3, 'Custom message exception');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th, 'Custom message exception');
        }
    }

    public function testeStrMinLength()
    {
        try {
            $value = 'Test';
            DomainValidation::strMinlength($value, 8, 'Custom message exception');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th, 'Custom message exception');
        }
    }

    public function testeStrCanNullMaxLength()
    {
        try {
            $value = 'Teste';
            DomainValidation::strCanNullMaxLength($value, 3, 'Custom message exception');

            $this->assertTrue(false);
        } catch (Throwable $th) {
            $this->assertInstanceOf(EntityValidationException::class, $th, 'Custom message exception');
        }
    }
}