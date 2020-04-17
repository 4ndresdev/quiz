<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{


	public function index()
	{
		$this->load->view('home');
	}

	public function quiz()
	{
		$this->load->view('quiz');

	}

	public function post()
	{
		$E = 0;
		$I = 0;
		$N = 0;
		$S = 0;
		$T = 0;
		$F = 0;
		$J = 0;
		$P = 0;

		if ($this->input->is_ajax_request()) {
			$arreglo  = [];
			$contador = 1;
			$arreglito = [];

			foreach ($this->input->post('datos') as $datos) {

				$data = [
					'id_profile' => $this->input->post('id_profile'),
					'q_number'   => $datos['id_question'],
					'value'      => $datos['reply']
				];
				switch ($datos['reply']) {
					case 'E':$E++; break;
					case 'I':$I++; break;
					case 'S':$S++; break;
					case 'N':$N++; break;
					case 'T':$T++; break;
					case 'F':$F++; break;
					case 'J':$J++; break;
					case 'P':$P++; break;
				}
				$this->db->insert('response', $data);
			}
			$profile = '';
			if ($E > $I) {$profile .= 'E';} else {$profile .= 'I';}
			if ($S > $N) {$profile .= 'S';} else {$profile .= 'N';}
			if ($T > $F) {$profile .= 'T';} else {$profile .= 'F';}
			if ($J > $P) {$profile .= 'J';} else {$profile .= 'P';}

			//return $this->model->archetipe->get($profile);

			$personaje = $this->db->get_where('cat_archetype', ['archetype'=> $profile ])->row();

			$p_a = [
				'id_profile' => $this->input->post('id_profile'),
				'archetype'  => $personaje->archetype
			];
			
			$this->db->insert('p_a', $p_a);

			$profile = [
				'id_profile'    => $this->input->post('id_profile'),
				'email'         => $this->input->post('email'),
				'name'          => $this->input->post('name'),
				'created_at'    => date('Y-m-d')
			];
			
			$this->db->insert('profile', $profile);

			$response  = [
				'img'         => $personaje->name_archetype,
				'title'       => $personaje->name_archetype,
				'descripcion' => $personaje->descripcion,
				'character'   => $personaje->character
			];

			echo json_encode($response);
			
		} else {
			http_response_code(404);
		}
	}


}
