<?php

namespace Database\Factories;

use App\Models\LotteryCode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class LotteryCodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LotteryCode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'code'=>'vtg230048'.rand(10,100),
            'batch_num'=>20210924,
            'prizes_name'=>$this->faker->word(),
            'valid_period'=>Carbon::now()->addMinutes(4000),
            'prizes_time'=>Carbon::now()->addMinutes(rand(1,100)),
            'operator'=>'cjz',
            'award_status'=>1
        ];
    }
}
