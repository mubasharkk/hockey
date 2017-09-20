<?php

use App\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::transaction(function() {
            $data  = DB::table('clubs')->select(['region'])->groupBy("region")->get();

            $rows = [];
            foreach ($data as $item){
                $rows[] = [
                    'name' => $item->region
                ];
            }

            Region::insert($rows);
        });
    }
}
