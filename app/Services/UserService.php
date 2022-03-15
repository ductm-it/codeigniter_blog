<?php namespace App\Services;

use App\Models\UserModel;

class UserService extends BaseService
{
    private $userModel;
    public function __construct()
    {
        parent::__construct();
        $this->userModel = new UserModel();
        $this->userModel->protect(false);
    }

    /**
     * get all data user
     */

    public function getAllUser()
    {
        return $this->userModel->findAll();
    }

    /**
     * add new user
     */

    public function addUserInfo($dataRequest)
    {
        $validate = $this->validateAddUser($dataRequest);
        $dataSave = $dataRequest->getPost();
        unset($dataSave['passwordConfirm']);
        $dataSave['password'] = password_hash($dataSave['password'], PASSWORD_BCRYPT);
        $this->userModel->save($dataSave);
        // if($validate->getErrors()){
        //     dd($validate->getErrors());
        // }
        // dd('No errors');
    }

    public function validateAddUser($dataRequest)
    {
        $rule = [
            'email' => 'valid_email|is_unique[users.email]',
            'name' => 'max_length[100]',
            'password' => 'max_length[30]|min_length[6]',
            'passwordConfirm' => 'matches[password]',

        ];
        $messege = [
            'email' => [
                'valid_email' => 'No like email format',
                'is_unique' => 'Email registered Please check again',
            ],
            'max_length' => 'Name is too long Please check again',
            'password' => [
                'max_length' => 'Password is too long Please check again ',
                'min_length' => 'Password at least 6 charecterictes Please check again ',
            ],
            'passwordConfirm' => 'Password dont macth check again'
        ];
        $this->validation->setRules($rule, $messege);
        $this->validation->withRequest($dataRequest)->run();

        return $this->validation;
    }
}
