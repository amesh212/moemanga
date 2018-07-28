<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_home extends CI_Model {

	/**
	 * Index Page for this controller.
	 *ta
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function get_new_updates()
	{
        $query = $this->db->query("SELECT * FROM new_updates ORDER BY id DESC LIMIT 6");
        return $query->result();
	}
	public function latest_new_updates()
	{
        $this->db->group_by('date_release');
        $this->db->limit('5');
        $this->db->order_by('date_release','DESC');
        $parent_tanggal = $this->db->get('new_updates')->result_array();

        foreach ($parent_tanggal as $key => $value) {
        	$this->db->where('date_release', $value['date_release']);
        	$child = $this->db->get('new_updates')->result_array();
        	foreach ($child as $key2 => $value2) {

        		$hasil[$value['date_release']][]  = array(
        			'title'=> $value2['title'],
        			'chapter' => $value2['chapter'],
        			'url' => $value2['url'] );

        	}
        }
        // print_r($hasil);exit;
        return $hasil;
	}

}
