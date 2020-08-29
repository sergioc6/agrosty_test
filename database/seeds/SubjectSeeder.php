<?php

use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Subject::insert([
            [
                'desc' => 'reclamo'
            ],
            [
                'desc' => 'solicitud'
            ],
            [
                'desc' => 'queja'
            ],
        ]);
    }
}
