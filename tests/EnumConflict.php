<?php
/**
 * @link    http://github.com/gusarov112/php-enum
 * @license http://www.opensource.org/licenses/mit-license.php MIT (see the LICENSE file)
 */
namespace Gusarov112\Tests\Enum;

use Gusarov112\Enum\Enum;

/**
 * Class EnumConflict
 *
 * @author Daniel Costa <danielcosta@gmail.com>
 * @author Mirosław Filip <mirfilip@gmail.com>
 */
class EnumConflict extends Enum
{
    const FOO = "foo";
    const BAR = "bar";
}
