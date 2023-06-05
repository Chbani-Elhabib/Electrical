<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;
use Illuminate\Support\Facades\Hash;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  admin
        People::create([
            'id_people' => '1234',
            'FullName' => 'chbani elhabib',
            'Country' => 'Marroco',
            'Regions' => '',
            'city' => '',
            'Address' => '',
            'UserName' => 'admin',
            'Password' => Hash::make('1234'),
            'User_Group' => 'Admin',
            'Telf' => '',
            'Photo' => 'Users.png',
        ]);
    }
}
