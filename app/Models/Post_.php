<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Shiro X",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto illo harum similique incidunt cumque! Natus, voluptatibus, autem ex totam id impedit, ducimus explicabo sed saepe fugiat praesentium tempora? Eum, quae doloribus consequatur at voluptas ratione quia, impedit neque fuga cum non magni id ut ab tenetur, praesentium consequuntur eligendi iste soluta? Nihil ad nobis consequatur molestias adipisci culpa. Libero doloremque quo eveniet veniam omnis repellendus ut asperiores voluptate? Repellat aliquam voluptas soluta, dolor quod adipisci consequatur illo officiis earum assumenda?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Shiro Z",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam cum, est explicabo deleniti quis vero sint veniam blanditiis, ut magnam, corporis necessitatibus itaque laudantium. Quidem perferendis quisquam nesciunt asperiores voluptates culpa, quas accusamus ipsam, provident fugiat officia harum quasi? Atque beatae eligendi recusandae at labore similique ut illum ad sequi. Necessitatibus distinctio molestias laudantium eos molestiae incidunt nihil officia recusandae iste voluptatum perferendis consequuntur eum nobis, reiciendis eius minus ducimus amet animi ullam at odio sed. Exercitationem tempore incidunt nisi, doloribus veniam hic nesciunt, odit minima repudiandae molestias consequatur corrupti illo! Itaque amet ratione dignissimos, reiciendis eveniet enim iure optio."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
