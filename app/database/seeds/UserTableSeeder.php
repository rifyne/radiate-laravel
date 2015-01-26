<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'name'      => 'chris',
            'email'     => 'chris@cborgia.me',
            'password'  => 'test'
        ]);

        $faker = Faker\Factory::create();

        foreach(range(1,10) as $index)
        {
            User::create([
                'name'      => $faker->username,
                'email'     => $faker->email,
                'password'  => $faker->word
            ]);
        }
    }

}