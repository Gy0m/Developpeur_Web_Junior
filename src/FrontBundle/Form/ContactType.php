<?php

namespace FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\HttpFoundation\Request;

class ContactType extends AbstractType
{
    /**
     * @param Request $resquest
     * @return
     * @internal param FormBuilderInterface $builder
     * @internal param array $options
     */

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array('attr'=>array('placeholder'=>'Votre Nom *', 'class'=>'form-control input-lg', 'aria-label'=> 'Votre Nom')))
            ->add('email', EmailType::class, array('attr'=>array('placeholder'=>'Votre email * (ex: durantjerome@mail.com)', 'class'=>'form-control input-lg', 'aria-label'=> 'Votre Email')))
            ->add('sujet', TextareaType::class, array('attr'=>array('placeholder'=>'Votre message *', 'class'=>'form-control input-lg', 'aria-label'=> 'Votre Message')))
            ->add('save', SubmitType::class, array('label' => 'Envoyer', 'attr'=>array('value'=> 'Envoyer', 'name'=>'submit', 'class'=>'btn btn-warning catform form-submit')));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Contact'
        ));
    }

}
