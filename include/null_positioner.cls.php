<?php
/**
 * @package dompdf
 * @link    http://dompdf.github.com/
 * @author  Benj Carson <benjcarson@digitaljunkies.ca>
 * @license http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 */

use DomPdf\Frame\Decorator\AbstractDecorator as Decorator;

/**
 * Dummy positioner
 *
 * @access private
 * @package dompdf
 */
class Null_Positioner extends Positioner
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
