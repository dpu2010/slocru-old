<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Studies extends CI_Controller {

    public function index() {
        $this->load->view('header/header');
        $this->load->view('studies');
        $this->load->view('footer/footer');
    }

    public function mail() {
        $this->load->helper('url');
        $name = $this->input->post('name');
        $gender = $this->input->post('gender');
        $college = $this->input->post('college');
        $year = $this->input->post('year');
        $dorm = $this->input->post('dorm');
        $room = $this->input->post('room');
        $email = $this->input->post('email');
        $cell = $this->input->post('cell');
        $interests = $this->input->post('interests');
        $notes = $this->input->post('notes');
        $interestArr = array(
            'Asian Americans' => 'tyler.mendoza@cru.org',
            'Athletes' => 'matt.williams@cru.org',
            'Greeks' => array('Female' => 'melanie.hanlon@cru.org', 'Male' => 'reid.zeller@cru.org'),
            'Latino/Hispanic' => 'reid.zeller@cru.org',
            'Transfers' => 'kathryn.edmiston@cru.org'
        );
        $emails = array(
            'Male' => array(
                'Cal Poly SLO' => array(
                    'Freshmen' => array(
                        'Yosemite' => array('dwagstaf@calpoly.edu', 'lundquis@calpoly.edu', 'rcarey@calpoly.edu', 'rtpate@calpoly.edu'),
                        'Sierra Madre' => array('ebodenbach@gmail.com', 'celind@calpoly.edu', 'mhamada@calpoly.edu', 'alek.thelinquist@gmail.com'),
                        'Tenaya' => array('jdavis45@calpoly.edu', 'ljschroe@calpoly.edu'),
                        'Trinity' => array('bgreller@calpoly.edu', 'cmhennin@calpoly.edu'),
                        'Santa Lucia' => array('thoekstr@calpoly.edu', 'john.simeroth@gmail.com'),
                        'North Mountain' => array('darren12_11@yahoo.com.tw', 'jtbarkhimer@gmail.com'),
                        'Muir' => array('samuelxlui@gmail.com', 'awsnyder21@gmail.com'),
                        'Fremont' => array('craigcary@ymail.com', 'angelsfan1@gmail.com'),
                        'Sequoia' => array('kportis@calpoly.edu', 'tsevern@calpoly.edu'),
                        'Cerro Vista' => array('aalvar28@calpoly.edu'),
                        'PCV' => array('jonathan.newman@cru.org'),
                        'Other' => array('jonathan.newman@cru.org')
                    ),
                    'Sophomore' => 'jonathan.newman@cru.org',
                    'Junior' => 'jonathan.newman@cru.org',
                    'Senior' => 'jonathan.newman@cru.org',
                    'Senior plus' => 'kyle.fletcher@cru.org'
                ),
                'Cuesta' => 'jonathan.newman@cru.org'
            ),
            'Female' => array(
                'Cal Poly SLO' => array(
                    'Freshmen' => array(
                        'Yosemite' => array('sjmay@calpoly.edu', 'ericaandris@yahoo.com', 'klbriggs@calpoly.edu', 'kwalke10@calpoly.edu'),
                        'Sierra Madre' => array('scdean92@gmail.com', 'ceshanno@calpoly.edu', 'h.kirtland@comcast.net', 'regan.kate8@gmail.com'),
                        'Tenaya' => array('paigekeating@yahoo.com', 'prystrom@gmail.com'),
                        'Trinity' => array('aarimura@calpoly.edu', 'pvase@calpoly.edu', 'rebekkahtuck@aol.com', 'mmstewar@calpoly.edu'),
                        'Santa Lucia' => array('pporche@calpoly.edu', 'bri_sny@sbcglobal.net'),
                        'North Mountain' => array('pporche@calpoly.edu', 'bri_sny@sbcglobal.net'),
                        'Muir' => array('yourleftshoe@comcast.net', 'cjwalter@calpoly.edu'),
                        'Fremont' => array('mnbarnet@calpoly.edu', 'kbriggs26@yahoo.com'),
                        'Sequoia' => array('krodabau@calpoly.edu', 'ccollom@calpoly.edu'),
                        'Cerro Vista' => array('kbjrkman@calpoly.edu', 'kathleengrigsby@yahoo.com', 'kierstendemmond@yahoo.com', 'tawalker@calpoly.edu'),
                        'PCV' => array('bkamp33@gmail.com', 'shwhite@calpoly.edu'),
                        'Other' => array('gretchen.pappas@cru.org')
                    ),
                    'Sophomore' => 'gretchen.pappas@cru.org',
                    'Junior' => 'jenny.davis@cru.org',
                    'Senior' => 'jenny.davis@cru.org',
                    'Senior plus' => 'jenny.davis@cru.org'
                ),
                'Cuesta' => 'kelly.phillips@cru.org'
            )
        );
        if (gettype($emails[$gender][$college]) === 'string')
            $use_email = array($emails[$gender][$college]);
        else {
            if (gettype($emails[$gender][$college][$year]) === 'string')
                $use_email = array($emails[$gender][$college][$year]);
            else
                $use_email = $emails[$gender][$college][$year][$dorm];
        }

        if (!empty($interests))
        {
            foreach ($interests as $value)
            {
                if ($value === 'Greeks')
                    array_push($use_email, $interestArr[$value][$gender]);
                else
                {
                    if ($value === 'Transfers' && $gender === 'Male') {}
                    else
                        array_push($use_email, $interestArr[$value]);
                }
            }
        }
        $config = Array(
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
        $this->email->to($use_email);
        $this->email->bcc('dpu2010@gmail.com');

        $this->email->subject('Student interested in a Bible Study!');
        $str = 'This student is interested in a bible study. Please contact them as soon as possible. Thank you!<br/><br/>';
        $str .= 'Name: ' . $name . '<br/>';
        $str .= 'Gender: ' . $gender . '<br/>';
        $str .= 'College: ' . $college . '<br/>';
        $str .= 'Year in school: ' . $year . '<br/>';
        if ($year === 'Freshmen' && $college !== 'Cuesta') {
            $str .= 'Dorm: ' . $dorm . '<br/>';
            $str .= 'Room: ' . $room . '<br/>';
        }
        $str .= 'Email: ' . $email . '<br/>';
        $str .= 'Cell: ' . $cell . '<br/>';
        if (!empty($interests)) {
            $str .= 'Interests: <br/>';
            foreach ($interests as $value) {
                $str .= '&nbsp;&nbsp;&nbsp;&nbsp;' . $value . '<br/>';
            }
        }
        $str .= 'Notes: ' . $notes . '<br/>';
        $str .= '<br/>--Admin';
        $this->email->message($str);
        $this->email->send();
        redirect('/studies', 'refresh');
    }

}