<?php
class empleados
{
	private $pdo;
	public $id_empleado;
    public $nombres;
    public $apellidos;
    public $numero_identidad;
    public $estado_civil;
    public $sexo;
    public $correo;
    public $telefono;
    public $numero_movil;
    public $fecha_nacimiento;
	public $usuario_registro;
	public $usuario_modifico;
	public $estado_empleado;




    public function __CONSTRUCT()
	{
		try
		{
			$cn =  new DataBase;
			$this->pdo=$cn->conexion();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM empleados");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_empleado)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM empleados WHERE id_empleado = ?");
			$stm->execute(array($id_empleado));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_empleado)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("UPDATE empleados SET estado_empleado=0 WHERE id_empleado = ?");

			$stm->execute(array($id_empleado));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
                    $sql = "UPDATE empleados SET
						nombres= ?,
    apellidos= ?,
    numero_identidad= ?,
    estado_civil= ?,
    sexo= ?,
    correo= ?,
    telefono= ?,
    numero_movil= ?,
    fecha_nacimiento= ?,
	usuario_modifico= ?,
	estado_empleado= ?
                                              
                                            
				    WHERE id_empleado = ?";

            $this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->nombres,
						$data->apellidos,
						$data->numero_identidad,
						$data->estado_civil,
						$data->sexo,
						$data->correo,
						$data->telefono,
						$data->numero_movil,
						$data->fecha_nacimiento,
						$data->usuario_modifico,
						$data->estado_empleado,                                    
                        $data->id_empleado,
					)
				);
                                echo '$sql';
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(empleados $data)
	{
		try
		{

		$sql = "INSERT INTO empleados (nombres,apellidos,numero_identidad,estado_civil,sexo,correo,telefono,numero_movil,fecha_nacimiento,usuario_registro,estado_empleado)
		        VALUES (?, ?, ?, ?,?, ?,?,?,?,?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                   $data->nombres,
						$data->apellidos,
						$data->numero_identidad,
						$data->estado_civil,
						$data->sexo,
						$data->correo,
						$data->telefono,
						$data->numero_movil,
						$data->fecha_nacimiento,
						$data->usuario_registro,
						$data->estado_empleado,                                    
                  
                )
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
