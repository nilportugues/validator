<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 9/16/14
 * Time: 9:17 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Validator\Attribute\Numeric;

use NilPortugues\Validator\Validator;

/**
 * Class Float
 * @package NilPortugues\Validator\Attribute\Numeric
 */
class Float extends Numeric
{
    /**
     * @param Validator $validator
     */
    public function __construct(Validator $validator)
    {
        parent::__construct($validator);

        $this->addCondition(__METHOD__);
    }

    /**
     * @return \NilPortugues\Validator\Attribute\Numeric\Float
     */
    public function isNotZero()
    {
        $this->addCondition(__METHOD__);

        return $this;
    }

    /**
     * @return \NilPortugues\Validator\Attribute\Numeric\Float
     */
    public function isPositive()
    {
        $this->addCondition(__METHOD__);

        return $this;
    }

    /**
     * @param float $min
     * @param float $max
     * @param bool $inclusive
     *
     * @return \NilPortugues\Validator\Attribute\Numeric\Float
     */
    public function isBetween($min, $max, $inclusive = false)
    {
        $this->addCondition(__METHOD__, [(float) $min, (float) $max, $inclusive]);

        return $this;
    }

    /**
     * @return \NilPortugues\Validator\Attribute\Numeric\Float
     */
    public function isNegative()
    {
        $this->addCondition(__METHOD__);

        return $this;
    }
}
