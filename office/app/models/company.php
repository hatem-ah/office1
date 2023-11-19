<?php
class company
{
	private $db;
	function __construct($db)
	{
		$this->db=$db;
	}
	public function get_company()
	{
		return $this->db->get('companies');
	}
	public function add_company($info)
	{
		return $this->db->insert('companies',$info);
	}
	public function update_company($info,$id)
	{
		return $this->db->where('id',$id)->update('companies',$info);
	}
	public function delete_company($id)
	{
		return $this->db->where('id',$id)->delete('companies');
	}
}