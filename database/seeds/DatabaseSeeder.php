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
        if(job_announce::count() == 0)$this->call('Job');
        User::create([
            'name' => 'mahdi',
            'email' => 'mahdi@email.com',
            'password' => bcrypt('123456')
        ]);
    }
}


class Job extends Seeder
{
    public function run()
    {
          factory(App\job_announce::class, 50)->create();
    }
}
