<?php

namespace AREA17\Infrastructure\Post\Repository;

use App\Models\Post;
use AREA17\Infrastructure\Repository;
use App\Exceptions\PostNotCreatedException;
use Illuminate\Database\Eloquent\Collection;
use AREA17\Domain\Post\Repository\PostRepositoryInterface;

class PostRepository extends Repository implements PostRepositoryInterface
{
    private $postModel;
    
    public function __construct(Post $postModel)
    {
        $this->postModel = $postModel;
    }
    
    /**
    * create a new post
    * @param array $params
    * @return bool
    */
    public function create(array $params): bool
    {
        try {
            $post = $this->model($this->postModel, $params);
            $res = $post->save();
            
            return $res;
        } catch (\Exception $e) {
            throw new PostNotCreatedException($e->getMessage());
        }
    }
    
    /**
    * display  posts
    */
    public function posts()
    {
        try {
            return $this->postModel->paginate(9);
        } catch (\Exception $e) {
            throw new PostNotCreatedException($e->getMessage());
        }
    }
}