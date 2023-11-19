<?php

class booking
{
	private $db;
	function __construct($db)
	{
	 $this->db=$db;
	}
	public function get_booking()
	{
	return	$this->db->get('booking');
	}
	public function add_booking($info)
	{
	return	$this->db->insert('booking',$info);
	}
	public function update_booking($info,$id)
	{
	return	$this->db->where('id',$id)->update('booking',$info);
	}
	public function delete_booking($id)
	{
	return 	$this->db->where('id',$id)->delete('booking');
	}
}