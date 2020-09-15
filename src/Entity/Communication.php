<?php

namespace App\Entity;

use App\Repository\CommunicationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommunicationRepository::class)
 */
class Communication
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Plot::class, mappedBy="electricityCommunication")
     */
    private $electricityPlots;

    /**
     * @ORM\OneToMany(targetEntity=Plot::class, mappedBy="gasCommunication")
     */
    private $gasPlots;

    /**
     * @ORM\OneToMany(targetEntity=Plot::class, mappedBy="waterCommunication")
     */
    private $waterPlots;

    /**
     * @ORM\OneToMany(targetEntity=Plot::class, mappedBy="heatingCommunication")
     */
    private $heatingPlots;

    /**
     * @ORM\OneToMany(targetEntity=Plot::class, mappedBy="roadCommunication")
     */
    private $roadPlots;

    public function __construct()
    {
        $this->electricityPlots = new ArrayCollection();
        $this->gasPlots = new ArrayCollection();
        $this->waterPlots = new ArrayCollection();
        $this->heatingPlots = new ArrayCollection();
        $this->roadPlots = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Plot[]
     */
    public function getElectricityPlots(): Collection
    {
        return $this->electricityPlots;
    }

    public function addElectricityPlot(Plot $electricityPlot): self
    {
        if (!$this->electricityPlots->contains($electricityPlot)) {
            $this->electricityPlots[] = $electricityPlot;
            $electricityPlot->setElectricityCommunication($this);
        }

        return $this;
    }

    public function removeElectricityPlot(Plot $electricityPlot): self
    {
        if ($this->electricityPlots->contains($electricityPlot)) {
            $this->electricityPlots->removeElement($electricityPlot);
            // set the owning side to null (unless already changed)
            if ($electricityPlot->getElectricityCommunication() === $this) {
                $electricityPlot->setElectricityCommunication(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Plot[]
     */
    public function getGasPlots(): Collection
    {
        return $this->gasPlots;
    }

    public function addGasPlot(Plot $gasPlot): self
    {
        if (!$this->gasPlots->contains($gasPlot)) {
            $this->gasPlots[] = $gasPlot;
            $gasPlot->setGasCommunication($this);
        }

        return $this;
    }

    public function removeGasPlot(Plot $gasPlot): self
    {
        if ($this->gasPlots->contains($gasPlot)) {
            $this->gasPlots->removeElement($gasPlot);
            // set the owning side to null (unless already changed)
            if ($gasPlot->getGasCommunication() === $this) {
                $gasPlot->setGasCommunication(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Plot[]
     */
    public function getWaterPlots(): Collection
    {
        return $this->waterPlots;
    }

    public function addWaterPlot(Plot $waterPlot): self
    {
        if (!$this->waterPlots->contains($waterPlot)) {
            $this->waterPlots[] = $waterPlot;
            $waterPlot->setWaterCommunication($this);
        }

        return $this;
    }

    public function removeWaterPlot(Plot $waterPlot): self
    {
        if ($this->waterPlots->contains($waterPlot)) {
            $this->waterPlots->removeElement($waterPlot);
            // set the owning side to null (unless already changed)
            if ($waterPlot->getWaterCommunication() === $this) {
                $waterPlot->setWaterCommunication(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Plot[]
     */
    public function getHeatingPlots(): Collection
    {
        return $this->heatingPlots;
    }

    public function addHeatingPlot(Plot $heatingPlot): self
    {
        if (!$this->heatingPlots->contains($heatingPlot)) {
            $this->heatingPlots[] = $heatingPlot;
            $heatingPlot->setHeatingCommunication($this);
        }

        return $this;
    }

    public function removeHeatingPlot(Plot $heatingPlot): self
    {
        if ($this->heatingPlots->contains($heatingPlot)) {
            $this->heatingPlots->removeElement($heatingPlot);
            // set the owning side to null (unless already changed)
            if ($heatingPlot->getHeatingCommunication() === $this) {
                $heatingPlot->setHeatingCommunication(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Plot[]
     */
    public function getRoadPlots(): Collection
    {
        return $this->roadPlots;
    }

    public function addRoadPlot(Plot $roadPlot): self
    {
        if (!$this->roadPlots->contains($roadPlot)) {
            $this->roadPlots[] = $roadPlot;
            $roadPlot->setRoadCommunication($this);
        }

        return $this;
    }

    public function removeRoadPlot(Plot $roadPlot): self
    {
        if ($this->roadPlots->contains($roadPlot)) {
            $this->roadPlots->removeElement($roadPlot);
            // set the owning side to null (unless already changed)
            if ($roadPlot->getRoadCommunication() === $this) {
                $roadPlot->setRoadCommunication(null);
            }
        }

        return $this;
    }
}
