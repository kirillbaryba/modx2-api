<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModxUserSettings
 *
 * @ORM\Table(name="modx_user_settings")
 * @ORM\Entity
 */
class ModxUserSettings
{
    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $user = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="key", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $key = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="text", length=65535, nullable=true)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="xtype", type="string", length=75, nullable=false, options={"default"="textfield"})
     */
    private $xtype = 'textfield';

    /**
     * @var string
     *
     * @ORM\Column(name="namespace", type="string", length=40, nullable=false, options={"default"="core"})
     */
    private $namespace = 'core';

    /**
     * @var string
     *
     * @ORM\Column(name="area", type="string", length=191, nullable=false)
     */
    private $area = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="editedon", type="datetime", nullable=true)
     */
    private $editedon;

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getXtype(): ?string
    {
        return $this->xtype;
    }

    public function setXtype(string $xtype): self
    {
        $this->xtype = $xtype;

        return $this;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setNamespace(string $namespace): self
    {
        $this->namespace = $namespace;

        return $this;
    }

    public function getArea(): ?string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getEditedon(): ?\DateTimeInterface
    {
        return $this->editedon;
    }

    public function setEditedon(?\DateTimeInterface $editedon): self
    {
        $this->editedon = $editedon;

        return $this;
    }


}
