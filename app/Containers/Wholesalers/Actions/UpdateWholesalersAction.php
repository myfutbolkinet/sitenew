<?php

namespace App\Containers\Wholesalers\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateWholesalersAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $wholesalers = Apiato::call('Wholesalers@UpdateWholesalersTask', [$request->id, $data]);

        return $wholesalers;
    }
}
