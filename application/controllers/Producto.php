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
        redirect('producto/index');
    }

    public function edit($id = null) {
        // Verificar si no se proporcionó un ID
        if ($id === null) {
            show_404(); // Mostrar error 404 si no se pasa el ID
        }

        // Cargar el modelo si es necesario
        $this->load->model('ProductoModel');

        // Obtener el producto de la base de datos
        $producto = $this->ProductoModel->getProductoById($id);

        if (!$producto) {
            show_404(); // Mostrar error 404 si el producto no existe
        }

        // Cargar la vista y pasar los datos del producto
        $this->load->view('edit', ['producto' => $producto]);
    }


    public function update($id) {
        $data = [
            'nombre' => $this->input->post('nombre'),
            'descripcion' => $this->input->post('descripcion'),
            'precio' => $this->input->post('precio')
        ];
        $this->Producto_model->update($id, $data);
        redirect('producto/index');
    }

    public function delete($id) {
        $this->Producto_model->delete($id);
        redirect('producto/index');
    }
}
