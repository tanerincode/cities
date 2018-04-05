<?php

return [
    "data_path" => "/../Data/12_01_2018.xlsx",
    # Model List !
    "models" => [
        'city' => 'TanerInCode\Cities\Models\City',
        'county' => 'TanerInCode\Cities\Models\County',
        'district' => 'TanerInCode\Cities\Models\District',
        'neighborhood' => 'TanerInCode\Cities\Models\Neighborhood'
    ],
    //Database table name for models
    'tables' =>
        [
            'city' => 'cities',
            'county' => 'counties',
            'district' => 'districts',
            'neighborhood' => 'neighborhoods'
        ]
];