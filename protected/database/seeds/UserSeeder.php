<?php
use Illuminate\Database\Seeder;

abstract class UserSeeder extends Seeder{

  public function run(){

      if (!isset($this->table)) {
        throw new Exception("No table specified");
      }
      if ( method_exists(get_class(), 'getData')) {
        throw new Exception("No method specified");
      }
      DB::table($this->table)->truncate();
      DB::table($this->table)->insert($this->getData());

  }

}
