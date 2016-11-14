<?php

namespace models;
/**
 *
 *
 * Interface RepositoryInterface
 * @package Repositories
 */
interface RepositoryInterface
{
    /**
     * Insert new entity data to the DB
     * @param array $entityData
     * @return mixed
     */
    public function insert(array $entityData);

    /**
     * Update exist entity data in the DB
     * @param array $entityData
     * @return mixed
     */
    public function update(array $entityData);

    /**
     * Delete entity data from the DB
     * @param array $entityData
     * @return mixed
     */
    public function remove(array $entityData);
}

