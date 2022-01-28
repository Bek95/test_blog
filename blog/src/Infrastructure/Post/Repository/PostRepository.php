<?php

namespace AREA17\Infrastructure\Post\Repository;

use App\Models\Post;
use AREA17\Infrastructure\Repository;
use App\Exceptions\PostNotCreatedException;

class PostRepository extends Repository
{
    private $postModel;
    
    public function __construct(Post $postModel)
    {
        $this->postModel = $postModel;
    }
    
    public function create(array $params)
    {
        try {
            $post = $this->model($this->postModel, $params);
            $res = $post->save();
            
            return $res;
        } catch (\Exception $e) {
            throw new PostNotCreatedException($e->getMessage());
        }
    }
}