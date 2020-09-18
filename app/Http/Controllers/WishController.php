<?php

namespace App\Http\Controllers;

use App\Http\Services\WishService;
use App\Http\Requests\StoreWishRequest;
use App\Wishes;

/**
 * Class WishController
 * @package App\Http\Controllers
 */
class WishController extends Controller
{
    /**
     * @var WishService
     */
    private $wishService;

    /**
     * WishController constructor.
     * @param WishService $wishService
     */
    public function __construct(WishService $wishService)
    {
        $this->wishService = $wishService;
    }

    /**
     * stores a wish
     *
     * @param StoreWishRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreWishRequest $request)
    {
        $wish = $this->wishService->store($request->validated());

        $this->storeImage($wish);

        return redirect('/wish/show');
    }

    /**
     * updates a wish
     *
     * @param StoreWishRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Wishes $wish, StoreWishRequest $request)
    {
        $wish = $this->wishService->update($wish, $request->validated());

        $this->storeImage($wish);

        return redirect('/wish/show');
    }
//todo @momo

    /**
     * deletes a wish
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function delete(Wishes $wish)
    {
        $this->wishService->delete($wish);

        return redirect('/wish/show');
    }

    /**
     * stores an image
     *
     * @param $wish
     */
    private function storeImage($wish)
    {
        if (request()->has('plaatje'))
        {
            $wish->update(
                [
                    'plaatje' => request()->plaatje->store('uploads', 'public')
                ]
            );
        }
    }
}
