<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Author extends \Kdyby\Doctrine\Entities\BaseEntity
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $email;
    
    public function setName($name) {
        $this->name=$name;
    }
    
    public function setEmail($email) {
        $this->email=$email;
    }
    
    public function getName() {return $this->name;}
    
    public function getEmail() {return $this->email;}

}