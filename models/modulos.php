<?php 
	
class Modulos extends model {

	public function getModulos($curso_id) {
		$array = array();

		$sql = "SELECT * FROM modulos WHERE curso_id = '$curso_id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();

			$aulas = new Aulas();

			foreach ($array as $mChave => $mDados) {
				$array[$mChave]['aulas'] = $aulas->getAulasDoModulo($mDados['modulo_id']);
			}
		}

		return $array;
	}
}

 ?>