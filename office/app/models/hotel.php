<?php
class hotel
{
	private $db;
	function __construct($db)
	{
		$this->db=$db;
	}
	public function get_hotel()
	{
		 return $this->db->get('hotels');
		
	}
	public function add_hotel($info)
	{
		return $this->db->insert('hotels',$info);
	}
	public function update_hotel($info,$id)
	{
		return $this->db->where('id',$id)->update('hotels',$info);
	}
	public function delete_hotel($id)
	{
	return	$this->db->where('id',$id)->delete('hotels');
	}
}