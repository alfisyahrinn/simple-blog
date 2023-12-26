<?php

namespace App\Models;

use Termwind\Components\Dd;

class Post
{
    private static $blog_post = [
        [
            "judul" => "anak hilang",
            "slug" => "anak-hilang",
            "author" => "Bambang pamungkas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, blanditiis rerum, distinctio voluptas eius iste eaque enim commodi maxime, voluptatum ipsam possimus? Incidunt eligendi quo similique blanditiis et dolores ratione exercitationem sunt libero pariatur laboriosam praesentium, id repellat nam quis? Alias doloremque obcaecati natus nulla! Eaque voluptatem sed sunt non? Repellat neque corporis dignissimos distinctio voluptatem tempore beatae fugiat dicta! Ad obcaecati est aut, assumenda eveniet atque quam sit necessitatibus ratione, quidem incidunt possimus. Itaque, quasi quae. Beatae, commodi minus?"
        ],
        [
            "judul" => "please sack graham potter",
            "slug" => "please-sack-graham-potter",
            "author" => "chelindo",
            "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo natus adipisci itaque nam neque debitis. Corporis autem omnis fugit sit placeat sed aperiam delectus est velit recusandae harum repellendus sequi impedit inventore, voluptate quasi porro veniam in veritatis. Hic iste ad quaerat ea porro praesentium saepe, odio sunt facilis pariatur delectus quos et maiores beatae corrupti accusamus sed vitae officia nobis tempora aut? Soluta iure id doloremque consectetur autem maxime in enim placeat ipsam perspiciatis ullam numquam officiis repudiandae eligendi voluptas voluptatum vel reprehenderit, eaque blanditiis nulla atque quasi consequuntur nostrum delectus! Necessitatibus corrupti ullam esse, deserunt cum quos ex doloribus. Illum consequatur, commodi aut atque veritatis odit incidunt ratione harum eius itaque! Rerum soluta magnam, iste non sapiente animi."
        ],
        [
            "judul" => "Thomas tuchel first win in bayern",
            "slug" => "Thomas-tuchel-first-win-in-bayern",
            "author" => "alfi syahrin",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, blanditiis rerum, dique blanditiis et dolores ratione exercitationem sunt libero pariatur laboriosam praesentium, id repellat nam quis? Alias doloremque obcaecati natus nulla! Eaque voluptatem sed sunt non? Repellat neque corporis dignissimos distinctio voluptatem tempore beatae fugiat dicta! Ad obcaecati est aut, assumenda eveniet atque quam sit necessitatibus ratione, quidem incidunt possimus. Itaque, quasi quae. Beatae, commodi minus?"
        ]
    ];

    public static function all()
    {
        return  collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts =  static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
