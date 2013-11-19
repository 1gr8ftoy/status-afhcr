<?php

namespace BConway\WebsiteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use BConway\WebsiteBundle\Entity\StatusEntry;
use BConway\WebsiteBundle\Form\StatusEntryType;

/**
 * StatusEntry controller.
 *
 */
class StatusEntryController extends Controller
{

    /**
     * Lists all StatusEntry entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BConwayWebsiteBundle:StatusEntry')->findAll();

        return $this->render('BConwayWebsiteBundle:StatusEntry:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new StatusEntry entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new StatusEntry();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('status_show', array('id' => $entity->getId())));
        }

        return $this->render('BConwayWebsiteBundle:StatusEntry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a StatusEntry entity.
    *
    * @param StatusEntry $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(StatusEntry $entity)
    {
        $form = $this->createForm(new StatusEntryType(), $entity, array(
            'action' => $this->generateUrl('status_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new StatusEntry entity.
     *
     */
    public function newAction()
    {
        $entity = new StatusEntry();
        $form   = $this->createCreateForm($entity);

        return $this->render('BConwayWebsiteBundle:StatusEntry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a StatusEntry entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BConwayWebsiteBundle:StatusEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StatusEntry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BConwayWebsiteBundle:StatusEntry:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing StatusEntry entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BConwayWebsiteBundle:StatusEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StatusEntry entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BConwayWebsiteBundle:StatusEntry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a StatusEntry entity.
    *
    * @param StatusEntry $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(StatusEntry $entity)
    {
        $form = $this->createForm(new StatusEntryType(), $entity, array(
            'action' => $this->generateUrl('status_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing StatusEntry entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BConwayWebsiteBundle:StatusEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find StatusEntry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('status_edit', array('id' => $id)));
        }

        return $this->render('BConwayWebsiteBundle:StatusEntry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a StatusEntry entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BConwayWebsiteBundle:StatusEntry')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find StatusEntry entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('status'));
    }

    /**
     * Creates a form to delete a StatusEntry entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('status_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
