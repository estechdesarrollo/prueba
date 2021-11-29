<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Empleado;
class Empleados extends Controller{

    public function index(){
        $empleado           = new Empleado();

        $datos['empleados'] = $empleado->orderBy('id','ASC')->findAll();
        $datos['header']    = view('template/header');
        $datos['footer']    = view('template/footer');

        return view('empleados',$datos);
    }

    // funcion guardar
    public function save(){
        $empleado   = new Empleado();

        $datos      = [
            'nombre'        =>$this->request->getVar('nombre'),
            'salario'       =>$this->request->getVar('salario'),
            'fecha_ingreso' =>$this->request->getVar('fecha')
        ];

        $empleado->insert($datos);
        return $this->response->redirect(base_url('empleados'));
    }

}