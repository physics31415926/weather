<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {
	public function summary()
	{
        $limit = $this->input->get('slimit');
        $summary = $this->db
            ->query("SELECT * FROM data ORDER BY timestamp DESC LIMIT ?", [(int)$limit])
            ->result();

        $data = [
            'count' => count($summary),
            'detail' => $summary,
        ];

		$this->load->view('view/summary', $data);
    }
    public function asd()
	{
		$this->load->view('asd');
    }
}
