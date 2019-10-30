<?php

use Illuminate\Database\Seeder;
use App\linhvuc;
class themlinhvucseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::Table('linhvuc')->insert(
        //     ['ten_linh_vuc'=>'Lý']
        // );
        // DB::Table('linhvuc')->insert(
        //     ['ten_linh_vuc'=>'Hóa']
        // );
        // DB::Table('linhvuc')->insert(
        //     ['ten_linh_vuc'=>'Toán']
        // );
        // DB::Table('linhvuc')->insert(
        //     ['ten_linh_vuc'=>'Toán']
        // );
        $linhvuc = linhvuc::create(
        	['ten_linh_vuc'=>'Thể Thao']
        );
        $linhvuc = linhvuc::create(
        	['ten_linh_vuc'=>'Toán']
        );
        $linhvuc = linhvuc::create(
        	['ten_linh_vuc'=>'Vật lí']
        );
        $linhvuc = linhvuc::create(
        	['ten_linh_vuc'=>'Địa lý']
        );
        $linhvuc = linhvuc::create(
        	['ten_linh_vuc'=>'Lịch sử']
        );


        
        
    }
}
