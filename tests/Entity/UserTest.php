<?php

namespace Tests\AppBundle\Entity;

use PHPUnit\Framework\TestCase;

use AppBundle\Entity\User;

Class UserTest extends TestCase{

    public function testModel(){ 
        $user = new User();
        $user->setAge(14);
        $user->setName('Jhon');


        $this->assertEquals(14, $user->getAge()); 
        $this->assertEquals('Jhon', $user->getName()); 
        
        
        }
    
}