<?php

use Illuminate\Database\Seeder;

class LessonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = App\User::find(1);
        $categories = App\Category::whereIn('id', array(1,2))->get();
        foreach ($categories as $category) {
            factory(App\Lesson::class, 1)->create([
                'user_id' => $user->id,
                'category_id' => $category->id
            ])->each(function($lesson) use ($user, $category){
                $words = App\Word::where('category_id', $category->id)
                        ->limit(20)
                        ->get();
                foreach ($words as $word) {
                    $lesson->learnedWords()->save(factory(App\LearnedWord::class)->make([
                        'lesson_id' => $lesson->id,
                        'word_answer_id' => $word->wordAnswers()->where('correct', 1)->first()->id
                    ]));
                }

            });
        }
    }
}
