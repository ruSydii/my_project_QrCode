<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MasterKaryawanRepository")
 */
class MasterKaryawan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nik;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $unit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $divisi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNik(): ?int
    {
        return $this->nik;
    }

    public function setNik(int $nik): self
    {
        $this->nik = $nik;

        return $this;
    }

    public function getNama(): ?string
    {
        return $this->nama;
    }

    public function setNama(string $nama): self
    {
        $this->nama = $nama;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getDivisi(): ?string
    {
        return $this->divisi;
    }

    public function setDivisi(string $divisi): self
    {
        $this->divisi = $divisi;

        return $this;
    }
}
