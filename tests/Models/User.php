<?php

namespace Meiko\Uuidable\Tests\Models;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use Meiko\Uuidable\Uuidable;

class User extends EloquentModel
{
    use Uuidable;
}
