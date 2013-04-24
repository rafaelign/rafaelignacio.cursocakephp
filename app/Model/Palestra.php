<?php

/** 
 * Model de Palestras
 */

class Palestra extends AppModel
{
    /** 
     * Parâmetros..
     */
    public $displayField = 'nome';
    public $order = array('nome' => 'ASC');

    /**
     * Relacionamentos
     */
    public $belongsTo = array('Palestrante');

    /** 
     * Validações
     */
    public $validate = array(
        'nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Nome.',
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'Já foi criado uma palestra com este nome, informe outro.',
            ),
        ),
        'inicio' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Email.',
            ),
            array(
                'rule' => array('datetime', 'H:i'),
                'message' => 'Horário de início inválido.',
            ),
        ),
        'fim' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Telefone.',
            ),
            array(
                'rule' => array('datetime', 'H:i'),
                'message' => 'Horário de fim inválido.',
            ),
        ),
    );
}

?>