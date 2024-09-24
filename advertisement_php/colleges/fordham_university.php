<?php
    $title = 'Fordham University';
    $path = '../';
    $path_index = '../';
    $path_landmarks = '../landmarks/';
    $path_colleges = '';
    $path_about = '../about/';
    $general_css = 'landmarks_&_colleges_&_about_styles.css';
    $personal_css = 'fordham_university_styles.css';
    $script = 'final.js';
    $breadcrumbs = '<ul id="breadcrumbs">
                        <li class="breadcrumbs_item">
                            <a href="../index.php" class="breadcrumbs_link">Home</a>
                        </li>
                        <li class="breadcrumbs_item">
                            <a href="colleges.php" class="breadcrumbs_link">Colleges</a>
                        </li>
                        <li class="breadcrumbs_item">
                            <a href="fordham_university.php" class="breadcrumbs_link" id="breadcrumbs_link_active">Fordham University</a>
                        </li>
                    </ul>';
    $heading_title = 'Fordham University';
    include '../assets/inc/header_&_nav.php';
?>

        <!-- Content -->
        <div id="content">
            <img src="../assets/media/colleges/fordham_university.jpg" width="1000" height="250" alt="Fordham University image" id="fordham_university">

            <div id="section_1">
                <h3 id="about_heading">About</h3>
                <p id="about_info">
                    Fordham University is a Jesuit, Catholic university with two campuses in New York City.  The university’s community came 
                    from the nearly 500-year history of Jesuits, a religious order with an international reputation as intellectuals and 
                    professional educators whose mission follows around compassion for others, advocating and defending justice, and to strive 
                    for preeminence.  They welcome people of all and no faiths but who are of goodwill students that utilizes their education 
                    in the commitment for compassion, justice, and to serve the common good.
                </p>
            </div>

            <div id="section_2">
                <div id="stats_1">
                    <h3>Rankings:</h3>
                    <ul>
                        <li>601-800th World University Rankings 2019</li>
                        <li>171st US College Rankings 2022</li>
                    </ul>
                </div>

                <div id="section_3">
                    <div id="stats_2">
                        <h3>Out-of-state Tuition & Fees:</h3>  <p>$54,008</p>
                        <h3>On-campus Room and Board:</h3>  <p>$18,510</p>
                        <h3>Salary after 10 years:</h3>  <p>$57,600</p>
                        <h3>4-year graduation rate:</h3>  <p>79%</p>
                        <h3>Student-faculty ratio:</h3>  <p>13:1</p>
                    </div>

                    <div id="section_4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48279.16889199706!2d-73.95573654179687!3d40.86204039999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f37e5180c091%3A0x39c5cf445ed73ef8!2sFordham%20University!5e0!3m2!1sen!2sus!4v1653993129480!5m2!1sen!2sus" width="600" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

<?php
    include '../assets/inc/footer.php';
?>