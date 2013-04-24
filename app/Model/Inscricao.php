<?php

/** 
 * Model de Incrições
 */

class Inscricao extends AppModel
{
    /** 
     * Parâmetros..
     */
    public $displayField    = 'nome';
    public $order           = array('nome', 'ASC');

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
        'email' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Email.',
            ),
            array(
                'rule' => 'email',
                'message' => 'Você deve preencher um email válido.',
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'Este email já existe em nosso cadastro.',
            ),
        ),
        'telefone' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Telefone.',
            ),
            array(
                'rule' => 'naturalNumber',
                'message' => 'Somente são aceitos números para este campo.',
            ),
        ),
        'endereco' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Você deve preencher o Endereço.',
            ),
            array(
                'rule' => array('minLength', 10),
                'message' => 'Você deve informar no mínimo 10 caracteres para o endereço.',
            ),
        ),
    );
}

?>