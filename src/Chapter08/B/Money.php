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

namespace TopTierCode\tddphp\Chapter08\B;

/**
 * Class Money - From page 34
 */
class Money
{
    protected int $amount;

    public function equals(object $object): bool
    {
        // This example differs because the type casting in PHP is not the same as java.
        $money = $object instanceof Money ? $object : null;
        return $money !== null && $this->amount === $money->amount && get_class($this) === get_class($money);
    }
}
