<?php

function formatDolarAmount(float $amount): string 
{

$isNegative = $amount < 0;

return ($isNegative ? '-' : '') . '$' . number_format(abs($amount), 2);
}

function formatDate(string $date): string 
{
    return date('M j, Y', strtotime($date));
}

function formatColor(string $string, float $amount): string 
{
    if ($amount >= 0)
    {
        return '<span style="color: green;">'.$string.'</span>';
    }
    elseif ($amount < 0)
    {
        return '<span style="color: red;">'.$string.'</span>';
    }
    else
    {
        return $string;
    }
}