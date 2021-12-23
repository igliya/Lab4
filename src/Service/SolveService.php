<?php

namespace App\Service;

class SolveService
{
    public function solve($Sd, $Sh, $T, $Wmax, $Wmin, $Wmean, $dt, $p, $Tpr)
    {
        $Vmax = $Wmax * $dt;
        $Vmin = $Wmin * $dt;
        $Q = sqrt((2 * $Wmean * $Sd) / $Sh);
        $b = ($Vmax - $Vmin) * (0.5 - $p);
        $P = $Wmean * ($dt + $Tpr / 2) + $b;
        $K = sqrt(12) * (0.5 - $p);
        $sigma = ($Vmax - $Vmin) / sqrt(12);
        $S = ($Wmean * $Sd) / $Q + ($Q / 2 + $b) * $Sh * $T;

        return [
            'Q' => $Q,
            'P' => $P,
            'b' => $b,
            'S' => $S,
            'K' => $K,
            'sigma' => $sigma
        ];
    }
}
