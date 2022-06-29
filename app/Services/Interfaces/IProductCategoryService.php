<?php

namespace App\Services\Interfaces;

use Illuminate\Support\Collection;

interface IProductCategoryService
{
    /** Get product and category together
     * @return Collection
     */
    public function fetchCategoryProduct():Collection;
}
