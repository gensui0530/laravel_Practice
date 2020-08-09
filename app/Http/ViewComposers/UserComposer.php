<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Auth\Guard;

class UserComposer
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function compose(View $view)
    {
        // userという変数を使えるようにし、その中に$this->auth->user()という値を詰めてビューに渡す。という定義の仕方になります
        $view->with('user', $this->auth->user());
    }
}
