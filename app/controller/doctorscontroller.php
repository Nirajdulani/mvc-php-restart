<?php

class doctorscontroller
{
  public $doctor_model;

  public function __construct()
  {

    // use model function for load model folder model name
    model('doctor');
    $this->doctor_model = new doctor();
  }

  public function index()
  {

    $doctors =  $this->doctor_model->get_all();

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


    $result = $this->doctor_model->create($data);

    if ($result) {
      header('Location: ?url=doctors/index');
      exit;
    }
  }

  public function delete($id)
  {

    $result =  $this->doctor_model->delete($id);

    if ($result) {
      header('Location: ?url=doctors/index');
      exit;
    }
  }

  public function display($id=null)
  {
    // $doctor =  $this->doctor_model->get_one($id);
    // dd($doctor);
   
  }

  public function edit($id=null)
  {
   
    

  
  }

}
