<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Forum extends Model
{
    use SoftDeletes;

    public function posts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this
            ->hasMany(Post::class, 'forum_id', 'id')
            ->orderByDesc('create_at');
    }

    public function lastPosts(int $count): \Illuminate\Database\Eloquent\Collection
    {
        return $this
            ->hasMany(Post::class, 'forum_id', 'id')
            ->orderByDesc('created_at')
            ->limit($count)
            ->get();
    }

}
