<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    public function __construct() {
        parent:: __construct();
        //$this->load->helper(array('form', 'utility', 'secao', 'mensagens'));
        $this->load->library(array('session', 'form_validation', 'doctrine'));
        //$this->load->model(array('m_admin', 'm_token', 'm_site'));
    }

    /**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$group = new Entity\UserGroup;
		$group->setName('Users');

		$user = new Entity\User;
		$user->setUsername('wildlyinaccurate');
		$user->setPassword('Passw0rd');
		$user->setEmail('wildlyinaccurate@gmail.com');
		$user->setGroup($group);

		// When you have set up your database, you can persist these entities:
		 $em = $this->doctrine->em;
		 $em->persist($group);
		 $em->persist($user);
		 $em->flush();

		$this->load->view('welcome_message', array(
			'user' => $user,
			'group' => $group,
		));
	}
	public function itens_de_pauta(){
        $group = new Entity\ItemDePauta;
        $this->load->('');

	}

}
