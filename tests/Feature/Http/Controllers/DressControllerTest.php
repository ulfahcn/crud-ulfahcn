<?php

namespace Tests\Feature\Http\Controllers;
use Tests\TestCase;

class DressControllerTest extends TestCase
{
    /**
     * @ Ulfah Choirun Nissa
     * @it_stores_data cek apakah route sesuai
     * @return void
     */
    /** @test */
    public function it_stores_data()
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
    }
}
