<?php

namespace model;
use framework\Model;
class DetailsModel extends Model
{

	function zsList($where=null, $limit=null)
	{
		return $this->field('*')->table('bg_details')->where($where)->order('addtime desc')->limit($limit)->select();
	}

	function total($where=null)
	{
		return $this->table('bg_details')->where($where)->count('id');
	}

	function addft($data)
	{
		return $this->table('bg_details')->insert($data);
	}

	function up($where,$data)
	{
		return $this->table('bg_details')->where($where)->update($data);
	}


	//模糊查询
	 function muhu($name)
	{
		$mu = $this->field('*')->table('bg_details')->where("title like '%$name%' && isdel=0")->select();

		return $mu;
	}

	 function muhu1($name,$limit)
	{
		$mu = $this->field('*')->table('bg_details')->where("title like '%$name%' && isdel=0")->limit($limit)->select();

		return $mu;
	}
		
	//查询总数

	function mucount($name)
	{
		$mucount = $this->table('bg_details')->where("title like '%$name%' && isdel=0")->count('id');

		return $mucount;
	}
}

