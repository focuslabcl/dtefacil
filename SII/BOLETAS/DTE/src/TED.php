<?php
namespace ADICHILE\DTEFACIL\SII\BOLETAS\DTE;
require_once('DD.php');
/** 
 * @property DD $DD
*/
class TED{
    private $DD;
    
    function getDD() {
        return $this->DD;
    }

    function setDD() {
        $this->DD = new DD();
    }

}