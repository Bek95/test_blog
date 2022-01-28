<?php

namespace AREA17\Domain\Post\Repository;

interface PostRepositoryInterface
{
    /**
    * @param array $params
    * @return bool
    */
    public function create(array $params);
    
    /**
    *
    */
    public function posts();
    
}