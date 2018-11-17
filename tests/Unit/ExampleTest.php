<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Cliente;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $cliente = factory(Cliente::class)->create([
        	"nombre" => "Alejandro"
        ]);

        $response->assertTrue($cliente->nombre == "Alejandro");
    }
}
