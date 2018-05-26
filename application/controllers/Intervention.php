<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Intervention extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Intervention_model');
    } 

    /*
     * Listing of intervention
     */
    function index()
    {
        $data['intervention'] = $this->Intervention_model->get_all_intervention();
        
        $data['_view'] = 'intervention/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new intervention
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('description','Description','max_length[500]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_company' => $this->input->post('id_company'),
				'date_heure' => $this->input->post('date_heure'),
				'description' => $this->input->post('description'),
            );
            
            $intervention_id = $this->Intervention_model->add_intervention($params);
            redirect('intervention/index');
        }
        else
        {
			$this->load->model('Company_model');
			$data['all_company'] = $this->Company_model->get_all_company();
            
            $data['_view'] = 'intervention/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a intervention
     */
    function edit($id)
    {   
        // check if the intervention exists before trying to edit it
        $data['intervention'] = $this->Intervention_model->get_intervention($id);
        
        if(isset($data['intervention']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('description','Description','max_length[500]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_company' => $this->input->post('id_company'),
					'date_heure' => $this->input->post('date_heure'),
					'description' => $this->input->post('description'),
                );

                $this->Intervention_model->update_intervention($id,$params);            
                redirect('intervention/index');
            }
            else
            {
				$this->load->model('Company_model');
				$data['all_company'] = $this->Company_model->get_all_company();

                $data['_view'] = 'intervention/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The intervention you are trying to edit does not exist.');
    } 

    /*
     * Deleting intervention
     */
    function remove($id)
    {
        $intervention = $this->Intervention_model->get_intervention($id);

        // check if the intervention exists before trying to delete it
        if(isset($intervention['id']))
        {
            $this->Intervention_model->delete_intervention($id);
            redirect('intervention/index');
        }
        else
            show_error('The intervention you are trying to delete does not exist.');
    }
    
}