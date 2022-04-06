<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_generate_default_avatar_if_no_picture()
    {
        $user = User::factory()->create([
            'name' => 'Damien',
            'email' => 'fakeemail@fake.com'
        ]);

        $gravatarUrl = $user->getAvatar();

        $this->assertEquals(
            'https://www.gravatar.com/avatar/' . md5($user->email) . '?s=200&d=retro',
            $gravatarUrl
        );

        $response = Http::get($user->getAvatar());
        $this->assertTrue($response->successful());
    }
}
