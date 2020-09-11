<?php

namespace App\Entity;

use App\Repository\PlotRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlotRepository::class)
 */
class Plot
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
    private $identifier;

    /**
     * @ORM\ManyToOne(targetEntity=Source::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $source;

    /**
     * @ORM\ManyToOne(targetEntity=Classifier::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classifier;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $announcementText;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $permittedUse;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $permittedUseDoc;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity=District::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $district;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $locality;

    /**
     * @ORM\Column(type="float", nullable=true, precision=20, scale=10)
     */
    private $price;

    /**
     * @ORM\Column(type="float", nullable=true, precision=20, scale=10)
     */
    private $area;

    /**
     * @ORM\Column(type="float", nullable=true, precision=20, scale=10)
     */
    private $unitPrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $cadastralNumber;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $urlLink;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $placementDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $relevanceDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $screenshotLink;

    /**
     * @ORM\ManyToOne(targetEntity=Attribute::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $attribute;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentAttribute;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="electricityPlots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $electricityCommunication;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="gasPlots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gasCommunication;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="waterPlots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $waterCommunication;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="heatingPlots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $heatingCommunication;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="roadPlots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $roadCommunication;

    /**
     * @ORM\ManyToOne(targetEntity=Bell::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bell;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentProcessing;

    /**
     * @ORM\ManyToOne(targetEntity=State::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $state;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="plots")
     */
    private $performerUser;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentGeneral;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="lastSavePlots")
     */
    private $lastSavePerformerUser;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $processingDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdentifier(): ?string
    {
        return $this->identifier;
    }

    public function setIdentifier(string $identifier): self
    {
        $this->identifier = $identifier;

        return $this;
    }

    public function getSource(): ?Source
    {
        return $this->source;
    }

    public function setSource(?Source $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getClassifier(): ?Classifier
    {
        return $this->classifier;
    }

    public function setClassifier(?Classifier $classifier): self
    {
        $this->classifier = $classifier;

        return $this;
    }

    public function getAnnouncementText(): ?string
    {
        return $this->announcementText;
    }

    public function setAnnouncementText(?string $announcementText): self
    {
        $this->announcementText = $announcementText;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getPermittedUse(): ?string
    {
        return $this->permittedUse;
    }

    public function setPermittedUse(?string $permittedUse): self
    {
        $this->permittedUse = $permittedUse;

        return $this;
    }

    public function getPermittedUseDoc(): ?string
    {
        return $this->permittedUseDoc;
    }

    public function setPermittedUseDoc(?string $permittedUseDoc): self
    {
        $this->permittedUseDoc = $permittedUseDoc;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getDistrict(): ?District
    {
        return $this->district;
    }

    public function setDistrict(?District $district): self
    {
        $this->district = $district;

        return $this;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setLocality(?string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getArea(): ?float
    {
        return $this->area;
    }

    public function setArea(?float $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(?float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getCadastralNumber(): ?string
    {
        return $this->cadastralNumber;
    }

    public function setCadastralNumber(?string $cadastralNumber): self
    {
        $this->cadastralNumber = $cadastralNumber;

        return $this;
    }

    public function getUrlLink(): ?string
    {
        return $this->urlLink;
    }

    public function setUrlLink(?string $urlLink): self
    {
        $this->urlLink = $urlLink;

        return $this;
    }

    public function getPlacementDate(): ?\DateTimeInterface
    {
        return $this->placementDate;
    }

    public function setPlacementDate(?\DateTimeInterface $placementDate): self
    {
        $this->placementDate = $placementDate;

        return $this;
    }

    public function getRelevanceDate(): ?\DateTimeInterface
    {
        return $this->relevanceDate;
    }

    public function setRelevanceDate(?\DateTimeInterface $relevanceDate): self
    {
        $this->relevanceDate = $relevanceDate;

        return $this;
    }

    public function getScreenshotLink(): ?string
    {
        return $this->screenshotLink;
    }

    public function setScreenshotLink(?string $screenshotLink): self
    {
        $this->screenshotLink = $screenshotLink;

        return $this;
    }

    public function getAttribute(): ?Attribute
    {
        return $this->attribute;
    }

    public function setAttribute(?Attribute $attribute): self
    {
        $this->attribute = $attribute;

        return $this;
    }

    public function getCommentAttribute(): ?string
    {
        return $this->commentAttribute;
    }

    public function setCommentAttribute(?string $commentAttribute): self
    {
        $this->commentAttribute = $commentAttribute;

        return $this;
    }

    public function getElectricityCommunication(): ?Communication
    {
        return $this->electricityCommunication;
    }

    public function setElectricityCommunication(?Communication $electricityCommunication): self
    {
        $this->electricityCommunication = $electricityCommunication;

        return $this;
    }

    public function getGasCommunication(): ?Communication
    {
        return $this->gasCommunication;
    }

    public function setGasCommunication(?Communication $gasCommunication): self
    {
        $this->gasCommunication = $gasCommunication;

        return $this;
    }

    public function getWaterCommunication(): ?Communication
    {
        return $this->waterCommunication;
    }

    public function setWaterCommunication(?Communication $waterCommunication): self
    {
        $this->waterCommunication = $waterCommunication;

        return $this;
    }

    public function getHeatingCommunication(): ?Communication
    {
        return $this->heatingCommunication;
    }

    public function setHeatingCommunication(?Communication $heatingCommunication): self
    {
        $this->heatingCommunication = $heatingCommunication;

        return $this;
    }

    public function getRoadCommunication(): ?Communication
    {
        return $this->roadCommunication;
    }

    public function setRoadCommunication(?Communication $roadCommunication): self
    {
        $this->roadCommunication = $roadCommunication;

        return $this;
    }

    public function getBell(): ?Bell
    {
        return $this->bell;
    }

    public function setBell(?Bell $bell): self
    {
        $this->bell = $bell;

        return $this;
    }

    public function getCommentProcessing(): ?string
    {
        return $this->commentProcessing;
    }

    public function setCommentProcessing(?string $commentProcessing): self
    {
        $this->commentProcessing = $commentProcessing;

        return $this;
    }

    public function getState(): ?State
    {
        return $this->state;
    }

    public function setState(?State $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getPerformerUser(): ?User
    {
        return $this->performerUser;
    }

    public function setPerformerUser(?User $performerUser): self
    {
        $this->performerUser = $performerUser;

        return $this;
    }

    public function getCommentGeneral(): ?string
    {
        return $this->commentGeneral;
    }

    public function setCommentGeneral(?string $commentGeneral): self
    {
        $this->commentGeneral = $commentGeneral;

        return $this;
    }

    public function getLastSavePerformerUser(): ?User
    {
        return $this->lastSavePerformerUser;
    }

    public function setLastSavePerformerUser(?User $lastSavePerformerUser): self
    {
        $this->lastSavePerformerUser = $lastSavePerformerUser;

        return $this;
    }

    public function getProcessingDate(): ?\DateTimeInterface
    {
        return $this->processingDate;
    }

    public function setProcessingDate(?\DateTimeInterface $processingDate): self
    {
        $this->processingDate = $processingDate;

        return $this;
    }
}
