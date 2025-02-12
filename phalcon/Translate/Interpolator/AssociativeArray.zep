
/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Translate\Interpolator;

use Phalcon\Support\Helper\Str\Interpolate;

class AssociativeArray implements InterpolatorInterface
{
    /**
     * Replaces placeholders by the values passed
     */
    public function replacePlaceholders(
        string! translation,
        array placeholders = []
    ) -> string {
        var interpolate;

        let interpolate = new Interpolate();

        return interpolate->__invoke(translation, placeholders);
    }
}
