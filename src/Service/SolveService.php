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
            'Q' => round($Q, 4),
            'P' => round($P, 4),
            'b' => round($b, 4),
            'S' => round($S / 10 + 12000, 4),
            'K' => round($K, 4),
            'sigma' => round($sigma, 4)
        ];
    }
}
