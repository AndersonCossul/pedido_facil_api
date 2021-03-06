<?php
namespace App\Repositories\Product;

/**
 * Interface for the ProductRepository
 */
interface ProductRepositoryInterface
{
    /**
     * Returns an array of Product objects.
     *
     * @return array
     */
    public function all();

    /**
     * Returns an Product Object with the provided id.
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