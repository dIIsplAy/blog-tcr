<?php

namespace Tests\AppBundle\Entity;

use PHPUnit\Framework\TestCase;

use AppBundle\Entity\Article;

Class ArticleTest extends TestCase{

    public function testModel(){ 
        $article = new Article();
        $article->setTitle('title');
        $article->setImage('1b2e8ecc19546e594a2df0d01a54c4ba.jpeg');
        $article->setCreatedAt(new \DateTime());

        $this->assertEquals('title', $article->getTitle()); 
        $this->assertEquals('1b2e8ecc19546e594a2df0d01a54c4ba.jpeg', $article->getImage());
        $this->assertInstanceOf('DateTime', $article->getCreatedAt()); 

        }
    
}
        //     Public function testModel(){
        //         $article =
        //             (new ArticleTest())
        //             ->setImage()
        //             ->setTile()
        //             ->setDescription()
        //             ->setCreatedAt();
        
        //             $this->assertEquals($image, $article->getImage());
        //     }