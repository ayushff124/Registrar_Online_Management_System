<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrar Office - BIT</title>
  <link rel="stylesheet" href="login_page.css">

  <!--  Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!--  Boxicons CDN for Icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<style>
   body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    header {
      background-color: #f72307e1;
      color: white;
      padding: 10px 0;
      text-align: center;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #333;
      flex-wrap: wrap;
    }

    nav a {
      color: white;
      padding: 14px 20px;
      text-decoration: none;
      text-align: center;
    }

    nav a:hover {
      /* background-color: #ddd; */
      color: rgb(248, 10, 10);
    }
    .user{
      align-content: center;
      height: 50px;
      width: 50px;
      border-radius: 50%;
      cursor: pointer;
      margin-left: 10px;
    }
    .logo{
      margin-left: 400px;
    }

    #footer {
      background: #0d0d0d;
      color: #fff;
      font-size: 14px;
      padding: 60px 0 30px;
    }

    #footer .footer-top {
      padding-bottom: 30px;
    }

    #footer h4 {
      font-size: 18px;
      font-weight: 700;
      color: #fff;
      margin-bottom: 20px;
    }

    #footer .footer-info {
      background: #1a1a1a;
      padding: 30px;
      border-top: 4px solid #e50914;
      border-radius: 4px;
    }

    #footer .footer-info p {
      line-height: 24px;
      color: #ccc;
      margin-bottom: 10px;
    }

    #footer .footer-info strong {
      color: #fff;
    }

    #footer .footer-links ul {
      list-style: none;
      padding: 0;
    }

    #footer .footer-links ul li {
      padding: 6px 0;
    }

    #footer .footer-links ul li i {
      color: red;
      margin-right: 8px;
    }

    #footer .footer-links ul li a {
      color: #ccc;
      text-decoration: none;
      transition: 0.3s;
    }

    #footer .footer-links ul li a:hover {
      color: #fff;
    }

    #footer .social-links a {
      font-size: 18px;
      background: #262626;
      color: #fff;
      display: inline-block;
      text-align: center;
      width: 40px;
      height: 40px;
      line-height: 40px;
      margin: 0 5px;
      border-radius: 50%;
      transition: 0.3s;
    }

    #footer .social-links a:hover {
      background: red;
    }

    #footer .copyright,
    #footer .credits {
      text-align: center;
      color: #ccc;
      padding-top: 10px;
    }

    #footer .credits a {
      color: #e50914;
      text-decoration: none;
    }

    #footer .credits a:hover {
      text-decoration: underline;
    }

    @media (min-width: 992px) {
      #footer .footer-top .row {
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-items: flex-start;
      }

      #footer .footer-info {
        text-align: left;
      }
    }
</style>

<body>

  <!-- Header -->
  <header>
    <img align="left" src="BIT-LOGO1.png" alt="logo" height="119" />
    <img align="right" src="AKTU-LOGO.png" alt="logo" height="119" />
    <div>
      <h2>Buddha Institute of Technology, GIDA, Gorakhpur</h2>
      <h2>बुद्धा इंस्टिट्यूट ऑफ़ टेक्नोलॉजी, गीडा, गोरखपुर</h2>
      <p>
        Approved by AICTE, New Delhi & Affiliated to Dr. A.P.J. Abdul Kalam
        Technical University, Lucknow, Uttar Pradesh College Code-525
      </p>
    </div>
  </header>

  <!-- Navigation -->
  <nav>
    <a href="home.php">Home</a>
    <a href="https://aktu.ac.in/syllabus.html">Syllabus</a>
    <a href="#">Fee Payment</a>
    <a href="upload.php">Upload Document</a>
    <a href="https://erp.aktu.ac.in/login.aspx">AKTU Erp</a>
    <a href="https://erp.aktu.ac.in/WebPages/OneView/OneView.aspx">Result</a>
    <a href="#footer">Contact Us</a>
    <a href="login.php">Logout</a>
    <div class="logo">
      <a href="login.php">
      <img src="logo.png" class="user">
      </a>
    </div>
    
  </nav>

  <!-- Body Content -->
  <div class="container my-5">
    <p>Buddha Institute of Technology is approved by A.I.C.T.E. and affiliated to Dr. APJ A.K.T.U. The programs of the institute are recognized all over India and abroad. It boasts of a strong Academic- Industrial interaction with high quality of research and consultancy and has close collaborative links with industries in the field of Automobile, Aerospace, Defense, Textile, Machine Tools, Software Development, Civil industry, Manufacturing Sector etc.<br><br>
Buddha Institute of Technology is situated along Gorakhpur - Lucknow National Highway # 28 at a distance of 10 kms from Gorakhpur railway station, and 12 kms from airport. The Institute is spread over 14 acres of eco-friendly land. Life at BIT is a blend of fun and hard work. Campus life is vibrant and full of enthusiasm.<br><br>
BIT has established advanced ROBOTICS LAB accredited by AICRA & 3D Printing Lab which can meet the requirement of students who are willing to create innovative products.<br><br>
    </p>

    <h3>Salient Features:</h3>
    <ul>
      <li><b>Outstanding Intellectual Pool:</b> Highly qualified, experienced and dedicated faculty members including M. Techs, PhDs, Professors. One of the best in the Eastern UP.</li>
      <li><b>Pedagogy:</b> Excellent teaching methodology with emphasis on interactive learning using audio-visual aids.</li>
      <li><b>Personality & Communication Skills Development:</b> Dedicated programmes to improve English Communication and Enhanced Personality included in the regular curriculum. Well equipped Language Lab with audio-visual gadgets.</li>
      <li><b>Training & Placement:</b> Highly effective Training & Placement Cell. Qualified and dedicated trainers to increase the competitive and employable skills of the students. Excellent Corporate Relations that help our students secure jobs. Highest number of placements is from BIT among the institutes in the eastern UP.</li>
      <li><b>Practical Exposure:</b> Well equipped Mechanical/ Electronics/Civil Engineering labs to provide practical learning to the students.</li>
      <li><b>State of the Art Computer Labs:</b> Hi-Tech Computer Lab with high speed internet access.</li>
      <li><b>Co-curricular Activities:</b> Regular Workshops and Guest Lectures for students to make them learn the latest technology and industry practices.</li><br>
      <li><b>Extra-curricular Activities:</b> Extracurricular activities are organized regularly for holistic development of the students. Excellent sports facilities are available like Cricket field, Football ground, Basketball court, Lawn Tennis court, Volley Ball court, Badminton court and Squash court.</li>
      <li><b>Up-to date Library:</b> Well equipped Library with reference books, journals, magazines, and newspapers along with an e-Library with high speed internet access.</li>
      <li><b>Separate Hostels for Boys & Girls:</b> Separate Boy’s and Girl’s Hostel with mess facility providing healthy and hygienic food, 24 hours security, Gym, TV room, Recreation room etc.</li>
      <li><b>Personal Care of Students:</b> Dedicated Student Welfare Department to take care of students and Women Grievance Cell to address the issues of female students.</li>
      <li><b>Innovative Grooming:</b> Research and Development Cell and an Innovation Centre provide an opportunity to students to innovate and explore new ideas and implement their learning to develop innovative models.</li>
      <li><b>Participation in Community Development:</b> Community Development Department encourages students to help others and seed good ethics to make them more sensible and responsible citizens of India.</li>
      <li><b>State of the Art Infrastructure:</b> Lush green and beautiful campus spread in 14 acres and state of the art architecture.</li>
    </ul>
  </div>

  <!-- Footer -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- Admissions Section -->
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Admissions and Fee</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="#">Admissions in B.Tech</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="#">Admissions in M.Tech</a></li>
            </ul>
          </div>

          <!-- Important Websites -->
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Important Website</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="https://www.aicte-india.org/">AICTE</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://www.nirfindia.org/Home">NIRF</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://naac.gov.in/">NAAC</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://www.startupindia.gov.in/">Startup India</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://aktu.ac.in/">AKTU</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://bteup.ac.in/">BTEUP</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="https://mic.gov.in/">MOE's Innovation Cell</a></li>
            </ul>
          </div>

          <!-- Contact Info -->
          <div class="col-lg-5 col-md-12">
            <div class="footer-info">
              <h3>Contact</h3>
              <p>
                Buddha Institute of Technology<br />
                CL-1, Sector 7, Gida, Gorakhpur, Uttar Pradesh 273209<br /><br />
                <strong>Phone:</strong> +91 9554559900 | +91 9839621881 | +91 9554322226<br />
                <strong>Email:</strong> director@bit.ac.in<br />
                (Call on all working days between 9:00 am to 5:00 pm)
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/bitgkp525" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/bitgkp" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/bitgorakhpur525/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.youtube.com/@buddhagroupofinstitutionsg5301" class="youtube" target="_blank"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2025 <strong><span>Buddha Institute Of Technology, Gorakhpur</span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits">
        Powered by <a href="#" target="_blank"></a>
      </div> -->
    </div>
  </footer>

</body>
</html>
