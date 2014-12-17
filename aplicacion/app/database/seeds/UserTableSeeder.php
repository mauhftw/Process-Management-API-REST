<?php
 
class UserTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
 
        User::create(array(
            'username' => 'admin',
            'password' => Hash::make('supersecret'),
	    'key' => Hash::make('zR9eEw3WfrSY1NxO2jmUBBoD21wKqVwg5')
        ));
 
    }
 
}
?>
