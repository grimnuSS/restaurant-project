<?php
class M_Users extends CI_Model{
	public function __construct()
	{
		parent::__construct();
	}
	public function get($where = array())
	{
		return $this->db->where($where)->get('users')->row();
	}
	public function getAll($order = 'id ASC'){
		return $this->db->order_by($order)->get('users')->result();
	}
	public function save($data = array()){
		return $this->db->insert('users', $data);
	}
	public function update($where = array(), $data = array())
	{
		return $this->db->where($where)->update('users', $data);
	}
	public function delete($where = array())
	{
		return $this->db->where($where)->delete('users');
	}
}
