<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
require_once(FUEL_PATH.'models/base_module_model.php');
 
class Categories_model extends Base_module_model {
     
    public $record_class = 'Category';
     
    function __construct()
    {
        parent::__construct('categories');
    }
 
     
    // cleanup category to articles
    function on_after_delete($where)
    {
        $CI =& get_instance();
        $CI->load->model('categories_to_articles_model');
        if (is_array($where) && isset($where['id']))
        {
            $where = array('category_id' => $where['id']);
            $CI->categories_to_articles_model->delete($where);
        }
    }
 
}
 
class Category_model extends Base_module_record {
}