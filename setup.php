<?

AutoLoader::register_view_path("plugin", __DIR__."/view/");
AutoLoader::$plugin_array[] = array("name"=>"wildfire.analytics_event","dir"=>__DIR__);

if(defined("CONTENT_MODEL")){
  WaxEvent::add(CONTENT_MODEL.".setup", function(){
    $model = WaxEvent::data();
    $model->define("track_page_in_analytics", "BooleanField");
  });
}
?>