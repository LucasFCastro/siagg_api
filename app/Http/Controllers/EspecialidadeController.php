<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Especialidade;

class EspecialidadeController extends Controller
{
  use \App\Http\Controllers\ControllerTrait;

  protected $model;

  public function __construct(Especialidade $model)
  {
    $this->model = $model;
  }

}
