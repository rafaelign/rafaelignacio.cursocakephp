<?php
/** 
 * Model de Usuários
 */

App::uses('AuthComponent', 'Controller/Component');

class Usuario extends AppModel
{
    /** 
     * Parâmetros..
     */
    public function beforeSave($options = array())
    {
        if (isset($this->data['Usuario']['senha'])) {
            $pass = &$this->data['Usuario']['senha'];
            $pass = AuthComponent::password($pass);
        }

        return parent::beforeSave($options);
    }
}

?>