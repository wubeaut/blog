<?php

namespace model;
use framework\Model;
class WordModel extends Model
{
	
	function zsWord($where=null, $limit=null)
	{
		return $this->field('*')->table('bg_word')->where($where)->limit($limit)->select();
	}

	function total($where=null)
	{
		return $this->table('bg_word')->where($where)->count('wid');
	}
	function addWord($data)
	{
		return $this->table('bg_word')->insert($data);
	}
	
	function up($where,$data)
	{
		return $this->table('bg_word')->where($where)->update($data);
	}
}

