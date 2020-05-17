<?php

namespace App\Containers\Wholesalers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindWholesalersByIdAction extends Action
{
    public function run(Request $request)
    {
        $wholesalers = Apiato::call('Wholesalers@FindWholesalersByIdTask', [$request->id]);

        return $wholesalers;
    }
}
