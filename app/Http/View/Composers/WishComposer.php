<?php

namespace App\Http\View\Composers;

use App\Wish;
use Illuminate\View\View;

class WishComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('wishes', Wish::all());
    }
}
