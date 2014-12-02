<?php

namespace WeCMS\UserBundle\Controller;

class SecurityController extends FOS\UserBundle\Controller\SecurityController
{
    /**
     * @Route("/login", name="_we_admin_login")
     */
    public function loginAction()
    {
        parent::loginAction();
    }
    /**
     * @Route("/login/check", name="_we_admin_security_check")
     */
    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }
    /**
     * @Route("/logout", name="_we_admin_logout")
     */
    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}
