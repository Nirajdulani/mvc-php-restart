<?php

class userscontroller
{
  public $user_model;

  public function __construct()
  {

    // use model function for load model folder model name
    model('user');
    $this->user_model = new User();
  }

  public function index()
  {

    $users =  $this->user_model->get_all();

    view('users', compact('users'));
  }

  //User form show post data receive on create function 
  public function show($id = null)
  {
    view('adduser', compact('id'));
  }

   //User form show krva matte pn data sathe jenu action chene upadte function upper jase post maa maaale 
  public function edit($id = null)
  {
       $user =  $this->user_model->get_one($id);
       view('adduser', compact('user','id'));
  }


  public function create()
  {


    $data = [

      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'contact' => $_POST['contact'],
      'address' => $_POST['address'],
      'status' => 'locked',
    ];


    $result = $this->user_model->create($data);

    if ($result) {
      header('Location: ?url=users/index');
      exit;
    }
  }

  public function update($id =null)
  {
    $data = [

      'fullname' => $_POST['fullname'],
      'email' => $_POST['email'],
      'contact' => $_POST['contact'],
      'address' => $_POST['address'],
      'status' => 'locked',
    ];

    $result =  $this->user_model->update($data,$id);
// dd($result);
    if ($result) {
      header('Location: ?url=users/index');
      exit;
    }
   
  }

  public function delete($id)
  {

    $result =  $this->user_model->delete($id);

    if ($result) {
      header('Location: ?url=users/index');
      exit;
    }
  }

  
}
