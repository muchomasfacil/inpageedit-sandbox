<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class IpeDemoController extends Controller
{
    public function odmeAction()
    {

        if (is_object($this->container->get('security.context')->getToken())) {
             $provider_key = $this->container->get('security.context')->getToken()->getProviderKey();

             $final_url = $this->container->get('router')->generate('_demo_logout');
             print_r($this->container->getParameter('security'));
        }

        $render_vars = array();

        //check if we have a ?ipe_fake in our url
        $ipe_fake = !is_null($this->getRequest()->query->get('ipe_fake'));
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('AcmeDemoBundle:Foo');
        $foos = $repository->findAll();
        if (($ipe_fake) && (empty($foos))) { //in case we have no entries and want to fake some, if we have added ?ipe_fake in the url fake foos
            $generator = $this->get('mucho_mas_facil_in_page_edit.doctrine.orm.faker')
                ->ORMDoctrinePopulate('AcmeDemoBundle:Foo', rand(3, 7));
            $foos = $repository->findAll();
        }

        $render_vars['foos'] = $foos;

        return $this->render('AcmeDemoBundle:IpeDemo:odme.html.twig', $render_vars);
    }

    public function odgsmecAction()
    {
        $render_vars = array();

        //check if we have a ?ipe_fake in our url
        $ipe_fake = !is_null($this->getRequest()->query->get('ipe_fake'));

        $faker =  $this->get('mucho_mas_facil_in_page_edit.doctrine.orm.faker');

        if ($ipe_fake) {
            //this fakes(if you have entered an ?ipe_fake in the url) items for a grouped sorted mapped Entity collection with an ipe_handler that we have name item_collection (could be any name you choose)
            $foos = $faker->findOrFakeGroupedSortedMappedEntity('AcmeDemoBundle:GroupedSortedMappedFoo', 'item_collection', rand(3,5), $ipe_fake);
            //this fakes(if you have entered an ?ipe_fake in the url) grouped sorted mapped Entity collection with a single item with an ipe_handler that we have name single_item (could be any name you choose)
            $single_foo = $faker->findOrFakeSingleGroupedMappedEntity('AcmeDemoBundle:GroupedSortedMappedFoo', 'single_item', $ipe_fake);
        }


        return $this->render('AcmeDemoBundle:IpeDemo:odgsmec.html.twig', $render_vars);
    }
}
