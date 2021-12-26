<?php

namespace App\Service;

class TestService
{
    public function test1()
    {
        return [
            'Sd' => 100.0,
            'Sh' => 5.0,
            'T' => 100.0,
            'Wmax' => 10000.0,
            'Wmin' => 1000.0,
            'Wmean' => 5500.0,
            'dt' => 1.0,
            'p' => 0.05,
            'Tpr' => 0.0
        ];
    }

    public function test2()
    {
        return [
            'Sd' => 100.0,
            'Sh' => 5.0,
            'T' => 100.0,
            'Wmax' => 1100.0,
            'Wmin' => 900.0,
            'Wmean' => 1000.0,
            'dt' => 3.0,
            'p' => 0.1,
            'Tpr' => 2.0
        ];
    }

    public function test3()
    {
        return [
            'Sd' => 65.0,
            'Sh' => 25.0,
            'T' => 100.0,
            'Wmax' => 11.57,
            'Wmin' => 1.43,
            'Wmean' => 6.5,
            'dt' => 2.0,
            'p' => 0.1,
            'Tpr' => 0.0
        ];
    }
}
