<?php

namespace App\Http\Services;

use App\Wish;

/**
 * Class WishService
 * @package App\Http\Services
 */
class WishService
{
    /**
     * @param array $data
     */
    public function store(array $data) {
        return $this->save(
            new Wish,
            $data
        );
    }

    /**
     * @param Wish $wish
     * @param array $data
     */
    public function update(Wish $wish, array $data) {
        return $this->save(
            $wish,
            $data
        );
    }

    /**
     * @param Wish $wish
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Wish $wish)
    {
        return $wish->delete();
    }

    /**
     * @param Wish $wish
     * @return bool
     */
    public function storeImage(Wish $wish)
    {
        return $wish->update(
            [
                'plaatje' => $wish->plaatje->store('uploads', 'public')
            ]
        );
    }

    /**
     * Save Model in the database.
     * @param Wish $wish
     * @param array $data
     * @return Wish
     */
    private function save(Wish $wish, array $data){
        $wish->fill($data);
        $wish->save();

        return $wish;
    }

}
