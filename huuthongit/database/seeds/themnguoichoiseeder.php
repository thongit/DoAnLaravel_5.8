<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\nguoichoi;
use Illuminate\Support\Facades\Hash;
class themnguoichoiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1;
        while($count < 51) {
			echo "Them nguoi choi thu " . $count . "\n";
        	$ten_dang_nhap = Str::random(8);
        	App\nguoichoi::create([
        		'ten_dang_nhap' => $ten_dang_nhap,
        		'mat_khau'		=> Hash::make(Str::random(6)),
        		'email'			=> $ten_dang_nhap . '@gmail.com',
        		'hinh_dai_dien'	=> $ten_dang_nhap . '.jpg',
        		'diem_cao_nhat'	=> rand(1000, 5000),
        		'credit'		=> rand(10, 500)
        	]);
        	$count++;
        }
    }
}
