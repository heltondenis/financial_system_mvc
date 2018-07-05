<?php 
class Permissions extends model {

	private $group;
	private $permissions;

	public function setGroup($id, $id_company) {
		$this->group = $id;

		$sql = $this->db->prepare("SELECT params FROM permission_groups WHERE id = :id AND id_company = :id_company");
		$sql->bindValue(':id', $id);
		$sql->bindValue(':id_company', $id_company);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$row = $sql->fetch();

			if (empty($row['params'])) {
				$row['params'] = '0';
			}

			$sql = $this->db->prepare("SELECT name FROM permission_params WHERE id IN (:id) AND id_company = :id_company");
				$sql->db->bindValue(':id', $row['params']);
				$sql->db->bindValue(':id_company', $id_company);
				$sql->execute();

				if ($sql->rowCount() > 0) {
					foreach ($sql->fetchAll() as $item) {
						$this->permission[] = $item['name'];
					}
				}
			}

		}
	}

 ?>