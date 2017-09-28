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
                'type'=>'admin',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'

              ],
              [
                'first_name' =>'Amon',
                'last_name'  =>'Bagoye',
                'email' => 'bagoye@hotmail.com',
                'password' => Hash::make('test1'),
                'status'=>'1',
                'type'=>'student',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'
              ],
              [
                'first_name' =>'Joshua',
                'last_name'  =>'Mwambene',
                'email' => 'mwambene@hotmail.com',
                'password' => Hash::make('test1'),
                'status'  =>true,
                'type'=>'student',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'

              ],
              [
                'first_name' =>'Azori',
                'last_name'  =>'Bhilangoye',
                'email' => 'bhilangoye@hotmail.com',
                'password' => Hash::make('test1'),
                'status'=>'1',
                'type'=>'student',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'
              ],
              [
                'first_name' =>'Festo',
                'last_name'  =>'Godfrey',
                'email' => 'godfrey@hotmail.com',
                'password' => Hash::make('test1'),
                'status'  =>true,
                'type'=>'employee',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'

              ],
              [
                'first_name' =>'Zan',
                'last_name'  =>'Tejider',
                'email' => 'zane@hotmail.com',
                'password' => Hash::make('test1'),
                'status'=>'1',
                'type'=>'employee',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'
              ],
              [
                'first_name' =>'Kakozi',
                'last_name'  =>'Sadock',
                'email' => 'sadock@hotmail.com',
                'password' => Hash::make('test1'),
                'status'  =>true,
                'type'=>'admin',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'

              ],
              [
                'first_name' =>'Allen',
                'last_name'  =>'Joseph',
                'email' => 'joseph@hotmail.com',
                'password' => Hash::make('test1'),
                'status'=>'1',
                'type'=>'student',
                'last_login'=>'2017-09-01',
                'activation_key'=>'#$FTAHGBSBJSJJXLSAOJDNKUATFAIUGSOO+_%$%)'
              ]
          ];

    return $data;

      }
}
