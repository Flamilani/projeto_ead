<?php 
class Cursos extends model {

	private $info;
	
	public function getCursoDoAluno($id) {
		$array = array();

		$sql = "SELECT 
					aluno_curso.curso_id,
					cursos.nome,
					cursos.imagem,
					cursos.descricao
				FROM
					aluno_curso
				LEFT JOIN cursos
					on aluno_curso.curso_id = cursos.curso_id
				WHERE 
					aluno_curso.aluno_id = '$id'";

				$sql = $this->db->query($sql);

				if($sql->rowCount() > 0) {
					$array = $sql->fetchAll();
				}		

				return $array;
	}

	public function setCurso($id) {
		$array = array();
		
		$sql = "SELECT * from cursos WHERE curso_id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$this->info = $sql->fetch();
		}

		return $array;
	}

	public function getNome() {
		return $this->info['nome'];
	}

	public function getImagem() {
		return $this->info['imagem'];
	}

	public function getDescricao() {
		return $this->info['descricao'];
	}
}

 ?>