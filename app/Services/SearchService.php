<?php

namespace App\Services;


use App\Models\Apartament;

class SearchService
{
    public function search($search_data)
    {

        $result= Apartament::when($search_data->name, function ($query, $name) {
             return $query->whereFullText('name', $name);
            }
        )
        ->when($search_data->price['max'], function ($query, $price) {
            return $query->whereBetween('price', [$price['min'], $price['max']]);
        }
        )
         ->when($search_data->bathrooms, function ($query, $bathrooms) {
                return $query->where('bathrooms', '=', $bathrooms);
            }
            )->
            when($search_data->bedrooms, function ($query, $bedrooms) {
                return $query->where('bedrooms', '=', $bedrooms);
            }
            )->when($search_data->storeys, function ($query, $storeys) {
                return $query->where('storeys', '=', $storeys);
            }
            )->
        when($search_data->garages, function ($query, $garages) {
                return $query->where('garages', '=', $garages);
            }
            )->get();

        return $result;
    }
}
