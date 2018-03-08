<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use PHPUnit\Framework\Constraint\Exception;
use NunoMaduro\Collision\Adapters\Laravel\ExceptionHandler;
use App\Exceptions\Handler;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp()
    {
        parent::setUp();

        $this->withoutExceptionHandling();
    }

    protected function signIn($user = null)
    {
        $user = $user ?: create('App\User');

        $this->actingAs($user);
        
        return $this;
    }
}
