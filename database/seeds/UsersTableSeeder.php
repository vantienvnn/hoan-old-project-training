<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
        $records = [
            [
                'id' => 1,
                'name' => 'Vo Van Hoan',
                'email' => 'hoanvv.it@gmail.com',
                'password' => bcrypt('123456'),
                'gender' => '0',
                'address' => 'Da Nang',
                'phone' => '0984617351',
                'birthday' => '1995-02-24'
            ],
            [
                'id' => 2,
                'name' => 'Vo Thi Thanh Minh',
                'email' => 'thanhminh@gmail.com',
                'password' => bcrypt('123456'),
                'gender' => '1',
                'address' => 'Da Nang',
                'phone' => '01225516579',
                'birthday' => '1997-02-23'
            ]
        ];
        $this->insertIgnoreRecords('users', $records);
    }
}
