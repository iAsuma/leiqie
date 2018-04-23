<?php
namespace Home\Model;
use Think\Model;
/**
* 
*/
class TestModel extends Model
{
	protected $autoCheckFields = false;
	public function demo($aa, array $bb ){
		return 22;
	}
}