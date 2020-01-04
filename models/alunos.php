 <?php 
class Alunos extends model {

	private $info;

	public function isLogged() {
		if(isset($_SESSION['logaluno']) && !empty($_SESSION['logaluno'])) {
			return true;
		} else {
			return false;
		}
	}

	public function fazerLogin($email, $senha) {

		$sql = "SELECT * FROM alunos WHERE email = '$email' AND '$senha'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$row = $sql->fetch();
			$_SESSION['logaluno'] = $row['aluno_id'];
			return true;
		}
		return false;
	}

	public function isInscrito($id_curso) {
		$sql = "SELECT * FROM aluno_curso WHERE aluno_id = '" . ($this->info['aluno_id']) . "' AND curso_id = '$id_curso'";

		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function setAluno($id) {

		$sql = "SELECT * FROM alunos WHERE aluno_id = '$id'";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$this->info = $sql->fetch();
		}
	}

	public function getNome() {
		return $this->info['nome'];
	}

	public function getId() {
		return $this->info['aluno_id'];
	}

 }
