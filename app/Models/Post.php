<?php

namespace App\Models;

use Clockwork\Storage\Search;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'excerpt',
        'body'
    ];
    protected $with = ['user', 'category'];
    protected $guarded  = ['id'];

    /**
     * Get the category that owns the post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%');
        // }
        $query->when(isset($filters['search']) ? $filters['search'] : false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });

        // $query->when(isset($filters['category']) ? $filters['category'] : false, function ($query, $category) {
        //     return $query->whereHas('category', function ($query) use ($category) {
        //         $query->where('slug', $category);
        //     });
        // });
        if (isset($filters['category']) ? $filters['category'] : false) {
            return $query->whereHas('category', function ($query) use ($filters) {
                $query->where('slug', $filters['category']);
            });
        }

        $query->when(isset($filters['author']) ? $filters['author'] : false, function ($query, $author) {
            return $query->whereHas('user', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }
}
