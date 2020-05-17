<?php

namespace App\Containers\Wholesalers\Tasks;

use App\Containers\Wholesalers\Data\Repositories\WholesalersRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteWholesalersTask extends Task
{

    protected $repository;

    public function __construct(WholesalersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
