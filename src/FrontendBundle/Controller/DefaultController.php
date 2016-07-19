<?php

namespace FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FrontendBundle\Entity\Film;
use Symfony\Component\HttpFoundation\Request;
use FrontendBundle\Entity\Comment;
use AppBundle\Entity\User;
use DateTime;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
	public function newFilmAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $film = new Film();

        $form = $this->createForm('FrontendBundle\Form\FilmType', $film);
        $form->handleRequest($request);
        
        if ($form->isValid()) 
        {
            $photo = $film->getFolder();
            $photoName = md5(uniqid()).'.'.$photo->guessExtension();
            $photoDir = $this->container->getParameter('kernel.root_dir').'/../web/uploads/film';
            $photo->move($photoDir, $photoName);

            $film->setFolder($photoName);

            $em->persist($film);
            $em->flush();
        }

        return $this->render('FrontendBundle:Default:newfilm.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $allMovie = $em->getRepository('FrontendBundle:Film')->findAll();

        return $this->render('FrontendBundle:Default:index.html.twig',
        	array (
        	'movies' => $allMovie,
        ));
    }

    public function articleAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
		
		return $this->render('FrontendBundle:Default:article.html.twig');
    }

    public function showAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
        $comments = $em->getRepository('FrontendBundle:Comment')->findByIdfilm($id);
        if (!empty($comments))
         {
            $commenttab = [];
            foreach ($comments as $comment) 
            { 
                $username=$em->getRepository('AppBundle:User')->findOneById($comment->getIduser())->getUsername();
                $commenttab[] = array(
                    'idfilm'=>$id,
                    'username'=>$username,
                    'date'=>$comment->getDate(),
                    'content'=>$comment->getContent(),
                    );
            }
        }
        else
        {
            $commenttab = 0;
        }
        $thisMovie = $em->getRepository('FrontendBundle:Film')->findOneById($id);

        return $this->render('FrontendBundle:Default:show.html.twig', array(
        		'movie' => $thisMovie,
                'comments'=>$commenttab,
                'id'=>$id,
        ));

    }
    public function newCommentAction(Request $request, $id)
    {
        $em=$this->getDoctrine()->getManager();
        $user=$this->getUser();
        $content = $request->request->get('content');
        if(!empty($content) && !empty($user))
        {
            $comment = new Comment();
            $comment->setIduser($user->getId());
            $comment->setIdfilm($id);
            $comment->setDate(new Datetime);
            $comment->setContent($content);
            $em->persist($comment);
            $em->flush();

        }
        elseif (empty($content))
        {
            echo "remplis le formulaire avant de valider";
        }
        elseif (empty($user))
        {
            echo "connecte toi";
        }

        $url = $this -> generateUrl('film_show', array( 'id'=>$id ));
        $response = new RedirectResponse($url);
        return $response;
    }
}
