<?php

class Post
{
    public string $title;
    public bool $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post("My first post", false),
    new Post("My second post", true),
    new Post("My third post", true),
    new Post("My fourth post", true)
];

// array filter
$unpublishedPosts = array_filter($posts, function ($post) {
    return !$post->published;
});

$publishedPosts = array_filter($posts, function ($post) {
    return $post->published;
});

// array map
$modifiedArray = array_map(function ($post) {
    $post->published = true;
    return $post;
}, $posts);

// foreach
foreach ($modifiedArray as $post) {
    $post->published = false;
}

// array column
$titles = array_column($posts,"title");

var_dump($titles);