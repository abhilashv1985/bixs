<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of history
 *
 * @author nijesh
 */
class history {

    function logActivity($id, $tablename, $op_performed) {
        $CI = &get_instance();        
        $perform_by = $CI->session->userdata('userId');
        $data = array(
                    'referenceid' => $id,
                    'referencetable' => $tablename,
                    'operation_performed' => $op_performed,
                    'performed_by' => $perform_by,
                    'modifiedtime' => date('Y-m-d H:i:s', now())
                );
        $query = $CI->db->insert('historylog', $data);
        //return $query->result();
    }

}

?>
