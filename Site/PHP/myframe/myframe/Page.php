<?php
namespace myframe;

class Page
{
    public static function html($url, $total, $page, $size, $num = 5)
    {
      $page = max((int)$page, 1);					// 当前访问的页码，最低为1
      $maxpage = max(ceil($total / $size), 1);	// 计算总页数，最低为1
      if ($maxpage == 1) {
        return '';
      }
      $html = ["<ul class=\"pagination\">"];
      // ……
      if ($page > 1) {
        $html[] = "<li><a href=\"{$url}1\">首页</a></li>";
        $html[] = '<li><a href="' . $url . ($page - 1) . '">上一页</a></li>';
      } else {
          $html[] = '<li class="disabled"><span>首页</span></li>';
          $html[] = '<li class="disabled"><span>上一页</span></li>';
      }
      $num = floor($num / 2);			// 计算当前页前后页码链接的个数
      $start = $page - $num;			// 计算最左边显示的页码
      $end = $page + $num;			// 计算最右边显示的页码
      if ($start < 1) {
        $end = $end + (1 - $start);
        $start = 1;
      }
      if ($end > $maxpage) {
        $start = $start - ($end - $maxpage);
        if ($start < 1) {
            $start = 1;
        }
        $end = $maxpage;
      }
      if ($start > 1) {
        $html[] = '<li class="disabled"><span>...</span></li>';
      }
      for ($i = $start; $i <= $end; $i++) {
        if ($i == $page) {
            $html[] = "<li class=\"active\"><span>$i</span></li>";
        } else {
            $html[] = "<li><a href=\"{$url}{$i}\">$i</a></li>";
        }
      }
      if ($end < $maxpage) {
        $html[] = '<li class="disabled"><span>...</span></li>';
      }
      if ($page == $maxpage) {
        $html[] = '<li class="disabled"><span>下一页</span></li>';
        $html[] = '<li class="disabled"><span>尾页</span></li>';
      } else {
          $html[] = '<li><a href="' . $url. ($page + 1) . '">下一页</a></li>';
          $html[] = "<li><a href=\"{$url}{$maxpage}\">尾页</a></li>";
      }
      $html[] = '</ul>';
      return implode('', $html);

    }
}
