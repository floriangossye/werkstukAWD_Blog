<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class PostSeeder extends CsvSeeder
{
    public function __construct()
    {

        $this->table = 'posts';
        $this->filename = base_path().'/database/seeds/csvs/Post.csv';
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
       // DB::table($this->table)->truncate();

        parent::run();
    }
}