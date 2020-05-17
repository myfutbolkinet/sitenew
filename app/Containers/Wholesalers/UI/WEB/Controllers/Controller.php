<?php

namespace App\Containers\Wholesalers\UI\WEB\Controllers;

use App\Containers\Wholesalers\UI\WEB\Requests\CreateWholesalersRequest;
use App\Containers\Wholesalers\UI\WEB\Requests\DeleteWholesalersRequest;
use App\Containers\Wholesalers\UI\WEB\Requests\GetAllWholesalersRequest;
use App\Containers\Wholesalers\UI\WEB\Requests\GetImportWholesalersRequest;
use App\Containers\Wholesalers\UI\WEB\Requests\PostImportWholesalersRequest;
use App\Containers\Wholesalers\UI\WEB\Requests\FindWholesalersByIdRequest;
use App\Containers\Wholesalers\UI\WEB\Requests\UpdateWholesalersRequest;
use App\Containers\Wholesalers\UI\WEB\Requests\StoreWholesalersRequest;
use App\Containers\Wholesalers\UI\WEB\Requests\EditWholesalersRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Wholesalers\UI\WEB\Controllers
 */
class Controller extends WebController
{

    public function showLoginPage()
    {
        return view('authentication::login_opt');
    }
    /**
     * Show all entities
     *
     * @param GetAllWholesalersRequest $request
     */
    public function index(GetAllWholesalersRequest $request)
    {
        $wholesalers = Apiato::call('Wholesalers@GetAllWholesalersAction', [$request]);

        return view('welcome::welcome-page');

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindWholesalersByIdRequest $request
     */
    public function show(FindWholesalersByIdRequest $request)
    {
        $wholesalers = Apiato::call('Wholesalers@FindWholesalersByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateWholesalersRequest $request
     */
    public function create(CreateWholesalersRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreWholesalersRequest $request
     */
    public function store(StoreWholesalersRequest $request)
    {
        $wholesalers = Apiato::call('Wholesalers@CreateWholesalersAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditWholesalersRequest $request
     */
    public function edit(EditWholesalersRequest $request)
    {
        $wholesalers = Apiato::call('Wholesalers@GetWholesalersByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateWholesalersRequest $request
     */
    public function update(UpdateWholesalersRequest $request)
    {
        $wholesalers = Apiato::call('Wholesalers@UpdateWholesalersAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteWholesalersRequest $request
     */
    public function delete(DeleteWholesalersRequest $request)
    {
         $result = Apiato::call('Wholesalers@DeleteWholesalersAction', [$request]);

         // ..
    }

    public function getWholesalersImport(GetImportWholesalersRequest $request){
        $result['menu'] = Apiato::call('AdminMenu@GetAllAdminMenusAction', [$request]);
        return view('wholesalers::welcome-page',$result);
    }


    public function postWholesalersImport(PostImportWholesalersRequest $request){
        var_dump($request->file('file'));
        $result=$request->file('file')->store('/public/import_opt', []);
        var_dump($result);
        //move_uploaded_file($request->file('file')->pathName, storage_path('/app/public/import_opt/'.$request->file('file')->name));

   /*     $targetPath =  storage_path('/app/public/import_opt/');
        $image = $request->file('file');
        $time = \Carbon\Carbon::now()->toDateTimeString();
        $time =str_replace("-", "_", $time);
        $time =str_replace(":", "_", $time);
        $fileName = str_replace(' ', '_', $time . '_' . $request->file('file')->getClientOriginalName());
        $uploadPath = storage_path('/app/public/import_opt');

        $request->file('file')->move($uploadPath, $fileName);
       $targetFile =  '/storage/import_opt/'. $fileName;*/
       \Excel::import(new \App\Containers\Wholesalers\Imports\WholesalersImport, $result);

    }

}
