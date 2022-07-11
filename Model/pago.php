<?php
class Pago
{
	private $pdo;
    
    public $idpago;
    public $fecha;
    public $valorpago;
    public $concepto;
    public $idcliente;

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

			$stm = $this->pdo->prepare("SELECT * FROM tb_pagos");
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
			          ->prepare("SELECT * FROM tb_pagos WHERE idcliente = ?");
			          

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
			            ->prepare("DELETE FROM tb_pagos WHERE idcliente = ?");			          

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
			$sql = "UPDATE tb_pagos SET 
						idcliente       = ?, 
						fecha     = ?,
                        valorpago      = ?, 
						concepto         = ?
				    WHERE idpago = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->idcliente, 
                        $data->fecha,
						$data->valorpago,
                        $data->concepto,
                        $data->idpago
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
		$sql = "INSERT INTO `tb_pagos` (valorpago,concepto) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->valorpago, 
                    $data->concepto                 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
