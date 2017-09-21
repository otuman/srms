<?php

class UsersTableSeeder extends UserSeeder{

      protected $table = "users";

      public function getData() {
         $data = [
              [
                'first_name' =>'Otoman',
                'last_name'  =>'Nkomanya',
                'email' => 'otomang@hotmail.com',
                'password' => Hash::make('test1'),
                'status'  =>true,
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'

              ],
              [
                'first_name' =>'Amon',
                'last_name'  =>'Bagoye',
                'email' => 'bagoye@hotmail.com',
                'password' => Hash::make('test1'),
                'status'=>'1',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'
              ]
          ];

    return $data;

      }
}
