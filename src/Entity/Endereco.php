<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
{
    /**
     * @ORM\Id()
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
     * @ORM\Column(type="string", length=150)
     */
    private $rua;

    /**
     * @var string
     * @ORM\Column(type="string", length=20)
     */
    private $numero;

    /**
     * @var string
     * @ORM\Column(type="string", length=50)
     */
    private $bairro;




 
    /**
     * Get the value of Rua
     *
     * @return string
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Set the value of Rua
     *
     * @param string rua
     *
     * @return self
     */
    public function setRua($rua)
    {
        $this->rua = $rua;

        return $this;
    }

    /**
     * Get the value of Numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of Numero
     *
     * @param string numero
     *
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of Bairro
     *
     * @return string
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set the value of Bairro
     *
     * @param string bairro
     *
     * @return self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

}
