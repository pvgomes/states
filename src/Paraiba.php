<?php

namespace Brazanation\States;

class Paraiba
{
    const CODE = 25;

    const FULL_NAME = 'Paraiba';

    const SHORT_NAME = 'PB';

    const TIMEZONE = 'America/Fortaleza';

    public function __construct()
    {
        parent::__construct(
            self::FULL_NAME,
            self::SHORT_NAME,
            self::CODE,
            self::TIMEZONE
        );
    }
}
