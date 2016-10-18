<?php


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginTest extends TestCase
{
    use DatabaseMigrations;

    public function testLoginPageShowsLoginForm() {
        $this->visit('/login')
            ->see('Usuari')
            ->see('Password')
        ;
    }

    protected function createTestUser(){

      return factory(App\User::class,1)->create(['password'->]);

    }

    public function testLoginPostWithUserOk() {
        $user = $this->createTestUser();
        $this->visit(/login)
        ->type($user->name)
            ->type('123456','password')
            ->press('login')
            ->seepage('/home')
    }

}