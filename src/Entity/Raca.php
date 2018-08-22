<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RacaRepository")
 */
class Raca
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;




    public function getId(): ?int
    {
        return $this->id;
    }


    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $nome;


    /**
    * @var object
    *
    * @ORM\ManyToOne(targetEntity="App\Entity\Especie", inversedBy="id")
    */
    private $especie;

    /**
     * Get the value of Nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of Nome
     *
     * @param string nome
     *
     * @return self
     */
    public function setNome($nome)
    {
      $this->nome = $nome;
      return $this;
    }

    /**
     * @return object
     */
    public function getEspecie()
    {
        return $this->especie;
    }
    /**
     * @param object $especie
     * @return Raca
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;
        return $this;
    }
    public function getNomeEspecie()
    {
        return $this->getEspecie() ? $this->getEspecie()->getNome() : null;
    }

}
