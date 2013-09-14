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
            'Greeks' => 'melanie.hanlon@cru.org',
            'Latino/Hispanic' => 'reid.zeller@cru.org',
            'Transfers' => 'kathryn.edmiston@cru.org'
        );
        $emails = array(
            'Male' => array(
                'Cal Poly SLO' => array(
                    'Freshmen' => array(
                        'Yosemite' => array('kyle.fletcher@cru.org'),
                        'Sierra Madre' => array('kyle.fletcher@cru.org'),
                        'Tenaya' => array('kyle.fletcher@cru.org'),
                        'Trinity' => array('kyle.fletcher@cru.org'),
                        'Santa Lucia' => array('kyle.fletcher@cru.org'),
                        'North Mountain' => array('kyle.fletcher@cru.org'),
                        'Muir' => array('kyle.fletcher@cru.org'),
                        'Fremont' => array('kyle.fletcher@cru.org'),
                        'Sequoia' => array('kyle.fletcher@cru.org'),
                        'Cerro Vista' => array('kyle.fletcher@cru.org'),
                        'PCV' => array('kyle.fletcher@cru.org'),
                        'Other' => array('kyle.fletcher@cru.org')
                    ),
                    'Sophomore' => 'kyle.fletcher@cru.org',
                    'Junior' => 'kyle.fletcher@cru.org',
                    'Senior' => 'kyle.fletcher@cru.org',
                    'Senior plus' => 'kyle.fletcher@cru.org'
                ),
                'Cuesta' => 'adam.nixon@cru.org'
            ),
            'Female' => array(
                'Cal Poly SLO' => array(
                    'Freshmen' => array(
                        'Yosemite' => array('gretchen.pappas@cru.org'),
                        'Sierra Madre' => array('gretchen.pappas@cru.org'),
                        'Tenaya' => array('gretchen.pappas@cru.org'),
                        'Trinity' => array('gretchen.pappas@cru.org'),
                        'Santa Lucia' => array('gretchen.pappas@cru.org'),
                        'North Mountain' => array('gretchen.pappas@cru.org'),
                        'Muir' => array('gretchen.pappas@cru.org'),
                        'Fremont' => array('gretchen.pappas@cru.org'),
                        'Sequoia' => array('gretchen.pappas@cru.org'),
                        'Cerro Vista' => array('gretchen.pappas@cru.org'),
                        'PCV' => array('gretchen.pappas@cru.org'),
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
                if(($value === 'Greeks' && $gender === 'Male')||($value === 'Transfers' && $gender === 'Male')){}
                else
                    array_push($use_email, $interestArr[$value]);
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

          $this->email->subject('Student interested in a Bible Study!');
          $str = 'This student is interested in a bible study. Please contact them as soon as possible. Thank you!<br/><br/>';
          $str .= 'Name: '.$name.'<br/>';
          $str .= 'Gender: '.$gender.'<br/>';
          $str .= 'College: '.$college.'<br/>';
          $str .= 'Year in school: '.$year.'<br/>';
          if($year === 'Freshmen' && $college !== 'Cuesta')
          {
            $str .= 'Dorm: '.$dorm.'<br/>';
            $str .= 'Room: '.$room.'<br/>';
          }
          $str .= 'Email: '.$email.'<br/>';
          $str .= 'Cell: '.$cell.'<br/>';
          if(!empty($interests))
          {
              $str .= 'Interests: <br/>';
              foreach($interests as $value)
              {
                  $str .= '&nbsp;&nbsp;&nbsp;&nbsp;'.$value.'<br/>';
              }
          }
          $str .= 'Notes: '.$notes.'<br/>';
          $str .= '<br/>--Admin';
          $this->email->message($str);
          $this->email->send();
          redirect('/studies', 'refresh'); 
    }

}