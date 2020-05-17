<?php

namespace App\Containers\Wholesalers\Tasks;

use App\Containers\Wholesalers\Data\Repositories\WholesalersRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateWholesalersTask extends Task
{

    protected $repository;

    public function __construct(WholesalersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
