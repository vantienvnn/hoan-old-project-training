<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    $faker->addProvider(new Faker\Provider\ro_RO\PhoneNumber($faker));
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'gender' => $faker->numberBetween(0,1),
        'phone' => $faker->premiumRatePhoneNumber,
        'address' => $faker->address,
        'birthday' =>$faker->date($format = 'Y-m-d', $max = 'now'),
        'remember_token' => str_random(10),
    ];
});
/*Word*/
$factory->define(App\Word::class, function (Faker\Generator $faker) {
   return [
       'content' => $faker->word,
       'category_id' => 1,
       'audio' => $faker->url
   ];
});
/*WordAnswer*/
$factory->define(App\WordAnswer::class, function (Faker\Generator $faker) {
    $faker->addProvider(new Faker\Provider\vi_VN\Person($faker));
    return [
        'content' => $faker->middleNameMale,
        'word_id' => 1,
        'correct' => 0
    ];
});
/*Lesson*/
$factory->define(App\Lesson::class, function (Faker\Generator $faker) {
    return [
        'user_id' => 1,
        'category_id' => 1,
        'result' => 20
    ];
});
/*Learned word*/
$factory->define(App\LearnedWord::class, function (Faker\Generator $faker) {
    return [
        'lesson_id' => 1,
        'word_answer_id' => 1,
        'learned_time' => 1
    ];
});
/*Catogory*/
$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'description' => $faker->text(200)
    ];
});
