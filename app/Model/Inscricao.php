<?php

/** 
 * Model de Incrições
 */

class Inscricao extends AppModel
{
	public $useTable 		= 'inscricoes';
	public $displayField 	= 'nome';
	public $order			= array('nome', 'ASC');
}