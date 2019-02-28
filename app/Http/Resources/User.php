<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class User extends Resource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    return
    [

    'id' => $this->id,
    'email' => $this->email,
    'name' => ucwords(strtolower($this->first_name)).' '.ucwords(strtolower($this->last_name)),

    ];

  }
}

