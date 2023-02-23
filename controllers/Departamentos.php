<?php
	class Departamentos extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			//session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MDEPARTAMENTOS);
		}

		public function Departamentos()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Departamentos";
			$data['page_title'] = "Departamentos";
			$data['page_name'] = "departamentos";
			$data['page_functions_js'] = "functions_departamentos.js";
			$this->views->getView($this,"departamentos",$data);
		}

		public function setDepartamento(){
			if($_POST){
				if(empty($_POST['txtNombre']) || empty($_POST['txtDescripcion']) || empty($_POST['listStatus']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{
					
					$intIddepartamento = intval($_POST['idDepartamento']);
					$strDepartamento =  strClean($_POST['txtNombre']);
					$strDescipcion = strClean($_POST['txtDescripcion']);
					$intStatus = intval($_POST['listStatus']);

					$ruta = strtolower(clear_cadena($strDepartamento));
					$ruta = str_replace(" ","-",$ruta);
                    $request_depto = "";



					if($intIddepartamento == 0)
					{
						//Crear
						if($_SESSION['permisosMod']['w']){
							$request_depto = $this->model->insertDepartamento($strDepartamento,$strDescipcion,$ruta,$intStatus);
							$option = 1;
						}
					}else{
						//Actualizar
						if($_SESSION['permisosMod']['u']){
		
							$request_depto = $this->model->updateDepartamento($intIddepartamento,$strDepartamento, $strDescipcion,$ruta,$intStatus);
							$option = 2;
						}
					}
					if($request_depto > 0 )
					{
						if($option == 1)
						{
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');						
						}
					}else if($request_depto == 'exist'){
						$arrResponse = array('status' => false, 'msg' => '¡Atención! El departamento ya existe.');
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function getDepartamentos()
		{
			if($_SESSION['permisosMod']['r']){
				$arrData = $this->model->selectDepartamentos();
				for ($i=0; $i < count($arrData); $i++) {
					$btnView = '';
					$btnEdit = '';
					$btnDelete = '';

					if($arrData[$i]['status'] == 1)
					{
						$arrData[$i]['status'] = '<span class="badge badge-success">Activo</span>';
					}else{
						$arrData[$i]['status'] = '<span class="badge badge-danger">Inactivo</span>';
					}

					if($_SESSION['permisosMod']['r']){
						// $btnView = '<button class="btn btn-info btn-sm" onClick="fntViewInfo('.$arrData[$i]['iddepartamento'].')" title="Ver categoría"><i class="far fa-eye"></i></button>';
					$btnView='<a href="javascript:;" onClick="fntViewInfo('.$arrData[$i]['iddepartamento'].')" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
					<i class="fas fa-eye text-secondary" aria-hidden="true"></i>
				  </a>'; 
					}
					if($_SESSION['permisosMod']['u']){
						// $btnEdit = '<button class="btn btn-primary  btn-sm" onClick="fntEditInfo(this,'.$arrData[$i]['iddepartamento'].')" title="Editar categoría"><i class="fas fa-pencil-alt"></i></button>';
					$btnEdit='<a href="javascript:;" onClick="fntEditInfo(this,'.$arrData[$i]['iddepartamento'].')" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
					<i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
				  </a>';
					}
					if($_SESSION['permisosMod']['d']){	
						// $btnDelete = '<button class="btn btn-danger btn-sm" onClick="fntDelInfo('.$arrData[$i]['iddepartamento'].')" title="Eliminar categoría"><i class="far fa-trash-alt"></i></button>';
					$btnDelete='<a href="javascript:;" onClick="fntDelInfo('.$arrData[$i]['iddepartamento'].')" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
					<i class="fas fa-trash text-secondary" aria-hidden="true"></i>
				  </a>';
					}
					$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnEdit.' '.$btnDelete.'</div>';
				}
				echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function getCategoria($idDepartamento)
		{
			if($_SESSION['permisosMod']['r']){
				$intIddepartamento = intval($idDepartamento);
				if($intIddepartamento > 0)
				{
					$arrData = $this->model->selectCategoria($intIddepartamento);
					if(empty($arrData))
					{
						$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
					}else{
						$arrData['url_portada'] = media().'/images/uploads/'.$arrData['portada'];
						$arrResponse = array('status' => true, 'data' => $arrData);
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

		public function delDepartamento()
		{
			if($_POST){
				if($_SESSION['permisosMod']['d']){
					$intIddepartamento = intval($_POST['idDepartamento']);
					$requestDelete = $this->model->deleteDepartamento($intIddepartamento);
					if($requestDelete == 'ok')
					{
						$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el Departamento');
					}else if($requestDelete == 'exist'){
						$arrResponse = array('status' => false, 'msg' => 'No es posible eliminar una departamento con vacantes asociadas.');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el Departamento.');
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

		public function getSelectCategorias(){
			$htmlOptions = "";
			$arrData = $this->model->selectCategorias();
			if(count($arrData) > 0 ){
				for ($i=0; $i < count($arrData); $i++) { 
					if($arrData[$i]['status'] == 1 ){
					$htmlOptions .= '<option value="'.$arrData[$i]['idDepartamento'].'">'.$arrData[$i]['nombre'].'</option>';
					}
				}
			}
			echo $htmlOptions;
			die();	
		}

	}


 ?>