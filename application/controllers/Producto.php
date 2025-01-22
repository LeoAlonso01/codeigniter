<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model'); // Carga el modelo
    }

    public function index() {
        $data['productos'] = $this->Producto_model->get_all();
        $this->load->view('producto/index', $data);
    }

    public function create() {
        $this->load->view('producto/create');
    }

    public function store() {
        $data = [
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio')
        ];
        $this->Producto_model->insert($data);
        redirect('producto');
    }

    public function edit($id) {
        $data['producto'] = $this->Producto_model->get($id);
        $this->load->view('producto/edit', $data);
    }

    public function update($id) {
        $data = [
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio')
        ];
        $this->Producto_model->update($id, $data);
        redirect('producto');
    }

    public function delete($id) {
        $this->Producto_model->delete($id);
        redirect('producto');
    }
}
