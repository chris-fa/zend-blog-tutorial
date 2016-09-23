<?php

namespace Blog\Service;

use Doctrine\ORM\EntityManager;
use Blog\Model\Post;
use Application\Entity\Post as PostORM;

class DoctrinePostService implements PostServiceInterface
{
    protected $manager;

    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
    }

    public function findAllPosts()
    {
        $arr = [];
        $posts = $this->manager->getRepository('Application\Entity\Post')->findAll();

        foreach($posts as $post) {
            $arr[] = $this->map($post);
        }

        return $arr;
    }

    public function findPost($id)
    {
        // TODO
    }

    private function map($inner)
    {
        $post = new Post();
        $post->setId($inner->getId());
        $post->setTitle($inner->getTitle());
        $post->setText($inner->getText());

        return $post;
    }
}
