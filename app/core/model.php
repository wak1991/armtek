<?php

class Model
{
	
	public $db;

	public function __construct()
	{
		$this->db = new Db();
	}

	public function get_data($start, $perpage)
	{
		// todo
	}
}