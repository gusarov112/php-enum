<?php
/**
 * @link    https://github.com/gusarov112/php-enum
 * @license https://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */

namespace Gusarov112\Tests\Enum;

use Gusarov112\Enum\Enum;

/**
 * Class EnumFixture
 *
 * @author Daniel Costa <danielcosta@gmail.com>
 * @author Mirosław Filip <mirfilip@gmail.com>
 */
class EnumFixture extends Enum
{
    const FOO = "foo";
    const BAR = "bar";
    const NUMBER = 42;

    /**
     * Values that are known to cause problems when used with soft typing
     */
    const PROBLEMATIC_NUMBER = 0;
    const PROBLEMATIC_NULL = null;
    const PROBLEMATIC_EMPTY_STRING = '';
    const PROBLEMATIC_BOOLEAN_FALSE = false;
}
