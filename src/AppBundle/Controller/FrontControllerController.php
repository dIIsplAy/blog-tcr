<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontControllerController extends Controller
{

    public function indexAction()
    {
        

        return $this->render('AppBundle:FrontController:index.html.twig', array(
            'articles' => $this->getDoctrine()->getManager()->getRepository('AppBundle:Article')->findAll(),
        ));
    }

    public function showAction($id, Request $request)
    {
        $comment = new Comment();
        $form = $this->createForm('AppBundle\Form\CommentType', $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();
        }

        $em = $this->getDoctrine()->getManager();
// die('id:'.$request->query->get('id'));

        $article = $em->getRepository('AppBundle:Article')->findAllByArticleId($id);

        dump($article);

        return $this->render('AppBundle:FrontController:show.html.twig', array(
            'article' => $article,
            'subdelete' => true,
            // 'comments' =>$comments,
            'form' => $form->createView(),
        ));
    
    }

    public function newAction(Article $article, Request $request)
    {   
        $comment = new Comment();
        $comment->setArticle($article);

        $form = $this->createForm('AppBundle\Form\CommentType', $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();   
        }

        return $this->redirectToRoute('show', array(
            'id' => $article->getId()
        ));
        // return $this->render('AppBundle:FrontController:show.html.twig', array(
        //     'comment' => $comment,
        //     'form' => $form->createView(),
        // ));
    }

}
