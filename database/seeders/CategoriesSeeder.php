<?php

namespace Database\Seeders;

use App\Models\Category;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{

public $categories = [
'elettronica',
'abbigliamento',
'salute e bellezza',
'casa e giardinaggio',
'giocattoli',
'sport',
'animali domestici',
'auto e moto',
'accessori',
'libri e riviste',
];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
