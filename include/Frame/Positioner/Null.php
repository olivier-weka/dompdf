<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */
namespace Dompdf\Frame\Positioner;

use Dompdf\Frame\Decorator\AbstractDecorator as Decorator;

/**
 * Dummy positioner
 *
 * @access private
 * @package dompdf
 */
class Null extends AbstractPositioner
{

    function __construct(Decorator $frame)
    {
        parent::__construct($frame);
    }

    function position()
    {
        return;
    }

}
