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
            'Asian Americans' => 'dpu2010+interestsAA@gmail.com',
            'Athletes' => 'dpu2010+interestsA@gmail.com',
            'Greeks' => 'dpu2010+interestsG@gmail.com',
            'Latino/Hispanic' => 'dpu2010+interestsLH@gmail.com',
            'Transfers' => 'dpu2010+interestsT@gmail.com'
        );
        $emails = array(
            'Male' => array(
                'Cal Poly SLO' => array(
                    'Freshmen' => array(
                        'Yosemite' => 'dpu2010+menyosemite@gmail.com',
                        'Sierra Madre' => 'dpu2010+mensierramadre@gmail.com',
                        'Tenaya' => 'dpu2010+mentenaya@gmail.com',
                        'Trinity' => 'dpu2010+mentrinity@gmail.com',
                        'Santa Lucia' => 'dpu2010+mensantalucia@gmail.com',
                        'North Mountain' => 'dpu2010+mennorthmountain@gmail.com',
                        'Muir' => 'dpu2010+menmuir@gmail.com',
                        'Fremont' => 'dpu2010+menfremont@gmail.com',
                        'Sequoia' => 'dpu2010+mensequoia@gmail.com',
                        'Cerro Vista' => 'dpu2010+mencerrovista@gmail.com',
                        'PCV' => 'dpu2010+menpcv@gmail.com',
                        'Other' => 'dpu2010+menother@gmail.com',
                    ),
                    'Sophomore' => 'dpu2010+CPMenPlus@gmail.com',
                    'Junior' => 'dpu2010+CPMenPlus@gmail.com',
                    'Senior' => 'dpu2010+CPMenPlus@gmail.com',
                    'Senior plus' => 'dpu2010+CPMenPlus@gmail.com'
                ),
                'Cuesta' => 'dpu2010+CuestaMen@gmail.com'
            ),
            'Female' => array(
                'Cal Poly SLO' => array(
                    'Freshmen' => array(
                        'Yosemite' => 'dpu2010+womenyosemite@gmail.com',
                        'Sierra Madre' => 'dpu2010+womensierramadre@gmail.com',
                        'Tenaya' => 'dpu2010+womentenaya@gmail.com',
                        'Trinity' => 'dpu2010+womentrinity@gmail.com',
                        'Santa Lucia' => 'dpu2010+womensantalucia@gmail.com',
                        'North Mountain' => 'dpu2010+womennorthmountain@gmail.com',
                        'Muir' => 'dpu2010+womenmuir@gmail.com',
                        'Fremont' => 'dpu2010+womenfremont@gmail.com',
                        'Sequoia' => 'dpu2010+womensequoia@gmail.com',
                        'Cerro Vista' => 'dpu2010+womencerrovista@gmail.com',
                        'PCV' => 'dpu2010+womenpcv@gmail.com',
                        'Other' => 'dpu2010+womenother@gmail.com',
                    ),
                    'Sophomore' => 'dpu2010+CPWomenSophomore@gmail.com',
                    'Junior' => 'dpu2010+CPWomenPlus@gmail.com',
                    'Senior' => 'dpu2010+CPWomenPlus@gmail.com',
                    'Senior plus' => 'dpu2010+CPWomenPlus@gmail.com'
                ),
                'Cuesta' => 'dpu2010+CuestaWomen@gmail.com'
            )
        );
        if (gettype($emails[$gender][$college]) === 'string')
            $use_email = array($emails[$gender][$college]);
        else {
            if (gettype($emails[$gender][$college][$year]) === 'string')
                $use_email = array($emails[$gender][$college][$year]);
            else
                $use_email = array($emails[$gender][$college][$year][$dorm]);
        }

        if (!empty($interests))
        {
            foreach ($interests as $value)
            {
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