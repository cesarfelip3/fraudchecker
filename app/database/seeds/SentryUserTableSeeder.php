<?php

class SentryUserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        Sentry::getUserProvider()->create(array(
            'email' => 'admin@admin.com',
            'password' => 'sentryadmin',
            'activated' => 1,
        ));

        Sentry::getUserProvider()->create(array(
            'email' => 'user@user.com',
            'password' => 'sentryuser',
            'activated' => 1,
        ));
    }

}
