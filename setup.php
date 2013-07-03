<?
AutoLoader::register_view_path("plugin", __DIR__."/view/");
AutoLoader::$plugin_array[] = array("name"=>"wildfire.analytics_event","dir"=>__DIR__);

echo CONTENT_MODEL;exit;
if(defined("CONTENT_MODEL")){

  WaxEvent::add(CONTENT_MODEL.".setup", function(){
    $model = WaxEvent::data();
    $model->define("track_as_event_in_analytics", "BooleanField", array('group'=>'Analytics Event') );
    $model->define("analytics_event_action", "CharField", array('group'=>'Analytics Event') );
    $model->define("analytics_event_label", "CharField", array('group'=>'Analytics Event') );
  });
}
?>