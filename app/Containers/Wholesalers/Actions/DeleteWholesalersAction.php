<?php

namespace App\Containers\Wholesalers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteWholesalersAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Wholesalers@DeleteWholesalersTask', [$request->id]);
    }
}
