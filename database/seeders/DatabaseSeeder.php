<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Sakata Gintoki',
            'username' => 'sakatagin',
            'email' => 'sakatagin@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'Toshiro Hitsugaya',
        //     'email' => 'toshiro@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);

        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);

        Category::create([
            'name' => 'Data Science',
            'slug' => 'data-science',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Postingan Pertama',
        //     'slug' => 'postingan-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim cupiditate sit soluta ipsa modi repellendus, asperiores commodi! Autem, maxime hic animi dolorum doloremque voluptatibus, quam perspiciatis illum, ipsum quaerat ex.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores porro laudantium labore asperiores officiis vitae excepturi voluptatem enim quidem est accusantium doloremque laborum eos eius corporis quis culpa, recusandae ab. Laborum architecto ipsum dolores voluptatem eos tenetur voluptas illo minus dolor delectus? Facilis at et reprehenderit recusandae praesentium nam incidunt voluptas dolorem soluta, ipsam libero est sint, possimus molestias adipisci vitae, ullam eum enim dolorum. Dicta consequatur, laboriosam odit voluptates in impedit, aspernatur dolorum excepturi nulla ipsum voluptas iure quod qui exercitationem possimus aperiam? Veniam reprehenderit harum accusamus magnam commodi dignissimos minus dolorum et qui cupiditate, eligendi aliquam quidem? Unde.',
        //     'user_id' => 1,
        //     'category_id' => 1,
        // ]);

        // Post::create([
        //     'title' => 'Postingan Ke Dua',
        //     'slug' => 'postingan-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim cupiditate sit soluta ipsa modi repellendus, asperiores commodi! Autem, maxime hic animi dolorum doloremque voluptatibus, quam perspiciatis illum, ipsum quaerat ex.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores porro laudantium labore asperiores officiis vitae excepturi voluptatem enim quidem est accusantium doloremque laborum eos eius corporis quis culpa, recusandae ab. Laborum architecto ipsum dolores voluptatem eos tenetur voluptas illo minus dolor delectus? Facilis at et reprehenderit recusandae praesentium nam incidunt voluptas dolorem soluta, ipsam libero est sint, possimus molestias adipisci vitae, ullam eum enim dolorum. Dicta consequatur, laboriosam odit voluptates in impedit, aspernatur dolorum excepturi nulla ipsum voluptas iure quod qui exercitationem possimus aperiam? Veniam reprehenderit harum accusamus magnam commodi dignissimos minus dolorum et qui cupiditate, eligendi aliquam quidem? Unde.',
        //     'user_id' => 2,
        //     'category_id' => 2,
        // ]);
    }
}
