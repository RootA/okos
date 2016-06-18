<?php if (!defined('BASEPATH')) exit('No direct access allowed');
/**
* 
*/
class Categories extends CI_Model
{
	/**
	 * Status 0 Not activated
	 */
	public function all_categories()
	{
		$q = $this->db->select('')
			->from('ProductCategories')
			->where('Status','1');
		$ret['rows'] = $q->get()->result();
		return $ret;
//		print_r($ret);
	}
	
/////////////////////////////////////////////////
/////////////////////////////////////////////////
/////////////////////////////////////////////////
/////////////////////////////////////////////////
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