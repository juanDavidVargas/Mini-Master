<?php


class miniMaster extends Controller
{
  private $model;


    public function __construct()
    {
      $this->model = $this->LoadModel('myModel')
    }

  public function index()
  {

      $this->model->__SET('atributte', '');

      $var = $this->model->function();
  }
}
