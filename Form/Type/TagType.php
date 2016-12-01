<?php

namespace Netgen\TagsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TagType extends AbstractType
{
    /**
     * @param \Symfony\Component\OptionsResolver\OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver
            ->setDefaults(
                array(
                    'translation_domain' => 'eztags_admin',
                )
            )
            ->setRequired(
                array(
                    'languageCode',
                )
            );
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'keyword',
                'Symfony\Component\Form\Extension\Core\Type\TextType',
                array(
                    'label' => 'tag.tag_name',
                )
            )
            ->add(
                'alwaysAvailable',
                'Symfony\Component\Form\Extension\Core\Type\CheckboxType',
                array(
                    'label' => 'tag.form.always_available',
                    'required' => false,
                )
            )
            ->add(
                'remoteId',
                'Symfony\Component\Form\Extension\Core\Type\TextType',
                array(
                    'required' => false,
                )
            );
    }
}