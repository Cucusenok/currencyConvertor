<?php

namespace App\Library\CourseConvertor;

use App\Library\CourseConvertor\AbstractCurrencyConvertor;

class JsonCurrencyConvertor extends AbstractCurrencyConvertor {


    public function convert(){
        $this->data = json_decode($this->data);
        return $this->data->{'Valute'}->{'EUR'}->{'Value'};
    }

}
