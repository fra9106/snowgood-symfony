<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
* @ORM\Entity(repositoryClass=ImageRepository::class)
*/
class Image
{
    /**
    * @ORM\Id
    * @ORM\GeneratedValue
    * @ORM\Column(type="integer")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string", length=255)
    */
    private $path;

    private $file;
    
    /**
    * @ORM\ManyToOne(targetEntity=Trick::class, inversedBy="images")
    * @ORM\JoinColumn(nullable=false)
    */
    private $trick;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): self
    {
        $this->path = $path;

        return $this;
    }
    
    public function getFile()
    {
        return $this->file;
    }
    
    public function setFile(UploadedFile $file = null): self
    {
        $this->file = $file;
        
        return $this;
    }
    
    public function getTrick(): ?Trick
    {
        return $this->trick;
    }
    
    public function setTrick(?Trick $trick): self
    {
        $this->trick = $trick;
        
        return $this;
    }
}
