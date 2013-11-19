<?php

namespace BConway\WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BConway\WebsiteBundle\Entity\PrivateNote;
use BConway\WebsiteBundle\Form\PrivateNoteType;

/**
 * PrivateNote controller.
 *
 */
class PrivateNoteController extends Controller
{

    /**
     * Lists all PrivateNote entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BConwayWebsiteBundle:PrivateNote')->findAll();

        return $this->render('BConwayWebsiteBundle:PrivateNote:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new PrivateNote entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PrivateNote();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('private-note_show', array('id' => $entity->getId())));
        }

        return $this->render('BConwayWebsiteBundle:PrivateNote:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a PrivateNote entity.
    *
    * @param PrivateNote $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(PrivateNote $entity)
    {
        $form = $this->createForm(new PrivateNoteType(), $entity, array(
            'action' => $this->generateUrl('private-note_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new PrivateNote entity.
     *
     */
    public function newAction()
    {
        $entity = new PrivateNote();
        $form   = $this->createCreateForm($entity);

        return $this->render('BConwayWebsiteBundle:PrivateNote:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PrivateNote entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BConwayWebsiteBundle:PrivateNote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PrivateNote entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BConwayWebsiteBundle:PrivateNote:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing PrivateNote entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BConwayWebsiteBundle:PrivateNote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PrivateNote entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BConwayWebsiteBundle:PrivateNote:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a PrivateNote entity.
    *
    * @param PrivateNote $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(PrivateNote $entity)
    {
        $form = $this->createForm(new PrivateNoteType(), $entity, array(
            'action' => $this->generateUrl('private-note_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing PrivateNote entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BConwayWebsiteBundle:PrivateNote')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PrivateNote entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('private-note_edit', array('id' => $id)));
        }

        return $this->render('BConwayWebsiteBundle:PrivateNote:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a PrivateNote entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BConwayWebsiteBundle:PrivateNote')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PrivateNote entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('private-note'));
    }

    /**
     * Creates a form to delete a PrivateNote entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('private-note_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
