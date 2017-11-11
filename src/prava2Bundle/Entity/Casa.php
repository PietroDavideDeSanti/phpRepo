<?php

namespace prava2Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Casa
 */
class Casa
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $colore;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Casa
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set colore
     *
     * @param string $colore
     * @return Casa
     */
    public function setColore($colore)
    {
        $this->colore = $colore;

        return $this;
    }

    /**
     * Get colore
     *
     * @return string 
     */
    public function getColore()
    {
        return $this->colore;
    }
}
