<?php

namespace App\Library\CourseConvertor;

use App\Library\CourseConvertor\AbstractCurrencyConvertor;

class XMLCurrencyConvertor extends AbstractCurrencyConvertor {

    public function convert(){
        $xml = simplexml_load_string($this->data)
            ->children()->{'Cube'}->children()->{'Cube'}->children();

        foreach ($xml as $cube)
        {
            if($cube->attributes()->{'currency'} == "RUB")
            {
                return strval($cube->attributes()->{'rate'});
            }
        }

    }
}
