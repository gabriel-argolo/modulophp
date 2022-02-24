<?php

class Post
{
    public int $id;
    public int $likes = 0;
    public array $comments = [];
    public string $author;
/*
    public function __contruct($postId)
    {
        $this->id = $postId;
        //Consultar bd para verficar as informaçoes do POST $id
        $this->likes = 12*$postId;
    }
*/
    public function aumentarLike()
    {
        $this->likes++;
    }
    public function setAuthor($n){
        $this->author = ucfirst($n);
    }
    public function getAuthor(){
        return $this->author;
    }
}

$post1 = new Post();
$post1->setAuthor ('gabriel');
$post2 = new Post();
$post2->setAuthor('Fulano');


echo "POST 1:" . $post1->likes." Likes - ".$post1->getAuthor();
"<br/>";

echo "<hr/>";

echo "POST 2:" . $post2->likes." Likes - ".$post2->getAuthor();
"<br/>";
