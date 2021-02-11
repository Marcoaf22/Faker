<?php

namespace Faker\Provider\es_BO;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+591 ########',
        '+591 # ### ####',
        '7#######',
        '6#######'
    ];
}
