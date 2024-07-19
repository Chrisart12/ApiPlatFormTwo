<?php

namespace App\Controller\Api;

// use DateTimeImmutable;
use App\Entity\Recipe;
use App\Form\RecipeType;
use App\Repository\CategoryRepository;
use App\Repository\RecipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\SerializerInterface;

// use Symfony\Component\Security\Http\Attribute\IsGranted;


class UserController extends AbstractController
{

    #[Route('/api/login', name: 'api_login', methods: ['POST'])]
    // #[IsGranted('ROLE_USER')]
    public function index()
    {
    
        return $this->json($this->getUser());

        // $recipes = $recipeRepository->paginateRecipes($request->query->getInt('page', 1));
        // // dd($recipes);
        // // dd($this->json($recipes));
        // return $this->json($recipes,200, [], [
        //     'groups' => ['recipes.index']
        // ]);
    }
    
}
