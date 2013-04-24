<?php
/**
 *
 * Controller Palestras
 *
 */
class PalestrasController extends AppController
{
    public function index()
    {
        /** 
         * Capturando palestras
         */
        $params = array(
            'fields' => array('Palestra.nome', 'Palestra.descricao', 'Palestra.inicio', 'Palestrante.id', 'Palestrante.nome'),
            'order' => array('Palestra.inicio' => 'ASC'),
        );
        $palestras = $this->Palestra->find('all', $params);

        // Repassando para View
        $this->set('palestras', $palestras);
    }

    public function view($id)
    {
        echo $id;
    }
}

?>