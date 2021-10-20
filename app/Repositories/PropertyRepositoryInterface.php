<?php

namespace App\Repositories;

interface PropertyRepositoryInterface 
{
    public function fetchPropertyType();
    public function fetchListingProperty($id);
    public function fetchStates();
    public function fetchListingCity($state_id);
    public function storeData($request);
}