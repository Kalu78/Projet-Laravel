<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Utilisateur as Utilisateur;
use App\Models\Produit as Produit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $produit = new Produit;
        $produit->name = 'furrytown';
        $produit->description = "go yoink haha";
        $produit->platform = 'PS4';
        $produit->type = 'RPG';
        $produit->price = '40';
        $produit->gallery ='https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/bb8542e8-d7a1-4fea-946b-5bdb0eb1f3fe/d7cvaiu-46fe281f-6567-43d6-a9c9-52178413a501.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2JiODU0MmU4LWQ3YTEtNGZlYS05NDZiLTViZGIwZWIxZjNmZVwvZDdjdmFpdS00NmZlMjgxZi02NTY3LTQzZDYtYTljOS01MjE3ODQxM2E1MDEucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.kR3HkSxOHMltdX-X0HNAUWGxG683OgIaEqGlvQsotuM';
        $produit->save();
    }
}
