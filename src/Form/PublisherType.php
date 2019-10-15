<?php

namespace App\Form;

use App\Entity\Publisher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublisherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('companyName', TextType::class, ['attr' => [
                'class' => 'form-control'
            ]])
            ->add('companyAddress', TextType::class, ['attr' => [
                'class' => 'form-control'
            ]])
            ->add('companyPhoneNumber', NumberType::class, ['attr' => [
                'class' => 'form-control'
            ]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Publisher::class,
        ]);
    }
}
