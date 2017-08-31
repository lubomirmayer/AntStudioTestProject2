<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Article extends \Kdyby\Doctrine\Entities\BaseEntity
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
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="articles", cascade={"persist"})
     * @ORM\JoinColumn(name="author_id", referencedColumnName="id")
     */
    private $author;

    public function setName($name) {
        $this->name=$name;
    }
    
    public function setAuthor($author) {
        $this->author=$author;
    }
    
    public function getName() {return $this->name;}
    
    public function getAuthor() {return $this->author;}
    
}