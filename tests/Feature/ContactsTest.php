<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactsTest extends TestCase
{
    /**
     * A basic get information from contacts.
     */
    public function test_get_data(): void
    {
        $response = $this->get(route('contacts.home'));
        $response->assertStatus(200);
    }

    /**
     * A basic feature to test email.
     */
    // public function test_set_multiple_equals_email(): void
    // {
    //     $response = \App\Models\Contacts::factory(2)->create(['email' => 'teste@gmail.com']);
    //     $response->assertSessionHasErrors([0 => 'The email has already been taken.']);
    // }

    /**
     * A basic feature to test contact.
     */
    // public function test_set_multiple_equals_contact(): void
    // {
    //     $response = \App\Models\Contacts::factory(2)->create(['contact' => '999999999']);
    //     // $response->assertSessionHasErrors([0 => 'The contact has already been taken.']);
    //     $this->assertEquals(session('errors')->getBag('default')->first(),'The contact has already been taken.');
    // }

    /**
     * A basic feature to set more than 9.
     */
    // public function test_set_contact_higher_than_nine(): void
    // {
    //     $response = \App\Models\Contacts::factory(2)->create(['contact' => '999999999999']);
    //     $response->assertSessionHasErrors([0 => 'The contact field must not be greater than 9 characters.']);
    // }

    /**
     * A basic feature to set less than five.
     */
    // public function test_set_name_less_than_five(): void
    // {
    //     $response = \App\Models\Contacts::factory(1)->create(['name' => 'ana']);
    //     $response->assertSessionHasErrors([0 => 'The name field must be at least 5 characters.']);
    // }

    /**
     * A basic feature to create role.
     */
    // public function test_create_role_contact(): void
    // {
    //     $response = \App\Models\Contacts::factory(2)->create();
    //     $response->assertStatus(200);
    // }
}
