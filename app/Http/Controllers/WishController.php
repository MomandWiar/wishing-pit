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
        $this->middleware('auth');
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

        $this->wishService->storeImage($wish);

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

        $this->wishService->storeImage($wish);

        return redirect('/wish/show');
    }

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
     * stores a image
     *
     * @param Wish $wish
     */
    public function storeImage(Wish $wish)
    {
        $wish->update(
            [
                'plaatje' => $wish->plaatje->store('uploads', 'public')
            ]
        );
    }
}
