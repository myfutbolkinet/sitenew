<?php

namespace App\Containers\Wholesalers\Tasks;

use App\Containers\Wholesalers\Data\Repositories\WholesalersRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindWholesalersByIdTask extends Task
{

    protected $repository;

    public function __construct(WholesalersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
