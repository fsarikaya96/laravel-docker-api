<?php

namespace App\Repository\Interfaces;

use Illuminate\Support\Collection;

interface IProductCategoryRepository
{
    /** Get product and category together
     * @return Collection
     */
    public function fetchCategoryProduct():Collection;
}
