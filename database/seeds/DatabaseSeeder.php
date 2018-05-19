<?php

use App\job_announce;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//      create 50 jobs announce in database
        if(job_announce::count() == 0)$this->call('Job');
        
//      create just only one user admin
        User::create([
            'name' => 'mahdi',
            'email' => 'mahdi@email.com',
            'password' => bcrypt('123456')
        ]);
    }
}

/**
 * Class Job
 * run method to insert 50 jobs 
 * faker in database table job_announces
 */
class Job extends Seeder
{
    public function run()
    {
          factory(App\job_announce::class, 100)->create();
        factory(\App\Job_category::class,20)-create();
    }
}
