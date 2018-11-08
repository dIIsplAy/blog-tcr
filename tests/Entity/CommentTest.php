<?php

namespace Tests\AppBundle\Entity;

use PHPUnit\Framework\TestCase;

use AppBundle\Entity\Comment;

Class CommentTest extends TestCase{

    public function testModel(){ 
        $comment = new Comment();
        $comment->setContent('super article');
        $comment->setArticle(null);
        

        $this->assertEquals('super article', $comment->getContent()); 
        $this->assertEquals(null, $comment->getArticle()); 
        
        }
    
}