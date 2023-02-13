<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Register;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Register::class);

        $component->assertStatus(200);
    }
}
