<?php

use Illuminate\Database\Seeder;
use App\quantrivien;
use Illuminate\Support\Facades\Hash;
class themquantrivienseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quantrivien = quantrivien::create(
            ['ten_dang_nhap'=>'admin1',
            'mat_khau'=>Hash::make('123456'),
            'ho_ten'=>'quan tri vien 1'
            ]
        );
        $quantrivien = quantrivien::create(
            ['ten_dang_nhap'=>'admin2',
            'mat_khau'=>Hash::make('abcdef'),
            'ho_ten'=>'quan tri vien 2'
            ]
        );
    }
}
