<?php

namespace App\Containers\Wholesalers\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class WholesalersRepository
 */
class WholesalersRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
