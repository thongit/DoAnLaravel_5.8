<?php
use Illuminate\Database\Seeder;
use App\cauhoi;
class themcauhoiseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cauhoi = cauhoi::create(
            ['noi_dung'=>'Cầu thủ trưởng thành từ lò Southampton, thành danh ở Tottenham và hiện khoác áo Real Madrid ?',
            'linh_vuc_id'=>'15',
            'phuong_an_a'=>'Alvaro Arbeloa',
            'phuong_an_b'=>'James Rodriguez',
            'phuong_an_c'=>'Gareth Bale',
            'phuong_an_d'=>' Cristiano Ronaldo',
            'dap_an'=>'Gareth Bale']
        );
    }
}
