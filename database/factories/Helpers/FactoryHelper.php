<?php

namespace Database\Factories\Helpers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\UserFactory;

class FactoryHelper{
   /**
    * Summary of getRandomModelId
    * @param string
    * @param HasFactory $model
    * @return void
    */
   public static function getRandomModelId(string $model){
      $count = $model::query()->count();

      if($count === 0){
          return $model::factory()->create()->id;
      }else{
          return rand(1, $count);
      }
   }
}