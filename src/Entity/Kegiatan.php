<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KegiatanRepository")
 */
class Kegiatan
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nama;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tempat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $waktu_mulai;

    /**
     * @ORM\Column(type="datetime")
     */
    private $waktu_selesai;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getTempat(): ?string
    {
        return $this->tempat;
    }

    public function setTempat(string $tempat): self
    {
        $this->tempat = $tempat;

        return $this;
    }

    public function getWaktuMulai(): ?\DateTimeInterface
    {
        return $this->waktu_mulai;
    }

    public function setWaktuMulai(\DateTimeInterface $waktu_mulai): self
    {
        $this->waktu_mulai = $waktu_mulai;

        return $this;
    }

    public function getWaktuSelesai(): ?\DateTimeInterface
    {
        return $this->waktu_selesai;
    }

    public function setWaktuSelesai(\DateTimeInterface $waktu_selesai): self
    {
        $this->waktu_selesai = $waktu_selesai;

        return $this;
    }
}
