<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Postingan extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'postingan';
    public function newUniqueId(): string
    {
        return (string) Uuid::uuid4();
    }
}
