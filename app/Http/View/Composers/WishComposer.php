<?php

namespace App\Http\View\Composers;

use App\Wishes;
use Illuminate\View\View;

class WishComposer
{
    /**
     * @param View $view
     */
    public function compose(View $view
    )
    {
        $view->with('wish', Wishes::where('id', request('wish'))->first());
    }
}
