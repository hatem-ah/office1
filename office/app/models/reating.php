<?php

class reating
{
	private $db;
	function __construct($db)
	{
		$this->db=$db;
	}
	public function get_reating()
	{
		return $this->db->get('reatings');
	}
	public function add_reating($info)
	{
	return	$this->db->insert('reatings',$info);
	}
	public function update_reating($info,$id)
	{
	return	$this->db->where('id',$id)->update('reatings',$info);
	}
	public function delete_reating($id)
	{
	return	$this->db->where('id',$id)->delete('reatings');
	}
}
?>