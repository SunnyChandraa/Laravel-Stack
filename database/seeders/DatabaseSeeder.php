<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            User::create([
                'name' => 'Sunny Chandra',
                'username' => 'sunnychandra',
                'email' => 'sunny.chandra310505@gmail.com',
                'password' => bcrypt('12345')
            ]);

        // User::create([
        //     'name' => 'Acrush',
        //     'email' => 'acush@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed laborum corporis ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iste excepturi quas quos voluptate! Ullam recusandae veniam minus aliquid pariatur quod rerum vitae quidem dolorem, necessitatibus, modi aliquam atque omnis officiis sapiente voluptatibus placeat culpa iusto facilis sequi debitis illo consectetur, autem similique. Alias omnis itaque sed soluta, quae, sapiente similique eum illum in cupiditate autem distinctio dicta a eos. Ipsum, animi consequuntur! Explicabo maxime tenetur modi aspernatur consequuntur enim ratione cupiditate, animi vel? Dignissimos tenetur laboriosam itaque odit, distinctio accusamus porro sint voluptatibus enim facilis velit dolorum fuga commodi iste reiciendis fugit ad eligendi expedita corporis cum. Modi, blanditiis.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed laborum corporis ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iste excepturi quas quos voluptate! Ullam recusandae veniam minus aliquid pariatur quod rerum vitae quidem dolorem, necessitatibus, modi aliquam atque omnis officiis sapiente voluptatibus placeat culpa iusto facilis sequi debitis illo consectetur, autem similique. Alias omnis itaque sed soluta, quae, sapiente similique eum illum in cupiditate autem distinctio dicta a eos. Ipsum, animi consequuntur! Explicabo maxime tenetur modi aspernatur consequuntur enim ratione cupiditate, animi vel? Dignissimos tenetur laboriosam itaque odit, distinctio accusamus porro sint voluptatibus enim facilis velit dolorum fuga commodi iste reiciendis fugit ad eligendi expedita corporis cum. Modi, blanditiis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed laborum corporis ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iste excepturi quas quos voluptate! Ullam recusandae veniam minus aliquid pariatur quod rerum vitae quidem dolorem, necessitatibus, modi aliquam atque omnis officiis sapiente voluptatibus placeat culpa iusto facilis sequi debitis illo consectetur, autem similique. Alias omnis itaque sed soluta, quae, sapiente similique eum illum in cupiditate autem distinctio dicta a eos. Ipsum, animi consequuntur! Explicabo maxime tenetur modi aspernatur consequuntur enim ratione cupiditate, animi vel? Dignissimos tenetur laboriosam itaque odit, distinctio accusamus porro sint voluptatibus enim facilis velit dolorum fuga commodi iste reiciendis fugit ad eligendi expedita corporis cum. Modi, blanditiis.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur sed laborum corporis ',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis iste excepturi quas quos voluptate! Ullam recusandae veniam minus aliquid pariatur quod rerum vitae quidem dolorem, necessitatibus, modi aliquam atque omnis officiis sapiente voluptatibus placeat culpa iusto facilis sequi debitis illo consectetur, autem similique. Alias omnis itaque sed soluta, quae, sapiente similique eum illum in cupiditate autem distinctio dicta a eos. Ipsum, animi consequuntur! Explicabo maxime tenetur modi aspernatur consequuntur enim ratione cupiditate, animi vel? Dignissimos tenetur laboriosam itaque odit, distinctio accusamus porro sint voluptatibus enim facilis velit dolorum fuga commodi iste reiciendis fugit ad eligendi expedita corporis cum. Modi, blanditiis.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
       
       

    }
}
