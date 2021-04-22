<?php

namespace flexycms\FlexyAdminHomeBundle\Controller;


use flexycms\FlexyAdminFrameBundle\Controller\AdminBaseController;
use Symfony\Component\Routing\Annotation\Route;

class AdminHomeController extends AdminBaseController
{
    /**
     * @Route("/admin", name="admin_home")
     */
    public function index()
    {
        $forRender = parent::renderDefault();
        $forRender['title'] = "Панель управления";

        return $this->render('@FlexyAdminHome/index.html.twig', $forRender);
    }
}