<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Services\UserService;

class UserController extends BaseController
{
    private $service;
    public function __construct()
    {
        $this->service = new UserService;
    }
    function list() {
        $data = [];
        $dataLayout['users'] = $this->service->getAllUser();
        // dd($data['users']);
        $data = $this->loadMasterLayout($data, 'List Account', 'admin/pages/user/list', $dataLayout);

        return view('admin/main', $data);
    }

    public function add()
    {
        $data = [];
        // $dataLayout['users'] = $this->service->getAllUser();
        // dd($data['users']);
        $data = $this->loadMasterLayout($data, 'Add New Account', 'admin/pages/user/add');
        return view('admin/main', $data);

    }

    public function create(){
        $result = $this->service->addUserInfo($this->request);
    }

    public function edit($id){
        // $user = $this->service->getUserByID($id);
    }
}
