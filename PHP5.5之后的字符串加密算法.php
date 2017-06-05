<?php
/**
 * 在这个案例里，我们为 BCRYPT 增加 cost 到 12。
 * 注意，我们已经切换到了，将始终产生 60 个字符。
 */
$options = [
    'cost' => 12,
];
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."</br>";
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."</br>";
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."</br>";
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."</br>";
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."</br>";
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."</br>";
echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."</br>";
$mima = password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options);

if (password_verify('rasmuslerdorf', $mima))//这个函数，就是能够将加密字符串中的盐提取出来
{
    echo password_hash("rasmuslerdorf", PASSWORD_BCRYPT, $options)."</br>";
    echo $mima;
    echo 11111;       //每一个密码加密过后都不一样,PHP7 未来可能会弃用手动加盐
} 
else 
{
    echo 2222;
}
var_dump('增加点东西，不然提交不了');