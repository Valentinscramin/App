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
    public function test_set_multiple_equals_email(): void
    {
        $this->post(route('contacts.home'), [
            'name' => fake()->name(),
            'contact' => fake()
                ->unique()
                ->numerify('#########'),
            'email' => 'teste@gmail.com',
        ]);

        $response = $this->post(route('contacts.home'), [
            'name' => fake()->name(),
            'contact' => fake()
                ->unique()
                ->numerify('#########'),
            'email' => 'teste@gmail.com',
        ]);

        $response->assertStatus(405);
    }

    /**
     * A basic feature to test contact.
     */
    public function test_set_multiple_equals_contact(): void
    {
        $this->post(route('contacts.new'), [
            'name' => fake()->name(),
            'contact' => '999999998',
            'email' => fake()->email(),
        ]);

        $response = $this->post(route('contacts.new'), [
            'name' => fake()->name(),
            'contact' => '999999998',
            'email' => fake()->email(),
        ]);

        $response->assertStatus(405);
    }

    /**
     * A basic feature to set more than 9.
     */
    public function test_set_contact_higher_than_nine(): void
    {
        $response = $this->post(route('contacts.new'), [
            'name' => fake()->name(),
            'contact' => '999999999999',
            'email' => fake()->email(),
        ]);

        $response->assertStatus(405);
    }

    /**
     * A basic feature to set less than five.
     */
    public function test_set_name_less_than_five(): void
    {
        $response = $this->post(route('contacts.new'), [
            'name' => 'ana',
            'contact' => fake()
                ->unique()
                ->numerify('#########'),
            'email' => fake()->email(),
        ]);

        $response->assertStatus(405);
    }
}
