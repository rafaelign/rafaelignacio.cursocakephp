<?php 

/**
 * Controller de Inscrições
 */

class InscricoesController extends AppController
{
	public $uses = array('Inscricao');

	/** 
	 * Action Inscrever..
	 */
	public function inscrever()
	{
		$isPost = $this->request->is('post');

		if ($isPost && !empty($this->request->data)) {
			if ($this->Inscricao->save($this->request->data)) {
				$this->redirect(array('action' => 'sucesso'));
			}
		}
	}

	/** 
	 * Mensagem de Inscrição cadastrada..
	 */
	public function sucesso()
	{
		// Msg 
	}
}