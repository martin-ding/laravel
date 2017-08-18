<?php

namespace App\Billing;

class Stripe{

    public  $key;
    function __construct($key) {
        $this->key = $key;
    }
}