<?php

namespace Meiko\Uuidable\Tests;

use Meiko\Uuidable\Tests\Models\User;

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
