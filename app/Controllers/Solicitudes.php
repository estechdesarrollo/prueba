<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Solicitud;
use App\Models\Empleado;
class Solicitudes extends Controller{
    public function index(){
        $solicitud = new Solicitud();
        $empleado  = new Empleado();
        $solicitud->select('solicitudes.*, empleado.nombre as nombre');
        $solicitud->join('empleados as empleado', 'solicitudes.id_empleado = empleado.id');
        
        $datos['solicitudes']    = $solicitud->get()->getResult();
        $datos['empleados']     = $empleado->orderBy('id','ASC')->findAll();

        $datos['header']        = view('template/header');
        $datos['footer']        = view('template/footer');
        return view('solicitudes',$datos);
    }

    // funcion guardar
    public function save2(){
        $empleado   = new Solicitud();

        $datos      = [
            'codigo'        =>$this->request->getVar('codigo'),
            'descripcion'   =>$this->request->getVar('descripcion'),
            'resumen'       =>$this->request->getVar('resumen'),
            'id_empleado'   =>$this->request->getVar('id_empleado'),
        ];

        $empleado->insert($datos);
        return $this->response->redirect(base_url('solicitudes'));
    }
}