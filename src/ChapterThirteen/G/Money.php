<?php

/**
 * Copyright 2021 Jeremy Presutti <Jeremy@Presutti.us>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
declare(strict_types=1);

namespace TopTierCode\tddphp\ChapterThirteen\G;

/**
 * Class Money - From page 62
 */
class Money implements Expression
{

    protected int $amount;

    protected string $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(object $object): bool
    {
        // This example differs because the type casting in PHP is not the same as java.
        $money = $object instanceof Money ? $object : null;
        return $this->amount === $money->amount && $this->currency === $money->currency;
    }

    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }

    public function plus(Money $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function __toString(): string
    {
        return $this->amount . ' ' . $this->currency;
    }

    /**
     * This function is not in the book, but needed as of page 63. Amount is private
     */
    public function getAmount(): int
    {
        return $this->amount;
    }
}
