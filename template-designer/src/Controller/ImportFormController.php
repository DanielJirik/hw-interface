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
    #[Route('/import', name: 'import')]
    public function importForm(Request $request): Response
    {
        $form = $this->createForm(ImportFormType::class, null, [
            'attr'=>[
                'id'=>'table-header',
                'method'=>'POST'
            ]
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $importFile = $form->get('importFile')->getData();
            
            if($importFile){
                //probehne po importu souboru
            }            
        }
     
        return $this->render('teacher/import.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}