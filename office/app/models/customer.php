<?php
class customer
{
	private $db;
	function __construct($db,)
	{
		$this->db=$db;
	}
	public function get_customer()
	{
		return $this->db->get('customers');
	}
	public function add_customer($info)
	{
		return $this->db->insert('customers',$info);
	}
	public function update_customer($id,$info)
	{
		return $this->db->where('id',$id)->update('customers',$info);
	}
	public function delete_customer($id)
	{
		return $this->db->where('id',$id)->delete('customers');
	}
	
}
?>