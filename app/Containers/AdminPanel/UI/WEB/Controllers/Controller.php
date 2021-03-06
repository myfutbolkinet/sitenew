<?php

namespace App\Containers\AdminPanel\UI\WEB\Controllers;

use App\Containers\AdminPanel\UI\WEB\Requests\CreateAdminPanelRequest;
use App\Containers\AdminPanel\UI\WEB\Requests\DeleteAdminPanelRequest;
use App\Containers\AdminPanel\UI\WEB\Requests\GetAllAdminPanelsRequest;
use App\Containers\AdminPanel\UI\WEB\Requests\FindAdminPanelByIdRequest;
use App\Containers\AdminPanel\UI\WEB\Requests\UpdateAdminPanelRequest;
use App\Containers\AdminPanel\UI\WEB\Requests\StoreAdminPanelRequest;
use App\Containers\AdminPanel\UI\WEB\Requests\EditAdminPanelRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\AdminPanel\UI\WEB\Requests\ViewDashboardRequest;

/**
 * Class Controller
 *
 * @package App\Containers\AdminPanel\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllAdminPanelsRequest $request
     */
    public function index(GetAllAdminPanelsRequest $request)
    {
        $adminpanels = Apiato::call('AdminPanel@GetAllAdminPanelsAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindAdminPanelByIdRequest $request
     */
    public function show(FindAdminPanelByIdRequest $request)
    {
        $adminpanel = Apiato::call('AdminPanel@FindAdminPanelByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateAdminPanelRequest $request
     */
    public function create(CreateAdminPanelRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreAdminPanelRequest $request
     */
    public function store(StoreAdminPanelRequest $request)
    {
        $adminpanel = Apiato::call('AdminPanel@CreateAdminPanelAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditAdminPanelRequest $request
     */
    public function edit(EditAdminPanelRequest $request)
    {
        $adminpanel = Apiato::call('AdminPanel@GetAdminPanelByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateAdminPanelRequest $request
     */
    public function update(UpdateAdminPanelRequest $request)
    {
        $adminpanel = Apiato::call('AdminPanel@UpdateAdminPanelAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteAdminPanelRequest $request
     */
    public function delete(DeleteAdminPanelRequest $request)
    {
         $result = Apiato::call('AdminPanel@DeleteAdminPanelAction', [$request]);

         // ..
    }


    /**
     * @param \App\Containers\Authentication\UI\WEB\Requests\ViewDashboardRequest $request
     *
     * @return  \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function viewDashboardPage(ViewDashboardRequest $request)
    {
        $result['menu'] = Apiato::call('AdminMenu@GetAllAdminMenusAction', [$request]);

        return view('adminpanel::dashboard.dashboard',$result);
    }
}
