<?php
 namespace app\models;

 use illuminate\database\eloquent\model;
 class quiz_app extends model{
      Protected $fillable=['title','description'];
      public function question(){
        return $this->hasmany(question::class);
      }
 }
?>