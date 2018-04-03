<?php

namespace Meiko\Uuid\Tests\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Meiko\Uuid\Uuidable;

class User extends EloquentModel
{
    use Uuidable;
}
