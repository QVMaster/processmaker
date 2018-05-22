<?php
namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FlashMessageTest extends TestCase
{
    /*one for success_message*/
    public function testSuccessMessage()
    {
      $response = $this->get('/');
      $response->assertStatus(302);
      /*set a flash session*/
      $response = $this->withSession()->flash(['message','success_message'])->get('/');
      /*load page and check for session text*/
      $response->assertSeeText('success_message');
      /*reload the page again and make sure its gone*/
      $response = $this->get('/');
      $response->assertDontSeeText('success_message');
    }
    public function testErrorMessage()
    {
      $response = $this->get('/');
      $response->assertStatus(302);
      /*set a flash session*/
      $response = $this->withSession()->flash(['message','error_message'])->get('/');
      /*load page and check for session text*/
      $response->assertSeeText('error_message');
      /*reload the page again and make sure its gone*/
      $response = $this->get('/');
      $response->assertDontSeeText('error_message');
    }
}
