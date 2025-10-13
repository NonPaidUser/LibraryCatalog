<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Title',
            ])
            ->add('author', TextType::class, [
                'label' => 'Author',
            ])
            ->add('publishedAt', DateType::class, [
                'label' => 'Published Date',
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => false,
            ])
            ->add('available_count', NumberType::class, [
                'label' => 'Available Count',
                'required' => false,
            ])
            ->add('category', ChoiceType::class, [
                'label' => 'Genre / Category',
                'required' => false,
                'choices' => [
                    'Fiction' => 'Fiction',
                    'Non-Fiction' => 'Non-Fiction',
                    'Science Fiction' => 'Science Fiction',
                    'Fantasy' => 'Fantasy',
                    'Mystery' => 'Mystery',
                    'Romance' => 'Romance',
                    'Horror' => 'Horror',
                    'Biography' => 'Biography',
                    'History' => 'History',
                    'Poetry' => 'Poetry',
                ],
                'placeholder' => 'Select a genre',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
