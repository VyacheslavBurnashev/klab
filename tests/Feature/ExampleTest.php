<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/welcome');

        $response->assertStatus(200);
    }
    public function check_Test()
    {
        $response = $this->get('/stgudent/1');

        $response->assertStatus(200);
    }
    public function test_not_exist() {
        $response = $this->get('/student/200000');
        $response->assertStatus(404);
    }

    public function test_students_exist() {
        $response = $this->get('student/1');
        $response ->assertViewHas('student');
    }
    
}
