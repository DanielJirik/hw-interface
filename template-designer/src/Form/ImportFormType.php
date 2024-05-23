<?php
namespace App\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use App\Entity\ReccuringEvent;
class ImportFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('importFile', FileType::class, [
            'attr' => [                
                'onchange' => 'form.submit()',
                'multiple' => 'true'
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        
    }
}