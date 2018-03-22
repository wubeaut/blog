<?php

namespace model;
use framework\Model;
class ReplyModel extends Model
{

	function zsList($where=null, $limit=null)
	{
		return $this->field('*')->table('bg_reply')->where($where)->order('addtime desc')->limit($limit)->select();
	}

	function addReply($data)
	{
		return $this->table('bg_reply')->insert($data);
	}

	function total($where=null)
	{
		return $this->table('bg_reply')->where($where)->count('rid');
	}

	function up($where,$data)
	{
		return $this->table('bg_reply')->where($where)->update($data);
	}
}

