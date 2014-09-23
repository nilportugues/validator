<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 9/18/14
 * Time: 8:57 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\NilPortugues\Validator;

use NilPortugues\Validator\ValidatorFunctionMap;

/**
 * Class ValidatorFunctionMapTest
 * @package Tests\NilPortugues\Validator
 */
class ValidatorFunctionMapTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itShouldInvalidArgumentExceptionWhenFunctionNoInMap()
    {
        $abstractValidator = $this
            ->getMockBuilder('NilPortugues\Validator\AbstractValidator')
            ->disableOriginalConstructor()
            ->getMock();

        $functionMapArray = [];
        $functionMap      = new ValidatorFunctionMap($abstractValidator, $functionMapArray);
        $errors           = [];
        $errorValues      = [];

        $this->setExpectedException('\InvalidArgumentException');
        $functionMap->get('property', 'a-function-name-that-doesnt-exist', [], $errorValues, $errors);
    }
}
