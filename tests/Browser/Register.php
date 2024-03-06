<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Register extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     */
    public function enregistrement_utilisateur(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')

                    //->assertSee('Register')
                    ->assertSee('name','amadou')
                    ->assertSee('email','amadou@gmail.com')
                    ->assertSee('password','ama123')
                    ->assertSee('password_confirmation','ama123')
                    ->press('Register')
                    ->assertPathIs('/home');

        });
    }
}
