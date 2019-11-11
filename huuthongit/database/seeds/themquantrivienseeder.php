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
            ['ten_dang_nhap'=>'huuthong',
            'mat_khau'=>Hash::make('123456'),
            'ho_ten'=>'Nguyễn Hữu Thông'
            ]
        );
        $quantrivien = quantrivien::create(
            ['ten_dang_nhap'=>'minhqui',
            'mat_khau'=>Hash::make('123456'),
            'ho_ten'=>'Trương Minh Quí'
            ]
        );
        $quantrivien = quantrivien::create(
            ['ten_dang_nhap'=>'minhnhut',
            'mat_khau'=>Hash::make('123456'),
            'ho_ten'=>'Trần Minh Nhựt'
            ]
        );
    }
}
