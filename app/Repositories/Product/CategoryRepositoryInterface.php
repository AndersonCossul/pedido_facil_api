<?php
namespace App\Repositories\Product;

/**
 * Interface for the CategoryRepository
 */
interface CategoryRepositoryInterface
{
    /**
     * Returns an array of Category objects.
     *
     * @return array
     */
    public function all();

    /**
     * Returns an Category Object with the provided id.
     *
     * @return object
     */
    public function get($id);

    /**
     * Returns a boolean reflecting the creation status.
     *
     * @return boolean
     */
    public function create($request);

    /**
     * Returns a boolean reflecting the update status.
     *
     * @return boolean
     */
    public function udpate($request);

    /**
     * Returns a boolean reflecting the deletion status.
     *
     * @return boolean
     */
    public function delete($request);
}