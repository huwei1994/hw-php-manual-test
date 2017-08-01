<?php
	return [

	// 积分系统域名
	'jifenHost' => 'http://jifen.truckclub.mepire.com/',	

	// 积分系统的最小响应时间(单位: 秒)
	'timeOut'	=> 10,	

	// 同一天连续两次签到的最小距离
	'minSignInDistance' => 50,

	// 同一天连续两次签到的最小时间差
	'minSignInTime' => 10800,

	// 每天日常操作总分不超过30分
	'dayMaxJifen' => 30,

	// 未认证用户最多只能达到500积分
	'unAuthMaxJifen' => 500,	

	// 积分类型
	// 1 认证 2 日常操作 3其它操作
	'TASK_TYPE' => [
		'T_AUTH' => 1,
		'T_REGISTER' => 1,

		'T_SIGN_IN' => 2,
		'T_SIGN_IN2' => 2,
		'T_PRAISE'	=> 2,
		'T_COMMENT' => 2,
		'T_PUBLISH' => 2,

		'T_BE_PRAISED' => 3,
		'T_INVITE_AUTH' => 3,		
		'T_POST_CHECK' => 3,
	],

	'TASK_NAME' => [
		'T_REGISTER' => '新用户注册',
		'T_SIGN_IN' => '签到',
		'T_SIGN_IN2' => '签到',
		'T_PRAISE'	=> '点赞',
		'T_COMMENT' => '发表评论',
		'T_PUBLISH' => '发帖子',
		'T_BE_PRAISED' => '被赞',
		'T_POST_CHECK' => '帖子举报审核',
		'T_AUTH' => '认证',
		'T_INVITE_AUTH' => '邀请认证',
	],

	// 用户注册
	'T_REGISTER' => [
		'==0' => 0,
		'!=0' => 10,
	],

	// 连续签到
	'T_SIGN_IN' => [
		'<=0'    => 0,
		'1'      => 1,
		'2'      => 2,
		'3'      => 3,
		'4'      => 4,
		'5'      => 5,
		'6'      => 6,
		'>6'     => 7,
		'%30==0' => 20,
	],

	// 当日连续签到
	'T_SIGN_IN2' => [
		'1' => 1,
		'2' => 1,
		'>2' => 0,
	],

	// 赞
	'T_PRAISE' => [
		'==0' => 0,
		'!=0' => 1,
	],

	// 发表评论
	'T_COMMENT' => [
		'==0' => 0,
		'!=0' => 1,
	],

	// 发帖子
	'T_PUBLISH' => [
		'==0' => 0,
		'>0' => 5,
		'<0' => -5,
	],
?>