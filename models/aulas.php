<?php 
class Aulas extends model {

	public function getAulasDoModulo($id) {
		$array = array();

		$sql = "SELECT * FROM aulas WHERE modulo_id = '$id' ORDER BY ordem";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();

			foreach ($array as $aulaChave => $aula) {
				if($aula['tipo'] == 'video') {
					$sql = "SELECT * FROM videos WHERE aula_id = '" . ($aula['aula_id']) . "'";
					$sql = $this->db->query($sql)->fetch();
					$array[$aulaChave]['nome'] = $sql['nome'];
				} 
				elseif($aula['tipo'] == 'poll') {	
					$sql = "SELECT * FROM exercicios WHERE aula_id = '" . ($aula['aula_id']) . "'";
					$sql = $this->db->query($sql)->fetch();				
					$array[$aulaChave]['nome'] = $sql['titulo'];
				}
			}
		}

		return $array;
	}

	public function getCursoDeAula($id_aula) {
		$sql = "SELECT * FROM aulas WHERE aula_id = '$id_aula'";
		$sql = $this->db->query($sql);	
		
		if($sql->rowCount() > 0) {
			$row = $sql->fetch();
			return $row['curso_id'];
		} else {
			return 0;
		}	
	}

	public function getAula($id_aula) {
		$array = array();

		$sql = "SELECT tipo FROM aulas WHERE aula_id = '$id_aula'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$row = $sql->fetch();
			
			if($row['tipo'] == 'video') {

				$sql = "SELECT * FROM videos WHERE aula_id = '$id_aula'";
				$sql = $this->db->query($sql);
				$array = $sql->fetch();
				$array['tipo'] = 'video';
			}
			elseif($row['tipo'] == 'poll') {

				$sql = "SELECT * FROM exercicios WHERE aula_id = '$id_aula'";
				$sql = $this->db->query($sql);
				$array = $sql->fetch();
				$array['tipo'] = 'poll';
			}
		}	

		return $array;
	}

	public function setDuvida($duvida, $aluno, $aula) {
		$sql = "INSERT INTO duvidas SET duvida = '$duvida', aluno_id = '$aluno', aula_id = '$aula'";
		$this->db->query($sql);
	}

	public function getDuvida($id_aula) {
		$array = array();

		$sql = "SELECT * FROM duvidas WHERE aula_id = '$id_aula'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();			

			}			
			return $array;
		}

}
