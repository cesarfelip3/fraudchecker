<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // $this->call('UserTableSeeder');
        $this->call('SentryUserTableSeeder');
        $this->call('SentryGroupTableSeeder');
        $this->call('SentryUserGroupTableSeeder');
    }

}
