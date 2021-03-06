<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * PyroSnippets Text Snippet
 *
 * @package  	PyroCMS
 * @subpackage  PyroSnippets
 * @category  	Snippets
 * @author  	Parse19
 */ 
class Snippet_text extends Snippet {

	public $name			= 'Text';
	
	public $slug			= 'text';

	// --------------------------------------------------------------------------

	/**
	 * Form Input
	 *
	 * @access	public
	 * @param	string - form value
	 * @return 	string
	 */
	public function form_output($value)
	{
		$form_data = array(
			'name'        => $this->input_name,
			'id'          => $this->input_name,
			'value'       => $value
		);

		return form_textarea($form_data);
	}

}