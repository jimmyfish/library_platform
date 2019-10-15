<?php

namespace App\Controller;

use App\Entity\Shelf;
use App\Form\ShelfType;
use App\Repository\ShelfRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/shelf")
 */
class ShelfController extends AbstractController
{
    /**
     * @Route("/", name="shelf_index", methods="GET")
     */
    public function index(ShelfRepository $shelfRepository): Response
    {
        return $this->render('shelf/index.html.twig', ['shelves' => $shelfRepository->findAll()]);
    }

    /**
     * @Route("/new", name="shelf_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $shelf = new Shelf();
        $form = $this->createForm(ShelfType::class, $shelf);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($shelf);
            $em->flush();

            return $this->redirectToRoute('shelf_index');
        }

        return $this->render('shelf/new.html.twig', [
            'shelf' => $shelf,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="shelf_show", methods="GET")
     */
    public function show(Shelf $shelf): Response
    {
        return $this->render('shelf/show.html.twig', ['shelf' => $shelf]);
    }

    /**
     * @Route("/{id}/edit", name="shelf_edit", methods="GET|POST")
     */
    public function edit(Request $request, Shelf $shelf): Response
    {
        $form = $this->createForm(ShelfType::class, $shelf);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('shelf_edit', ['id' => $shelf->getId()]);
        }

        return $this->render('shelf/edit.html.twig', [
            'shelf' => $shelf,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="shelf_delete", methods="DELETE")
     */
    public function delete(Request $request, Shelf $shelf): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shelf->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($shelf);
            $em->flush();
        }

        return $this->redirectToRoute('shelf_index');
    }
}
