<?php
class Cliente
{
	private $pdo;
    
    public $idcliente;
    public $nombre;
    public $direccion;
    public $telefono;
    public $email;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
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

			$stm = $this->pdo->prepare("SELECT * FROM tb_clientes");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tb_clientes WHERE idcliente = ?");
			          

			$stm->execute(array($idcliente));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($idcliente)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tb_clientes WHERE idcliente = ?");			          

			$stm->execute(array($idcliente));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tb_clientes SET 
						nombre       = ?, 
						direccion     = ?,
                        telefono      = ?, 
						email         = ?
				    WHERE idcliente = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
                        $data->direccion,
						$data->telefono,
                        $data->email,
                        $data->idcliente
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tb_clientes` (nombre,direccion,telefono,email) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre, 
                    $data->direccion,
					$data->telefono,
                    $data->email                    
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
