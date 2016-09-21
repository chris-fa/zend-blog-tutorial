<?php

namespace Blog\Service;

class PostService implements PostServiceInterface
{
    protected $data = [
        [
            'id'    => 1,
            'title' => 'Hello World #1',
            'text'  => 'This is our first blog post!',
        ],
        [
            'id'    => 2,
            'title' => 'Hello World #2',
            'text'  => 'This is our second blog post!',
        ],
        [
            'id'    => 3,
            'title' => 'Hello World #3',
            'text'  => 'This is our third blog post!',
        ],
        [
            'id'    => 4,
            'title' => 'Hello World #4',
            'text'  => 'This is our fourth blog post!',
        ],
        [
            'id'    => 5,
            'title' => 'Hello World #5',
            'text'  => 'This is our fifth blog post!',
        ],
    ];
    /**
     * {@inheritDoc}
     */
    public function findAllPosts()
    {
        $allPosts = [];
        foreach($this->data as $index => $post) {
            $allPosts[] = $this->findPost($index);
        }
        return $allPosts;
    }

    /**
     * {@inheritDoc}
     */
    public function findPost($id)
    {
        $postData = $this->data[$id];

        $model = new Post();
        $model->setId($postData['id']);
        $model->setTitle($postData['title']);
        $model->setText($postData['text']);

        return $model;
    }
}
