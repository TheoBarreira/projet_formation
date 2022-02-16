<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'datetime')]
    private $orderDate;

    #[ORM\Column(type: 'datetime')]
    private $paymentDate;

    #[ORM\Column(type: 'string', length: 100)]
    private $paymentName;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    private $paymentTotal;

    #[ORM\ManyToOne(targetEntity: User::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->orderDate;
    }

    public function setOrderDate(\DateTimeInterface $orderDate): self
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    public function getPaymentDate(): ?\DateTimeInterface
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(\DateTimeInterface $paymentDate): self
    {
        $this->paymentDate = $paymentDate;

        return $this;
    }

    public function getPaymentName(): ?string
    {
        return $this->paymentName;
    }

    public function setPaymentName(string $paymentName): self
    {
        $this->paymentName = $paymentName;

        return $this;
    }

    public function getPaymentTotal(): ?string
    {
        return $this->paymentTotal;
    }

    public function setPaymentTotal(string $paymentTotal): self
    {
        $this->paymentTotal = $paymentTotal;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
