<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    use MasterTableTrait;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $records = [
            [
                'id' => 1,
                'name' => 'Basic 500',
                'Description' => 'The list below gives you the 1000 most frequently used English words '
                                . 'in alphabetical order. Once you\'ve mastered the shorter vocabulary lists, '
                                . 'this is the next step. It would take time to learn the entire list from scratch, '
                                . 'but you are probably already familiar with some of these words. '
                                . 'Feel free to copy this list into your online flashcard management tool, '
                                . 'an app, or print it out to make paper flashcards'
            ],
            [
                'id' => 2,
                'name' => 'At a Restaurant',
                'Description' => 'At The Restaurant - English Vocabulary for Eating Out - '
                                . 'General English Vocabulary for Dining Out in Restaurants'
            ],
            [
                'id' => 3,
                'name' => 'On a Trip',
                'Description' => 'The words below are the most important words used when talking '
                                . 'about travel when taking vacations or on holiday. '
                                . 'Words are categorized into different sections depending on the type of travel'
            ],
            [
                'id' => 4,
                'name' => 'Job and Work',
                'Description' => 'If you’re employed, getting the necessary qualifications for a job, '
                                . 'or still trying to decide what kind of career you’re interested in, '
                                . 'you’ll need to be able to tell the examiner about this '
                                . 'if you’re asked questions about work.'
            ]
        ];
        $this->insertIgnoreRecords('categories', $records);
    }
}
