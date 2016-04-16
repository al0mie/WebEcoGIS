<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InitialTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInit()
    {
        $response = $this->call('GET', '/');
    	$this->assertEquals(200, $response->status());
    }

	
}
