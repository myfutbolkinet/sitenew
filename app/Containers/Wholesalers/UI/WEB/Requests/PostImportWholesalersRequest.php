<?php

namespace App\Containers\Wholesalers\UI\WEB\Requests;

use App\Ship\Parents\Requests\Request;

/**
 * Class GetAllWholesalersRequest.
 */
class PostImportWholesalersRequest extends Request
{

    /**
     * The assigned Transporter for this Request
     *
     * @var string
     */
   // protected $transporter = \App\Containers\Wholesalers\Data\Transporters\PostImportWholesalersTransporter::class;

    /**
     * Define which Roles and/or Permissions has access to this request.
     *
     * @var  array
     */
    protected $access = [
        'permissions' => 'access-import-wholesalers',
        'roles'       => 'admin',
    ];

    /**
     * Id's that needs decoding before applying the validation rules.
     *
     * @var  array
     */
    protected $decode = [
        // 'id',
    ];

    /**
     * Defining the URL parameters (e.g, `/user/{id}`) allows applying
     * validation rules on them and allows accessing them like request data.
     *
     * @var  array
     */
    protected $urlParameters = [
        // 'id',
    ];

    /**
     * @return  array
     */
    public function rules()
    {
        return [
            'file' => 'file'
        ];
    }

    /**
     * @return  bool
     */
    public function authorize()
    {
        return $this->check([
            'hasAccess',
        ]);
    }
}
