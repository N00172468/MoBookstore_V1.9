<?php
# @Author: John Carlo M. Ramos
# @Date:   2019-11-19T15:17:33+00:00
# @Email:  !!!!!---CTRL + ALT + C = Colour Picker---!!!!!
# @Last modified by:   John Carlo M. Ramos
# @Last modified time: 2019-11-19T15:29:04+00:00




namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{
    /** @test */
    public function user_needs_to_be_logged_in_to_see_dashboard() {
      $response = $this->get('/home')->assertRedirect('/login');
    }
}
