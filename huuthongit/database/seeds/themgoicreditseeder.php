<?php

use Illuminate\Database\Seeder;
use App\goicredit;
class themgoicreditseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $goicredit = goicredit::create(
        	['ten_goi'=>'Gói A','credit'=>'100','so_tien'=>'50000']
        );
        $goicredit = goicredit::create(
        	['ten_goi'=>'Gói B','credit'=>'200','so_tien'=>'90000']
        );
        $goicredit = goicredit::create(
        	['ten_goi'=>'Gói C','credit'=>'300','so_tien'=>'140000']
        );
    }
}
