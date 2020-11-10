<?php

namespace App\Form;

use App\Entity\AddUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class ,array(
                'label' => 'Товар'
            ))
            ->add('quantity',TextType::class, array(
                'label'=>'Колличество'
            ))
            ->add('save',SubmitType::class, array(
                'label'=> 'Сохранить'
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AddUser::class,
        ]);
    }
}
