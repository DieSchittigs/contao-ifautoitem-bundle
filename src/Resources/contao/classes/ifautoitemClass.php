<?php

namespace DieSchittigs\SttgsIfautoitem;
use Contao\CoreBundle\Exception\PageNotFoundException;

class ifautoitemClass extends \Frontend
{

    public function autoitemStatus($objElement, $strBuffer)
    {
        if(TL_MODE != 'FE' OR !$objElement->hideOnItem) return $strBuffer;

        if (!isset($_GET['items']) && \Config::get('useAutoItem') && isset($_GET['auto_item']))
		{
			\Input::setGet('items', \Input::get('auto_item'));
		}
        
        switch($objElement->hideOnItem) {
            case 'no_item':
                if(\Input::get('items')) return '';
                else return $strBuffer;
                break;

            case 'only_item':
                if(!\Input::get('items')) return '';
                else return $strBuffer;
                break;
        }
        return $strBuffer;
    }
}
