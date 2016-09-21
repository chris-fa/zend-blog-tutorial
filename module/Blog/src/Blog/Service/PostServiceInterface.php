<?php

namespace Blog\Service;

use Blog\Model\PostInterface;

interface BlogServiceInterface
{
    public function findAllPosts();
    public function findPost($id);
}
