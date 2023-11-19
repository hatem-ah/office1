<?php
class ticket
{
	private $db;
	function __construct($db)
	{
		$this->db=$db;
	}
	public function get_ticket()
	{
	return	$this->db->get('tickets');
	}
	public function add_ticket($info)
	{
	return	$this->db->insert('tickets',$info);
	}
	public function update_ticket($info,$id)
	{
	return	$this->db->where('id',$id)->update('tickets',$info);
	}
	public function delete_ticket($id)
	{
	return	$this->db->where('id',$id)->delete('tickets');
	}
}
?>