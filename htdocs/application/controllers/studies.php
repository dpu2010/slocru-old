<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Studies extends CI_Controller
{

    public function index()
    {
        $this->load->view('header/header');
        $this->load->view('studies');
        $this->load->view('footer/footer');
    }

    public function mail()
    {
        $this->load->helper('url');
        $name = $this->input->post('name');
        $gender = $this->input->post('gender');
        $year = $this->input->post('year');
        $dorm = $this->input->post('dorm');
        $room = $this->input->post('room');
        $email = $this->input->post('email');
        $cell = $this->input->post('cell');
        $notes = $this->input->post('notes');
//        $emails = array(
//            'gender' => array(
//                'male' => '',
//                'female' =>
//            )
//        );
        /*$config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.slocrusade.com',
            'smtp_port' => 26,
            'smtp_user' => 'admin+slocrusade.com',
            'smtp_pass' => 'romans125',
            'mailtype' => 'html',
            'charset' => 'iso-8859-1'
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

        $this->email->from('admin@slocrusade.com');
        $this->email->to('dpu2010@gmail.com');

        $this->email->subject('Student interested in a Bible Study!');
        $str = 'This student is interested in a bible study. Please get them in
            touch with bible study leaders of their age and gender as soon as possible. Thank you!<br/><br/>';
        $str .= 'Name: '.$name.'<br/>';
        $str .= 'Gender: '.$gender.'<br/>';
        $str .= 'Year in school: '.$year.'<br/>';
        $str .= 'Dorm: '.$dorm.'<br/>';
        $str .= 'Room: '.$room.'<br/>';
        $str .= 'Email: '.$email.'<br/>';
        $str .= 'Cell: '.$cell.'<br/>';
        $str .= 'Notes: '.$notes.'<br/>';
        $str .= '<br/>--Admin';
        $this->email->message($str);

        $this->email->send();
        redirect('/studies', 'refresh');*/
    }
}