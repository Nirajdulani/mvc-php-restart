<?php

class doctorscontroller
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

    $doctors =  $this->user_model->get_all();

    view('doctors', compact('doctors'));
  }

  public function show($id = null)
  {
    view('adddoctors', compact('id'));
  }


  public function create()
  {


    $data = [

      'firstname' => $_POST['firstname'],
      'lastname' => $_POST['lastname'],  
      'email' => $_POST['email'],
      'address' => $_POST['address'],
      'About' => $_POST['About'],
      'specialist' => $_POST['specialist'],
      
    ];


    $result = $this->user_model->create($data);

    if ($result) {
      header('Location: ?url=doctors/index');
      exit;
    }
  }

  public function delete($id)
  {

    $result =  $this->user_model->delete($id);

    if ($result) {
      header('Location: ?url=doctors/index');
      exit;
    }
  }
}
