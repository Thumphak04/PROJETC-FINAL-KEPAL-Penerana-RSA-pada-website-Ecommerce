<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array(
                'name'=>'Thumphak',
                'email'=>'thumphakn@gmail.com',
                'password'=>Hash::make('rahasia'),
                'role'=>'admin',
                'status'=>'active'
            ),
            array(
                'name'=>'Nazir',
                'email'=>'nazir@gmail.com',
                'password'=>Hash::make('rahasia'),
                'role'=>'user',
                'status'=>'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
