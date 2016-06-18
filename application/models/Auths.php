<?php if (!defined('BASEPATH')) exit('No direct access allowed');
/**
* 
*/
class Auths extends CI_Model
{
	/**
	 * Personal account registration
	 * 27 means one has a basic account
	 */
	public function personal_registration()
	{
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$middle_name = $this->input->post('middle_name');
		$email = $this->input->post('email');
		$password = md5($this->input->post('confirm_passwd'));
		$phone = $this->input->post('phone_number');
		$role = "27";

		$sql = "INSERT INTO Users(FirstName,MiddleName,LastName,Email,Phone,Password,Role)
		VALUES(
			".$this->db->escape($first_name).",
			".$this->db->escape($middle_name).",
			".$this->db->escape($last_name).",
			".$this->db->escape($email).",
			".$this->db->escape($phone).",
			".$this->db->escape($password).",
			".$this->db->escape($role)."

			)";

		if($this->db->query($sql)){
			return true;
		}else{
			return false;
		}
		
		
	}


	public function selecting_all()
	{
		$q = $this->db->select('')
			->from('table_name');
		$ret['rows'] = $q->get()->result();
		return $ret;
//		print_r($ret);
	}

	public function selecting_with_condition()
	{
		$q = $this->db->select('')
			->from('table_name')
			->where('column','data');//eg. where('employee_id','5')
		$ret['rows'] = $q->get()->result();
		return $ret;
//		print_r($ret);
	}


	public function update()
	{
		$sql2 = "UPDATE table SET attribute = 'variable' WHERE attribute='variable'";
		$this->db->query($sql2);
		return true;
	}

	public function join()
	{
		$q = $this->db->select('table.attribute, table.attribute')
			->from('table')
			->where('table.attribute','variable')//if theres a where.... ->where('table.attribute',$sth) or ->where('table.attribute','predefined_variable')
			->join('XTable', 'XTable.attribute = Table.attribute');

		$ret['rows'] = $q->get()->result();

		return $ret;
	}

	public function Insert()
	{
		$sql = "INSERT INTO tablename()
		VALUES(
			".$this->db->escape().",
			".$this->db->escape()."

			)";

		$result=$this->db->query($sql);
	}
}
?>