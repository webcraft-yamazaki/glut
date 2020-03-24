<?php
//Pagenation
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {

if($paged != $pages){
$nextLink = get_pagenum_link($paged + 1);
$str1 = <<<EOM
<div class="p-articleList__button">
  <a class="c-button" href="$nextLink">
    NEXT
  </a>
</div>
<div class="p-articleList__pager">
  <div class="c-pager">
    <p class="c-pager__count">
      $paged / $pages
    </p>
EOM;
    echo $str1;
} else {
$str1 = <<<EOM
<div class="p-articleList__pager">
  <div class="c-pager">
    <p class="c-pager__count">
      $paged / $pages
    </p>
EOM;
      echo $str1;
}

		 echo "<div id=\"pagination\" class=\"c-pager__list\" >\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         // if($paged > 1) echo "<a href='".get_pagenum_link($paged - 1)."'>Prev</a>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<a class=\"current\">".$i."</a>\n":"<a href='".get_pagenum_link($i)."'>".$i."</a>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		// if ($paged < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next</a>\n";
    echo "<a class=\"last\" href='".get_pagenum_link($pages)."' >$pages</a>";
		echo "</div>\n";

    if($paged != $pages){
      echo "</div>\n";
      echo "</div>\n";
    }
  }
}
?>
