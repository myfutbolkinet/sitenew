<?php

namespace App\Containers\Wholesalers\Tasks;

use App\Containers\Wholesalers\Data\Repositories\WholesalersRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllWholesalersTask extends Task
{

    protected $repository;

    public function __construct(WholesalersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
