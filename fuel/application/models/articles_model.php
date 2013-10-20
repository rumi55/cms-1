<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Articles_model extends Base_module_model {
 
    public $foreign_keys = array('author_id' => 'authors_model');
    public $parsed_fields = array('content', 'content_formatted');
     	
    function __construct()
    {
        parent::__construct('articles');
    }
    
    function list_items($limit = NULL, $offset = NULL, $col = 'name', $order = 'asc')
    {
        $this->db->join('authors', 'authors.id = articles.author_id', 'left');
        $this->db->select('articles.id, authors.name AS author, title, SUBSTRING(content, 1, 50) AS content, date_added, articles.published', FALSE);
        $data = parent::list_items($limit, $offset, $col, $order);
        return $data;
    }
function form_fields($values = array())
{
     
    // ******************* NEW RELATED CATEGORY FIELD BEGIN *******************
    $related = array('categories' => 'categories_to_articles_model');
    // ******************* NEW RELATED CATEGORY FIELD END *******************
 
    $fields = parent::form_fields($values, $related);
 
    $CI =& get_instance();
    $CI->load->model('authors_model');
    $CI->load->model('categories_model');
    $CI->load->model('categories_to_articles_model');
 
    $author_options = $CI->authors_model->options_list('id', 'name', array('published' => 'yes'));
    $fields['author_id'] = array('type' => 'select', 'options' => $author_options);
 
    return $fields;
}
function on_after_save($values)
{
    $data = (!empty($this->normalized_save_data['categories'])) ? $this->normalized_save_data['categories'] : array();
    $this->save_related('categories_to_articles_model', array('article_id' => $values['id']), array('category_id' => $data));
}
}
 
class Article_model extends Base_module_record {
 
}
?>