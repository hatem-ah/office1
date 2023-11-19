<?php
class city
{
	private $db;
	function __construct($db)
	{
		$this->db=$db;
	}
	public function get_city()
	{
		return $this->db->get('cities');
	}
	public function add_city($info)
	{
		return $this->db->insert('cities',$info);
	}
	public function update_city($id,$info)
	{
		return $this->db->where('id',$id)->update('cities',$info);
	}
	public function delete_city($id)
	{
	return	$this->db->where('id',$id)->delete('cities');
	}

}