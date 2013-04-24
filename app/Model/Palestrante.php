<?php

/** 
 * Model de Palestrantes
 */

class Palestrante extends AppModel
{
    /** 
     * Parâmetros..
     */
    public $displayField = 'nome';
    public $order = array('nome' => 'ASC');

    /**
     * Relacionamentos
     */
    public $hasMany = array('Palestra');

    /** 
     * Validações
     */
    public $validate = array(
        'nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Nome.',
            ),
        ),
        'descricao' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher a Descrição.',
            ),
        ),
        'url' => array(
            array(
                'rule' => 'url',
                'message' => 'Você deve informar uma url válida.',
            ),
        ),
    );
}

?>