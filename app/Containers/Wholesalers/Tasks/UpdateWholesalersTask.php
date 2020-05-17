<?php

namespace App\Containers\Wholesalers\Tasks;

use App\Containers\Wholesalers\Data\Repositories\WholesalersRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateWholesalersTask extends Task
{

    protected $repository;

    public function __construct(WholesalersRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
