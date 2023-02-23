<?php 

	class DepartamentosModel extends Mysql
	{
		public $intIddepartamento;
		public $strDepartamento;
		public $strDescripcion;
		public $intStatus;
		public $strRuta;

		public function __construct()
		{
			parent::__construct();
		}

		public function insertDepartamento($nombre,$descripcion,$ruta,$status){

			$return = 0;
			$this->strDepartamento = $nombre;
			$this->strDescripcion = $descripcion;
			$this->strRuta = $ruta;
			$this->intStatus = $status;

			$sql = "SELECT * FROM departamento WHERE nombre = '{$this->strDepartamento}' ";
			$request = $this->select_all($sql);      

			if(empty($request))
			{
				$query_insert  = "INSERT INTO departamento(nombre,descripcion,ruta,status) VALUES(?,?,?,?)";
	        	$arrData = array($this->strDepartamento, 
								 $this->strDescripcion, 							
								 $this->strRuta, 
								 $this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			}else{
				$return = "exist";
			}
			return $return;
		}

		public function selectDepartamentos()
		{
			$sql = "SELECT * FROM departamento 
					WHERE status != 0 ";
			$request = $this->select_all($sql);
			return $request;
		}

		public function selectDepartamento($iddepartamento){
			$this->intIddepartamento = $iddepartamento;
			$sql = "SELECT * FROM categoria
					WHERE iddepartamento = $this->intIddepartamento";
			$request = $this->select($sql);
			return $request;
		}

		public function updateDepartamento($iddepartamento,$categoria,$descripcion,$ruta,$status){
			$this->intIddepartamento = $iddepartamento;
			$this->strDepartamento = $categoria;
			$this->strDescripcion = $descripcion;
			$this->strRuta = $ruta;
			$this->intStatus = $status;

			$sql = "SELECT * FROM departamento WHERE nombre = '{$this->strDepartamento}' AND iddepartamento != $this->intIddepartamento";
			$request = $this->select_all($sql);

			if(empty($request))
			{
				$sql = "UPDATE departamento SET nombre = ?, descripcion = ?,  ruta = ?, status = ? WHERE iddepartamento = $this->intIddepartamento ";
				$arrData = array($this->strDepartamento, 
								 $this->strDescripcion, 							
								 $this->strRuta, 
								 $this->intStatus);
				$request = $this->update($sql,$arrData);
			}else{
				$request = "exist";
			}
		    return $request;			
		}

		public function deleteDepartamento(int $iddepartamento)
		{
			$this->intIddepartamento = $iddepartamento;
			$sql = "SELECT * FROM vacantes WHERE departamentoid = $this->intIddepartamento";
			$request = $this->select_all($sql);
			if(empty($request))
			{
				$sql = "UPDATE departamento SET status = ? WHERE iddepartamento = $this->intIddepartamento ";
				$arrData = array(0);
				$request = $this->update($sql,$arrData);
				if($request)
				{
					$request = 'ok';	
				}else{
					$request = 'error';
				}
			}else{
				$request = 'exist';
			}
			return $request;
		}	

		public function getCategoriasFooter(){
			$sql = "SELECT iddepartamento, nombre, descripcion, portada, ruta
					FROM categoria WHERE  status = 1 AND iddepartamento IN (".CAT_FOOTER.")";
			$request = $this->select_all($sql);
			if(count($request) > 0){
				for ($c=0; $c < count($request) ; $c++) { 
					$request[$c]['portada'] = BASE_URL.'/Assets/images/uploads/'.$request[$c]['portada'];		
				}
			}
			return $request;
		}


	}
 ?>