<?php

namespace App\Http\View\Composers;

use App\Wishes;
use Illuminate\View\View;

class WishesComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('wishes', Wishes::all());
    }
}
