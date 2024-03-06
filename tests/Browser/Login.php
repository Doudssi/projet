<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Login extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function loginTest(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    
                    ->type('name','fatoumata')
                    ->type('email','fatoumata@gmail.com')
                    ->type('password','password358')
                    ->press('Login')
                    ->assertPathIs(path:'/dashboard')
                    ->assertSee('You');
        });
    }
}
