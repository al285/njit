<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->load->model('project_model', 'project');
    }

    public function index() {
        $this->load->view('main/main');
    }
    
    // Colleges with the highest percentage of women students
    public function q1() {
        $data['res'] = $this->project->get_women_percentage();
        $data['question_heading'] = 'Question 1';
        $data['question_text'] = 'Colleges with the highest percentage of women students';
        $this->load->view('main/answer_1', $data);
    }
    
    // Colleges with the highest percentage of male students
    public function q2() {
        $data['res'] = $this->project->get_men_percentage();
        $data['question_heading'] = 'Question 2';
        $data['question_text'] = 'Colleges with the highest percentage of male students';
        $this->load->view('main/answer_1', $data);
    }
    
    // Colleges with the largest endowment overall
    public function q3() {
        $data['res'] = $this->project->get_largest_endowment();
        $data['question_heading'] = 'Question 3';
        $data['question_text'] = 'Colleges with the largest endowment overall';
        $this->load->view('main/answer_1', $data);
    }
    
    // Colleges with the largest enrollment of freshman
    public function q4() {
        $data['res'] = $this->project->get_largest_freshman_enrollment();
        $data['question_heading'] = 'Question 4';
        $data['question_text'] = 'Colleges with the largest enrollment of freshman';
        $this->load->view('main/answer_1', $data);
    }
    
    // Colleges with the highest revenue from tuition
    public function q5() {
        $data['res'] = $this->project->get_highest_revenue_tuition();
        $data['question_heading'] = 'Question 5';
        $data['question_text'] = 'Colleges with the highest revenue from tuition';
        $this->load->view('main/answer_1', $data);
    }
    
    // Colleges with the lowest non zero tuition revenue
    public function q6() {
        $data['res'] = $this->project->get_lowest_non_zero_tuition_revenue();
        $data['question_heading'] = 'Question 6';
        $data['question_text'] = 'Colleges with the lowest non zero tuition revenue';
        $this->load->view('main/answer_1', $data);
    }
    
    // top 10 colleges by region
    public function q7() {
        $data['res'] = array("0" => "US Service schools",
                            "1" => " New England CT ME MA NH RI VT",
                            "2" => " Mid East DE DC MD NJ NY PA",
                            "3" => " Great Lakes IL IN MI OH WI",
                            "4" => " Plains IA KS MN MO NE ND SD",
                            "5" => " Southeast AL AR FL GA KY LA MS NC SC TN VA WV",
                            "6" => " Southwest AZ NM OK TX",
                            "7" => " Rocky Mountains CO ID MT UT WY",
                            "8" => " Far West AK CA HI NV OR WA",
                            "9" => " Outlying areas AS FM GU MH MP PR PW VI",
                            "-3" => " Not available");
        $data['question_heading'] = 'Question 7';
        $data['question_text'] = 'Choose region to see stats';
        $this->load->view('main/regions', $data);
    }
    
    // top 10 colleges by region
    public function q7_stats($id) {
        $data['question_heading'] = 'Question 7';
        $data['question_text'] = 'Statistics by Region';
        $data['endowments'] = $this->project->get_endowments_by_region($id);
        $data['current_assets'] = $this->project->get_current_assets_by_region($id);
        $data['current_liabilities'] = $this->project->get_current_liabilities_by_region($id);
        $data['non_zero_tuitions'] = $this->project->get_lowest_non_zero_tuition_by_region($id);
        $data['highest_tuition'] = $this->project->get_highest_tuition_by_region($id);
        $this->load->view('main/region_answers', $data);
    }

}
