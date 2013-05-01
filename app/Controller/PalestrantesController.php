<?php
/**
 *
 * Controller Palestrantes
 *
 */
class PalestrantesController extends AppController
{
    public $scaffold = 'painel';
    
    public function index()
    {
        /** 
         * Capturando palestrantes
         */
        $params = array(
            'fields' => array('Palestrante.nome', 'Palestrante.descricao', 'Palestrante.site'),
            'order' => array('Palestrante.nome' => 'ASC'),
        );
        $palestrantes = $this->Palestrante->find('all', $params);

        // Repassando para View
        $this->set('palestrantes', $palestrantes);
    }

    public function view($id)
    {
        /** 
         * Capturando dados do palestrante
         */
        $this->Palestrante->id = $id;
        $palestrante = $this->Palestrante->read();

        // Repassando para View
        $this->set('palestrante', $palestrante);
    }
}

?>