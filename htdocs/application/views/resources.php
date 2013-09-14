<?php
$links = array(
    'Cru Press Green' => array(
        'href' => 'http://www.crupressgreen.com',
        'desc' => 'Get resources for Bible studies, discipleship, new believers, and more.'
    ),
    'National Cru Resources' => array(
        'href' => 'https://www.cru.org/training-and-growth/index.htm',
        'desc' => 'Resources for training & growth from the main Cru site.'
    ),
    'MeetTheProf' => array(
        'href' => 'http://meettheprof.com/university/california-polytechnic-state-university-san-luis-obispo/',
        'desc' => 'Find professors who are following Christ.'
    ),
    'Podcasts' => array(
        'href' => 'https://itunes.apple.com/us/podcast/slo-crusade/id337947386?mt=2',
        'desc' => 'Listen to recordings of past meetings.'
    ),
    'Livestream' => array(
        'href' => 'https://www.livestream.com/slocrusade',
        'desc' => 'Watch the weekly meeting live.'
    )
);

$pdf_path = '../assets/resources/pdf/';
$doc_path = '../assets/resources/doc/';
$downloads = array(
    'Articles' => array(
        'Annotated Send Model' => $pdf_path . 'Annotated_Send_Model.pdf',
        'Discerning God\'s Will' => $pdf_path . 'Discerning_Gods_Will_by_Youth_Specialties.pdf',
        'Biblical Career Principals' => $pdf_path . 'Biblical_Career_Principals_By_Navigator.pdf'
    ),
    'Studies' => array(
        'Prayer' => $pdf_path . 'Bible_Study_On_Prayer.pdf',
        'Discerning God\'s Will' => $pdf_path . 'Discerning_Gods_Will_Bible_Study.pdf'
    ),
    'Letters' => array(
        'Keith Davy\'s Guidance Letter' => $pdf_path . 'Keith_Davy_Guidance_Letter.pdf',
        'NS Intern Intro Letter' => $pdf_path . 'Intro_Letter_To_NS_Intern.pdf'
    ),
    '5 Things for...' => array(
        'New Believers' => $pdf_path . '5_Things_New_Believer.pdf',
        'Freshmen' => $pdf_path . '5_Things_Freshman.pdf',
        'Juniors & Seniors' => $pdf_path . '5_Things_JrSr.pdf',
        'Alumni' => $pdf_path . '5_Things_Alumni.pdf',
        'Summer' => $pdf_path . '5_Things_Summer.pdf'
    )
);

$maybe = array(
    'overflow.com/episodes.html',
    'everystudent.com',
    'crusade app on iTunes?',
    'InTransition book',
);
?>

<div class="container" style="box-shadow: 0px 1px 10px #888888;
     border-radius: 0px 0px 10px 10px;
     background-color: #fff;
     padding: 10px 0 80px 0">
    <br/>
    <div class="col-md-12 text-center" style="font-size: 36pt; font-weight: 300; margin-bottom: 30px">
        Resources
    </div>

    <div style="margin: 10px 0 30px 0">
        <img src="../assets/img/dropshadowup2.png" style="width:100%; height:25px;"/>
    </div>

    <div style="margin: 10px 0 10px 0">
        <div class="container col-md-6" style="border-right: 1px dashed #CCC; padding-bottom: 20px">
            <div class="text-center" style="font-size: 24pt; margin-bottom: 20px;">
                Links
            </div>
            <ul class="list-unstyled" style="margin-left: 6em">
                <?php
                foreach ($links as $name => $parts) {
                    echo '<div style="margin-bottom: 1em;">';
                    echo '<li><a href="' . $parts['href'] . '">' . $name . '</a></li>';
                    echo '<li style="padding: .1em 0 0 1em">';
                    echo $parts['desc'];
                    echo '</li></div>';
                }
                ?>
            </ul>
        </div>

        <div class="container col-md-6">
            <div class="text-center" style="font-size: 24pt; margin-bottom: 20px;">
                Downloads
            </div>
            <ul class="list-unstyled" style="margin-left: 6em">
                <?php
                foreach ($downloads as $title => $files) {
                    echo '<div style="margin-bottom: 1em;">';
                    echo '<li>' . $title . '</li>';
                    foreach ($files as $name => $path) {
                        echo '<li style="margin: .1em 0 0 1em">';
                        echo '<a href="' . $path . '">' . $name . '</a>';
                        echo '</li>';
                    }
                    echo '</div>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>