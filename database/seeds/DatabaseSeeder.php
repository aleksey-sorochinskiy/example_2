<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(CountriesSeed::class);
//         $this->call(ReplayMapsSeeding::class);
//         $this->call(ReplayTypesSeeding::class);
//         $this->call(ForumSectionSeeding::class);
//         $this->call(UserRoleSeeding::class);
//         $this->call(GameVersionSeeding::class);
//         $this->call(ForumIconSeed::class);
//         $this->call(UserTestDataSeeding::class);
//         $this->call(TestBannerSedding::class);
         $this->call(DBRelocationDataSeed::class);

    }
}
