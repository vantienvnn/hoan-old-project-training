<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    use MasterTableTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $catogories = App\Category::all();
        foreach ($catogories as $catogory) {
            factory(App\Word::class, 50)->create([
                'category_id' => $catogory->id
            ])->each(function ($word) {
                $correctAnswer = mt_rand(0,3);
                for($i = 0; $i < 4; $i++){
                    $word->wordAnswers()->save(factory(App\WordAnswer::class)->make([
                        'word_id' => $word->id,
                        'correct' => ($i == $correctAnswer)
                    ]));
                }
            });
        }
    }
}
