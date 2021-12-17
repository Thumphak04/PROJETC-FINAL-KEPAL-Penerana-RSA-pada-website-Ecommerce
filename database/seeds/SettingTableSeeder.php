<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            'description'=>"SABA-Store adalah sebuah pltaform ecommerce berbasisi website dimana kami mengutamakan kenyamanan dan kepuasan peanggan",
            'short_des'=>"SABA-Store Sudah berpengalaman lebih dari 10 tahun meberikan produk terbaik di seluruh Indonesia",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'address'=>"NO. 342 - London Oxford Street, 012 United Kingdom",
            'email'=>"sabaICI@gmail.com",
            'phone'=>"+62(822)3123898",
        );
        DB::table('settings')->insert($data);
    }
}
