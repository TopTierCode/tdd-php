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

namespace TopTierCode\tddphp\ChapterNine\J;

/**
 * Class Money - From page 42, part 2
 */
abstract class Money
{

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    protected int $amount;

    protected string $currency;

    public abstract function times(int $multiplier): Money;

    public function currency(): string
    {
        return $this->currency;
    }

    public function equals(object $object): bool
    {
        // This example differs because the type casting in PHP is not the same as java.
        $money = $object instanceof Money ? $object : null;
        return $this->amount === $money->amount && get_class($this) === get_class($money);
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, 'CHF');
    }
}
