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
            'name' => 'Shiro X',
            'email' => 'shirox@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'name' => 'Doddy Ferdiansah',
            'email' => 'doddy@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, ab ',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, ab aliquid nemo sunt voluptatem minus ut blanditiis nam iusto fuga quas beatae quisquam numquam quo cum, suscipit iure vel architecto officiis facere recusandae dolores autem alias. Itaque optio obcaecati quae temporibus error eum quam, cum, distinctio officiis officia aut sunt non pariatur possimus ad autem vel aliquam qui minus dolor suscipit neque. Deserunt temporibus est alias asperiores molestiae, modi aliquam placeat ex illo soluta beatae vero, incidunt aliquid, nostrum dignissimos.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-ke-dua',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, ab ',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, ab aliquid nemo sunt voluptatem minus ut blanditiis nam iusto fuga quas beatae quisquam numquam quo cum, suscipit iure vel architecto officiis facere recusandae dolores autem alias. Itaque optio obcaecati quae temporibus error eum quam, cum, distinctio officiis officia aut sunt non pariatur possimus ad autem vel aliquam qui minus dolor suscipit neque. Deserunt temporibus est alias asperiores molestiae, modi aliquam placeat ex illo soluta beatae vero, incidunt aliquid, nostrum dignissimos.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ke-tiga',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, ab ',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, ab aliquid nemo sunt voluptatem minus ut blanditiis nam iusto fuga quas beatae quisquam numquam quo cum, suscipit iure vel architecto officiis facere recusandae dolores autem alias. Itaque optio obcaecati quae temporibus error eum quam, cum, distinctio officiis officia aut sunt non pariatur possimus ad autem vel aliquam qui minus dolor suscipit neque. Deserunt temporibus est alias asperiores molestiae, modi aliquam placeat ex illo soluta beatae vero, incidunt aliquid, nostrum dignissimos.',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-ke-empat',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, ab ',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae, ab aliquid nemo sunt voluptatem minus ut blanditiis nam iusto fuga quas beatae quisquam numquam quo cum, suscipit iure vel architecto officiis facere recusandae dolores autem alias. Itaque optio obcaecati quae temporibus error eum quam, cum, distinctio officiis officia aut sunt non pariatur possimus ad autem vel aliquam qui minus dolor suscipit neque. Deserunt temporibus est alias asperiores molestiae, modi aliquam placeat ex illo soluta beatae vero, incidunt aliquid, nostrum dignissimos.',
            'category_id' => 2,
            'user_id' => 2,
        ]);
    }
}

