<?php

namespace Blog\Service;

use Blog\Model\PostInterface;

interface PostServiceInterface
{
    public function findAllPosts();
    public function findPost($id);
}
