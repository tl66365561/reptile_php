<?php
require './simple_html_dom.php';

// 加载 HTML 文档
$html_content = file_get_contents('http://124.222.70.220/NewIndex.php');

//echo $html_content;

$html = str_get_html($html_content);

// 查找并遍历所有 <a> 标签
foreach ($html->find('a') as $link) {
    // 获取链接的文本内容和 href 属性
    $text = $link->innertext;
    $href = $link->getAttribute('href');

    // 输出链接信息
    echo "文本内容：$text\n";
    echo "链接地址：$href\n";
    echo "-----------------\n";
}

// 释放资源
$html->clear();
?>
