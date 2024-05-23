<?php
namespace App\Controller;
use App\Form\ImportFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class ImportFormController extends AbstractController
{
    #[Route('/new-place', name: 'new_place')]
    public function importForm(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ImportFormType::class);
        $form->handleRequest($request);
       
        return $this->render('import.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}