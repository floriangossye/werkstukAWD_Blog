<?php

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
        //Seed Posts
        $this->call(PostSeeder::class);
        //Seed Comments
        $this->call(CommentSeeder::class);
        //Seed Tags
        $this->call(TagSeeder::class);
        //Seed Category
        $this->call(CategorySeeder::class);
        //Roleseeder
        $this->call(RoleTableSeeder::class);
        //Userseeder
        $this->call(UserTableSeeder::class);









    }

}
