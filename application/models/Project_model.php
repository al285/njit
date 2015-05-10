<?php

class Project_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    // Question 1: Colleges with the highest percentage of women students
    public function get_women_percentage() {
        $query = $this->db->query('select colleges.UNITID, colleges.INSTNM as college_name,  ((SUM(enr.EFTOTLW)/SUM(enr.EFTOTLT))*100) as val
                                from colleges 
                                join enrollments as enr on enr.UNITID = colleges.UNITID
                                GROUP BY UNITID
                                ORDER BY val DESC
                                LIMIT 10');
        return $query->result_array();
    }
    
    // Question 2: Colleges with the highest percentage of male students
    public function get_men_percentage() {
        $query = $this->db->query('select colleges.UNITID, colleges.INSTNM as college_name,  ((SUM(enr.EFTOTLM)/SUM(enr.EFTOTLT))*100) as val
                                from colleges 
                                join enrollments as enr on enr.UNITID = colleges.UNITID
                                GROUP BY UNITID
                                ORDER BY val DESC
                                LIMIT 10');
        return $query->result_array();
    }
    
    // Question 3: Colleges with the largest endowment overall
    public function get_largest_endowment() {
        $query = $this->db->query('select colleges.UNITID, colleges.INSTNM as college_name,  fin.F1E07 as val
                                from colleges 
                                join financial as fin on fin.UNITID = colleges.UNITID
                                ORDER BY val DESC
                                LIMIT 10');
        return $query->result_array();
    }
    
    // Question 4: Colleges with the largest enrollment of freshman
    public function get_largest_freshman_enrollment() {
        $query = $this->db->query('select colleges.UNITID, colleges.INSTNM as college_name,  enr.EFTOTLT as val
                                from colleges 
                                join enrollments as enr on enr.UNITID = colleges.UNITID
                                where enr.EFALEVEL = 4
                                GROUP BY UNITID
                                ORDER BY val DESC
                                LIMIT 10');
        return $query->result_array();
    }
    
    // Question 5: Colleges with the highest revenue from tuition
    public function get_highest_revenue_tuition() {
        $query = $this->db->query('select colleges.UNITID, colleges.INSTNM as college_name,  fin.F1B01 as val
                                from colleges 
                                join financial as fin on fin.UNITID = colleges.UNITID 
                                ORDER BY val DESC
                                LIMIT 10');
        return $query->result_array();
    }
    
    // Question 6: Colleges with the lowest non zero tuition revenue
    public function get_lowest_non_zero_tuition_revenue() {
        $query = $this->db->query('select colleges.UNITID, colleges.INSTNM as college_name,  fin.F1B01 as val
                                from colleges 
                                join financial as fin on fin.UNITID = colleges.UNITID
                                where fin.F1B01 > 0 
                                ORDER BY val
                                LIMIT 10');
        return $query->result_array();
    }
    
    // Get all region
    public function get_all_region() {
        $query = $this->db->query("select DISTINCT colleges.OBEREG as region from colleges");
        return $query->result_array();
    }
    
    // Get current assets of top colleges by region
    public function get_current_assets_by_region($region_id) {
        $query = $this->db->query("select colleges.UNITID, colleges.INSTNM as college_name, colleges.OBEREG, fin.F1A01 as assets
                                from colleges 
                                join financial as fin on fin.UNITID = colleges.UNITID
                                where colleges.OBEREG = {$region_id}
                                ORDER BY assets DESC
                                limit 10");
        return $query->result_array();
    }
    
    // Get endowments of top colleges by region
    public function get_endowments_by_region($region_id) {
        $query = $this->db->query("select colleges.UNITID, colleges.INSTNM as college_name, colleges.OBEREG, fin.F1E07 as val
                                from colleges 
                                join financial as fin on fin.UNITID = colleges.UNITID
                                where colleges.OBEREG = {$region_id}
                                ORDER BY val DESC
                                limit 10");
        return $query->result_array();
    }
    
    // Get current liabilities of top colleges by region
    public function get_current_liabilities_by_region($region_id) {
        $query = $this->db->query("select colleges.UNITID, colleges.INSTNM as college_name, colleges.OBEREG, fin.F1A09 as liabilities
                                from colleges 
                                join financial as fin on fin.UNITID = colleges.UNITID
                                where colleges.OBEREG = {$region_id}
                                ORDER BY liabilities DESC
                                limit 10");
        return $query->result_array();
    }
    
    // Get current assets of top colleges by region
    public function get_lowest_non_zero_tuition_by_region($region_id) {
        $query = $this->db->query("select colleges.UNITID, colleges.INSTNM as college_name, colleges.OBEREG, (fin.F1B01 + fin.F1E08) as tuition
                                from colleges 
                                join financial as fin on fin.UNITID = colleges.UNITID
                                where colleges.OBEREG = {$region_id} and (fin.F1B01 + fin.F1E08)  > 0
                                ORDER BY tuition
                                limit 10");
        return $query->result_array();
    }
    
    // Get current assets of top colleges by region
    public function get_highest_tuition_by_region($region_id) {
        $query = $this->db->query("select colleges.UNITID, colleges.INSTNM as college_name, colleges.OBEREG, (fin.F1B01 + fin.F1E08) as tuition
                                from colleges 
                                join financial as fin on fin.UNITID = colleges.UNITID
                                where colleges.OBEREG = {$region_id}
                                ORDER BY tuition DESC
                                limit 10");
        return $query->result_array();
    }


}
