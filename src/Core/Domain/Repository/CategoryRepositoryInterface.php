<?php

namespace Core\Domain\Repository;

use Core\Domain\Entity\Category;

interface CategoryRepositoryInterface 
{
    public function insert(Category $category) : Category;
    public function findById(string $id) : Category;
    public function findAll(string $filter = '', $order = 'DESC') : array;
    public function paginate(string $filter = '', $order = 'DESC', int $page = 1, int $totalpage = 15) : array;
    public function update(Category $category) : Category;
    public function delete(string $id) : bool;
    public function toCategory(object $data): Category;
}