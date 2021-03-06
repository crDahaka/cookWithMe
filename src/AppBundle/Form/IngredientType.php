<?php
/**
 * Created by PhpStorm.
 * User: CR
 * Date: 12/15/2016
 * Time: 20:49
 */

namespace AppBundle\Form;


use AppBundle\Entity\Ingredient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class IngredientType
 * @package AppBundle\Form
 */
class IngredientType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options){

        $builder
            ->add('name', TextType::class, array(
                'label' => 'Име',
                'attr' => ['class' => 'form-control']));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver){

        $resolver->setDefaults(array(
            'data_class' => Ingredient::class,
        ));
    }

}