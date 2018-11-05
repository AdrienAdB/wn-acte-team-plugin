<?php namespace Acte\Team\Components;

use Cms\Classes\ComponentBase;
use Acte\Team\Models\Team as TeamModel;

class Team extends ComponentBase
{

  public function componentDetails()
  {
      return [
          'name' => 'Team',
          'description' => 'Display your team in cards',
      ];
  }

  public function defineProperties()
  {
    return [];
  }

  public function records(){

    return TeamModel::active()->get();

  }




}
