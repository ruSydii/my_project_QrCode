<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KegiatanAbsensiRepository")
 */
class KegiatanAbsensi
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Kegiatan")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_kegiatan;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\KegiatanAbsensi")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_karyawan;

    /**
     * @ORM\Column(type="datetime")
     */
    private $waktu_hadir;

    /**
     * @ORM\Column(type="datetime")
     */
    private $waktu_pulang;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdKegiatan(): ?Kegiatan
    {
        return $this->id_kegiatan;
    }

    public function setIdKegiatan(?Kegiatan $id_kegiatan): self
    {
        $this->id_kegiatan = $id_kegiatan;

        return $this;
    }

    public function getIdKaryawan(): ?self
    {
        return $this->id_karyawan;
    }

    public function setIdKaryawan(?self $id_karyawan): self
    {
        $this->id_karyawan = $id_karyawan;

        return $this;
    }

    public function getWaktuHadir(): ?\DateTimeInterface
    {
        return $this->waktu_hadir;
    }

    public function setWaktuHadir(\DateTimeInterface $waktu_hadir): self
    {
        $this->waktu_hadir = $waktu_hadir;

        return $this;
    }

    public function getWaktuPulang(): ?\DateTimeInterface
    {
        return $this->waktu_pulang;
    }

    public function setWaktuPulang(\DateTimeInterface $waktu_pulang): self
    {
        $this->waktu_pulang = $waktu_pulang;

        return $this;
    }
}
