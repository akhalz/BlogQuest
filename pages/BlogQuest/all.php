<?php
/*$body = elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'Quest',
));
 */
 $body = elgg_list_entities(array(
    'type' => 'group',
    'subtype' => 'BlogQuest',
));
 
$body = elgg_view_layout('one_column', array('content' => $body));

echo elgg_view_page("All Site Blogs", $body);

?>
