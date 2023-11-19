<?php

class admin
{
	private $db;
	function __construct($db)
	{
		$this->db=$db;
	}
	public function get_admin()
	{
		return $this->db->get('admins');
	}
	public function add_admin($info)
	{
		return $this->db->insert('admins',$info);
	}
	public function update_admin($info,$id)
	{
		return $this->db->where('id',$id)->update('admins',$info);
	}
	public function delete_admin($id)
	{
		return $this->db->where('id',$id)->delete('admins');
	}
	public function check_admin($email,$password)
	{
		return $this->db->where("email",$email)->where('password',$password)->getone("admins");
	}
}