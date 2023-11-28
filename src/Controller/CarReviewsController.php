<?php

namespace App\Controller;

use App\Entity\Car;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class CarReviewsController
{
    public function __construct(private EntityManagerInterface $entityManager) {}

    public function __invoke(int $carId): JsonResponse
    {
        $reviewRepository = $this->entityManager->getRepository(Car::class);

        $reviews = $reviewRepository->createQueryBuilder('r')
            ->where('r.id = :carId')
            ->andWhere('r.rating > 6')
            ->setParameter('carId', $carId)
            ->getQuery()
            ->getResult();

        return new JsonResponse($reviews);
    }
}