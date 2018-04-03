<?php

namespace Meiko\Uuid\Tests;

use Meiko\Uuid\Tests\Models\User;

class UuidTraitTest extends TestCase
{
    /** @test */
    public function modelsHaveAUuid()
    {
        $user = new User;
        $user->save();

        $this->assertTrue(isset($user->uuid));
    }
}
