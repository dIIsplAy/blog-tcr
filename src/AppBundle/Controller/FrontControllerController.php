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
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AppBundle:Article')->findAll();
        return $this->render('AppBundle:FrontController:index.html.twig', array(
            'articles' => $articles,
        ));
    }

    public function showAction(Article $article)
    {
        $em = $this->getDoctrine()->getManager();

        $comments = $em->getRepository('AppBundle:Comment')->findAllByCommentId($article->getId());
        die (var_dump($comments));
        return $this->render('AppBundle:FrontController:show.html.twig', array(
            'article' => $article,
            'subdelete' => true,
            'comments' =>$comments,
        ));
    
    }

    public function newAction()
    {
        return $this->render('AppBundle:FrontController:new.html.twig', array(
            // ...
        ));
    }

}
