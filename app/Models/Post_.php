<?php

namespace App\Models;


class Post 
{
    static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sunny Chandra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nam incidunt commodi id eveniet! Maxime, iusto. Doloribus, quae? Quis libero perferendis iure alias laborum, cum enim ea corrupti a quidem mollitia labore repellendus porro qui neque sapiente nemo aut sunt temporibus! Aliquid aliquam consequuntur culpa explicabo a fuga nulla itaque, esse vel ipsam qui nobis, magnam placeat magni asperiores veniam iusto eligendi fugit nostrum! Recusandae hic sapiente quasi itaque quidem accusamus nam mollitia, provident dolores qui ipsum ducimus nemo aliquid."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Acrushhhh <3",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quaerat, magnam maxime ipsam fugiat adipisci reiciendis quae atque nemo, corrupti, sit optio! Dolore cupiditate non veritatis ab repellendus et doloribus magnam iste nisi, ducimus nulla neque tenetur quisquam, cumque porro ad. Placeat ullam facere ut architecto molestiae temporibus atque explicabo ad corrupti, eligendi vel perspiciatis aut asperiores recusandae dignissimos perferendis dolore est dicta voluptatem facilis. Deserunt maxime porro molestias assumenda voluptatem aut. Ea error aliquid, iusto blanditiis quidem eos quam? Amet, perferendis iure vel ipsa repudiandae, dolores consequatur adipisci fugiat voluptatibus consectetur nemo illum. Ab illo dolorem illum non voluptatibus provident."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p) {
        // if($p["slug"] === $slug) {
        //     $post = $p;
        // }

        return $posts->firstWhere('slug', $slug);
    
    }
}
