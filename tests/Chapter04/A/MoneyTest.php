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

namespace TopTierCode\tddphp\tests\Chapter04\A;

use PHPUnit\Framework\TestCase;
use TopTierCode\tddphp\Chapter04\A\Dollar;

/**
 * Class MoneyTest - From page 19 (Skip first block as that is refresher)
 */
class MoneyTest extends TestCase
{

    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(new Dollar(10), $product);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
