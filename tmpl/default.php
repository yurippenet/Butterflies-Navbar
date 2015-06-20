<?php
defined('_JEXEC') or die;
echo $html;
echo '<ul class="navlist">';
foreach ($list as $i => &$item){
if($i == 0 and $params->get("skipfirst")){
continue;
}

$classes = "navlist";
if ($item->id == $active_id){
	$classes .= " navactive";
}

echo '<li class="'.$classes.'">';
echo '<a class="'.$classes.'" href="'.$item->flink.'">';
echo $item->title;
echo '</a></li>';
}
echo '</ul>';
