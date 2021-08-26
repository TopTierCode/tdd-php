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

namespace TopTierCode\tddphp\Chapter14\F;

/**
 * Class Bank - From page 68, second part (with skeleton of addRate that is omitted from book)
 */
class Bank
{
    public function reduce(Expression $source, string $to): ?Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
    }

    public function rate(string $from, string $to): int
    {
        return $from === 'CHF' && $to === 'USD' ? 2 : 1;
    }
}
