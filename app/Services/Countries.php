<?php

namespace App\Services;

class Countries
{
    public function get()
    {
        $countries = collect(
            [
                'España',
            ]
        );

        $i = 1;
        foreach ($countries as $country) {
            $countriesArray[$i] = $country;
            $i++;
        }
        return $countriesArray;
    }
}