<?php

use Flynsarmy\CsvSeeder\CsvSeeder;

class TagSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->table = 'tags';
        $this->filename = base_path().'/database/seeds/csvs/Tags.csv';
    }

    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();

        // Uncomment the below to wipe the table clean before populating
        //DB::table($this->table)->truncate();

        parent::run();
    }
}
