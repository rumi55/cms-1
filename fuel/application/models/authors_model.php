<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Authors_model extends Base_module_model {
    public $required = array('name', 'email'); 
    function __construct()
    {
        parent::__construct('authors');
    }   
    
	function form_fields($values = array())
	{
    	$fields = parent::form_fields($values);     
    	$upload_path = assets_server_path('authors/', 'images');
   		$fields['avatar_upload'] = array('type' => 'file', 'upload_path' => $upload_path, 'overwrite' => TRUE);
    	$fields['published']['order'] = 1000;
    	return $fields;
	}
}
 class Author_model extends Data_record {
     
    public function get_avatar_image()
    {
        return '<img src="'.img_path($this->avatar).'" />';
    }
} 
?>