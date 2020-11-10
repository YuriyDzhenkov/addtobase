<?php


namespace App\Controller;


use App\Entity\AddUser;
use App\Form\AddUserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController

{
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {

        return $this->render('user.html.twig',
            ['title'=>'Main Page']);

    }

    /**
     * @Route("/add", name="add_product")
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $product = new AddUser();
        $form = $this->createForm(AddUserType::class,$product);
        $em = $this->getDoctrine()->getManager();
        $form->handleRequest($request);

       if(($form->isSubmitted()) && ($form->isValid()))
        {
            $product->setName($product->getName());
            $product->setQuantity($product->getQuantity());
            $em->persist($product);
            $em->flush();


        }
        $formrender['form'] = $form->createView();
        return $this->render('form.html.twig',$formrender);



    }

    /**
     * @Route("/view", name="view")
     * @param Request $request
     * @return Response
     */
    public function ViewTable(Request $request)
    {
        $product = $this->getDoctrine()->getRepository(AddUser::class)->findAll();
        $forRender['products'] = $product;

        return $this->render('viewtable.html.twig',$forRender);

    }
}