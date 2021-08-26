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

namespace TopTierCode\tddphp\Chapter16\B;

/**
 * Class Bank - From page 70, second part
 */
class Bank
{
    public array $rates = [];

    public function reduce(Expression $source, string $to): ?Money
    {
        return $source->reduce($this, $to);
    }

    /**
     * Note that this implementation differs from the book in that there is no native hashtable
     * support in PHP, so we must index it by hand.
     *
     * @param string $from
     * @param string $to
     * @param int $rate
     */
    public function addRate(string $from, string $to, int $rate): void
    {
        $pair = new Pair($from, $to);
        $this->rates[$pair->hashCode()] = $rate;
    }

    public function rate(string $from, string $to): int
    {
        if ($from === $to) {
            return 1;
        }
        $pair = new Pair($from, $to);
        $rate = $this->rates[$pair->hashCode()] ?? 0;
        return $rate;
    }
}
