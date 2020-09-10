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
     * @ORM\GeneratedValue
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
    private $sourceId;

    /**
     * @ORM\ManyToOne(targetEntity=Classifier::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $classifierId;

    /**
     * @ORM\Column(type="text")
     */
    private $announcementText;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categoryId;

    /**
     * @ORM\Column(type="text")
     */
    private $permittedUse;

    /**
     * @ORM\Column(type="text")
     */
    private $permittedUseDoc;

    /**
     * @ORM\Column(type="text")
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity=District::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $districtId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $locality;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="float")
     */
    private $area;

    /**
     * @ORM\Column(type="float")
     */
    private $unitPrice;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cadastralNumber;

    /**
     * @ORM\Column(type="text")
     */
    private $urlLink;

    /**
     * @ORM\Column(type="date")
     */
    private $placementDate;

    /**
     * @ORM\Column(type="date")
     */
    private $relevanceDate;

    /**
     * @ORM\Column(type="text")
     */
    private $screenshotLink;

    /**
     * @ORM\ManyToOne(targetEntity=Attribute::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $attributeId;

    /**
     * @ORM\Column(type="text")
     */
    private $commentAttribute;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $electricityCommunicationId;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $gasCommunicationId;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $waterCommunicationId;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $heatingCommunicationId;

    /**
     * @ORM\ManyToOne(targetEntity=Communication::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $roadCommunicationId;

    /**
     * @ORM\ManyToOne(targetEntity=Bell::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $bellId;

    /**
     * @ORM\Column(type="text")
     */
    private $commentProcessing;

    /**
     * @ORM\ManyToOne(targetEntity=State::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $stateId;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="plots")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userId;

    /**
     * @ORM\Column(type="text")
     */
    private $commentGeneral;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lastSaveUser;

    /**
     * @ORM\Column(type="datetime")
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

    public function getSourceId(): ?Source
    {
        return $this->sourceId;
    }

    public function setSourceId(?Source $sourceId): self
    {
        $this->sourceId = $sourceId;

        return $this;
    }

    public function getClassifierId(): ?Classifier
    {
        return $this->classifierId;
    }

    public function setClassifierId(?Classifier $classifierId): self
    {
        $this->classifierId = $classifierId;

        return $this;
    }

    public function getAnnouncementText(): ?string
    {
        return $this->announcementText;
    }

    public function setAnnouncementText(string $announcementText): self
    {
        $this->announcementText = $announcementText;

        return $this;
    }

    public function getCategoryId(): ?Category
    {
        return $this->categoryId;
    }

    public function setCategoryId(?Category $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function getPermittedUse(): ?string
    {
        return $this->permittedUse;
    }

    public function setPermittedUse(string $permittedUse): self
    {
        $this->permittedUse = $permittedUse;

        return $this;
    }

    public function getPermittedUseDoc(): ?string
    {
        return $this->permittedUseDoc;
    }

    public function setPermittedUseDoc(string $permittedUseDoc): self
    {
        $this->permittedUseDoc = $permittedUseDoc;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getDistrictId(): ?District
    {
        return $this->districtId;
    }

    public function setDistrictId(?District $districtId): self
    {
        $this->districtId = $districtId;

        return $this;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setLocality(string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getArea(): ?float
    {
        return $this->area;
    }

    public function setArea(float $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getUnitPrice(): ?float
    {
        return $this->unitPrice;
    }

    public function setUnitPrice(float $unitPrice): self
    {
        $this->unitPrice = $unitPrice;

        return $this;
    }

    public function getCadastralNumber(): ?string
    {
        return $this->cadastralNumber;
    }

    public function setCadastralNumber(string $cadastralNumber): self
    {
        $this->cadastralNumber = $cadastralNumber;

        return $this;
    }

    public function getUrlLink(): ?string
    {
        return $this->urlLink;
    }

    public function setUrlLink(string $urlLink): self
    {
        $this->urlLink = $urlLink;

        return $this;
    }

    public function getPlacementDate(): ?\DateTimeInterface
    {
        return $this->placementDate;
    }

    public function setPlacementDate(\DateTimeInterface $placementDate): self
    {
        $this->placementDate = $placementDate;

        return $this;
    }

    public function getRelevanceDate(): ?\DateTimeInterface
    {
        return $this->relevanceDate;
    }

    public function setRelevanceDate(\DateTimeInterface $relevanceDate): self
    {
        $this->relevanceDate = $relevanceDate;

        return $this;
    }

    public function getScreenshotLink(): ?string
    {
        return $this->screenshotLink;
    }

    public function setScreenshotLink(string $screenshotLink): self
    {
        $this->screenshotLink = $screenshotLink;

        return $this;
    }

    public function getAttributeId(): ?Attribute
    {
        return $this->attributeId;
    }

    public function setAttributeId(?Attribute $attributeId): self
    {
        $this->attributeId = $attributeId;

        return $this;
    }

    public function getCommentAttribute(): ?string
    {
        return $this->commentAttribute;
    }

    public function setCommentAttribute(string $commentAttribute): self
    {
        $this->commentAttribute = $commentAttribute;

        return $this;
    }

    public function getElectricityCommunicationId(): ?Communication
    {
        return $this->electricityCommunicationId;
    }

    public function setElectricityCommunicationId(?Communication $electricityCommunicationId): self
    {
        $this->electricityCommunicationId = $electricityCommunicationId;

        return $this;
    }

    public function getGasCommunicationId(): ?Communication
    {
        return $this->gasCommunicationId;
    }

    public function setGasCommunicationId(?Communication $gasCommunicationId): self
    {
        $this->gasCommunicationId = $gasCommunicationId;

        return $this;
    }

    public function getWaterCommunicationId(): ?Communication
    {
        return $this->waterCommunicationId;
    }

    public function setWaterCommunicationId(?Communication $waterCommunicationId): self
    {
        $this->waterCommunicationId = $waterCommunicationId;

        return $this;
    }

    public function getHeatingCommunicationId(): ?Communication
    {
        return $this->heatingCommunicationId;
    }

    public function setHeatingCommunicationId(?Communication $heatingCommunicationId): self
    {
        $this->heatingCommunicationId = $heatingCommunicationId;

        return $this;
    }

    public function getRoadCommunicationId(): ?Communication
    {
        return $this->roadCommunicationId;
    }

    public function setRoadCommunicationId(?Communication $roadCommunicationId): self
    {
        $this->roadCommunicationId = $roadCommunicationId;

        return $this;
    }

    public function getBellId(): ?Bell
    {
        return $this->bellId;
    }

    public function setBellId(?Bell $bellId): self
    {
        $this->bellId = $bellId;

        return $this;
    }

    public function getCommentProcessing(): ?string
    {
        return $this->commentProcessing;
    }

    public function setCommentProcessing(string $commentProcessing): self
    {
        $this->commentProcessing = $commentProcessing;

        return $this;
    }

    public function getStateId(): ?State
    {
        return $this->stateId;
    }

    public function setStateId(?State $stateId): self
    {
        $this->stateId = $stateId;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCommentGeneral(): ?string
    {
        return $this->commentGeneral;
    }

    public function setCommentGeneral(string $commentGeneral): self
    {
        $this->commentGeneral = $commentGeneral;

        return $this;
    }

    public function getLastSaveUser(): ?string
    {
        return $this->lastSaveUser;
    }

    public function setLastSaveUser(string $lastSaveUser): self
    {
        $this->lastSaveUser = $lastSaveUser;

        return $this;
    }

    public function getProcessingDate(): ?\DateTimeInterface
    {
        return $this->processingDate;
    }

    public function setProcessingDate(\DateTimeInterface $processingDate): self
    {
        $this->processingDate = $processingDate;

        return $this;
    }
}
