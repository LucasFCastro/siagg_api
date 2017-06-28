<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Oficio;

class OficioController extends Controller
{
  use \App\Http\Controllers\ControllerTrait;

  protected $model;

  public function __construct(Oficio $model)
  {
    $this->model = $model;
  }

  public function index(Request $request)
  {
      $result = $this->model->with('User')->get();
      return response()->json($result);
  }

  public function show($id)
  {
      $result = $this->model->with('User')->find($id);
      return response()->json($result);
  }

}
