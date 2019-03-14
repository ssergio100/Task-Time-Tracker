<?php
// defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {
	
	public $response = array();
	
	public function __construct(){
        parent::__construct();
		$this->load->model('task_model', 'task');
		$this->response['success'] = false;
	}

	public function index()
	{
		$this->load->view('time_tracker');
	}

	public function add() {

		$post = $_POST['task'];
		
		$insertId = $this->task->add($post);
		$this->response['success'] = true;
		$this->response['insertId'] = $insertId;
		echo json_encode($this->response);
	}

	public function getTasks() {
		$result = $this->task->getTasks();

		echo json_encode($result);
	}

	public function remove() {
		if ($id = $this->input->get('id') !="") {
			$result = $this->task->remove($id);
			if($result) {
				$this->response['success'] = true;
			} else {
				$this->response['message'] = 'Ocorreu um erro ao tentar remover a tarefa.';
			}
		} else {
			$this->response['message'] = 'Faltando dados!';
		}
		echo json_encode($this->response);
	}

}
