<?php

namespace Tests\Feature\Admin\Clients;

use Symfony\Component\HttpKernel\Client;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientFeatureTest extends TestCase
{
    /** @test */
    public function it_can_list_all_the_clients()
    {
        $client = factory(Client::class)->create([]);
        
        $this->actingAs($user, route('admin.clients.index'))
            ->assertStatus(200)
            ->assertSee($client->name);
        
    }
}
