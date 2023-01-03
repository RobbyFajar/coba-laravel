<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Category;
use app\Models\User;
use app\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\User::create([
        //     'name' => 'robby fajar m',
        //     'email' => 'robbyfajar@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // \App\Models\User::create([
        //     'name' => 'abdul',
        //     'email' => 'dul@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        \App\Models\Category::create([
            'name' => 'Programing',
            'slug' => 'programing'
        ]);

        \App\Models\Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        \App\Models\Post::factory(20)->create();

        // \App\Models\Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug'  => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil delectus quidem harum, explicabo architecto nostrum atque doloribus provident quo. Error temporibus laboriosam maxime maiores enim excepturi quod quas autem quam omnis, blanditiis molestiae tempore consequuntur voluptatem ipsum ratione amet tempora animi rem, culpa aliquam quasi quo suscipit provident! Officia necessitatibus consequatur laborum, voluptatibus suscipit magni harum numquam doloremque rem tempore provident? Laudantium mollitia expedita fugit eos voluptates saepe rerum perspiciatis consequatur repellat enim, ratione ex eum consequuntur tempore vel non quo aliquam animi quidem placeat unde ipsam eaque quia. Perferendis deleniti quibusdam suscipit inventore optio ullam qui dolorum dolores corporis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // \App\Models\Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug'  => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil delectus quidem harum, explicabo architecto nostrum atque doloribus provident quo. Error temporibus laboriosam maxime maiores enim excepturi quod quas autem quam omnis, blanditiis molestiae tempore consequuntur voluptatem ipsum ratione amet tempora animi rem, culpa aliquam quasi quo suscipit provident! Officia necessitatibus consequatur laborum, voluptatibus suscipit magni harum numquam doloremque rem tempore provident? Laudantium mollitia expedita fugit eos voluptates saepe rerum perspiciatis consequatur repellat enim, ratione ex eum consequuntur tempore vel non quo aliquam animi quidem placeat unde ipsam eaque quia. Perferendis deleniti quibusdam suscipit inventore optio ullam qui dolorum dolores corporis.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // \App\Models\Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug'  => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil delectus quidem harum, explicabo architecto nostrum atque doloribus provident quo. Error temporibus laboriosam maxime maiores enim excepturi quod quas autem quam omnis, blanditiis molestiae tempore consequuntur voluptatem ipsum ratione amet tempora animi rem, culpa aliquam quasi quo suscipit provident! Officia necessitatibus consequatur laborum, voluptatibus suscipit magni harum numquam doloremque rem tempore provident? Laudantium mollitia expedita fugit eos voluptates saepe rerum perspiciatis consequatur repellat enim, ratione ex eum consequuntur tempore vel non quo aliquam animi quidem placeat unde ipsam eaque quia. Perferendis deleniti quibusdam suscipit inventore optio ullam qui dolorum dolores corporis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
