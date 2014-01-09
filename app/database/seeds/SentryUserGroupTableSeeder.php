<?php

class SentryUserGroupTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('sentryusergroup')->truncate();

        DB::table('users_groups')->delete();

        $userUser = Sentry::getUserProvider()->findByLogin('user@user.com');
        $adminUser = Sentry::getUserProvider()->findByLogin('admin@admin.com');

        $userGroup = Sentry::getGroupProvider()->findByName('Users');
        $adminGroup = Sentry::getGroupProvider()->findByName('Administrators');

        // Assign the groups to the users
        $userUser->addGroup($userGroup);
        $adminUser->addGroup($userGroup);
        $adminUser->addGroup($adminGroup);

        // Uncomment the below to run the seeder
        // DB::table('sentryusergroup')->insert($sentryusergroup);
    }

}
