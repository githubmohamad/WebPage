<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toturial JavaScript</title>
    <link rel="stylesheet" href="css/stylejs.css">
    <link rel="stylesheet" href="css/all.min.css">
</head>
<body>
    <!-- start sitting box -->
        <div class="sitting-box">
            <div class="iconestyle">
                <i class="fas fa-heart stylejs"></i>
            </div>
            <div class="options-boxs">

                <div class="option-box1">
                    <h3>Colors</h3>
                    <div class="options-colors">
    
                        <span class="active" data-colors="dodgerblue"></span>
                        <span class="" data-colors="violet"></span>
                        <span class="" data-colors="orange"></span>
                        <span class="" data-colors="darkorchid"></span>
                        <span class="" data-colors="#82ccdd"></span>
    
                    </div>
                </div>

                
                <div class="option-box1">
                    <h3>BackGround Rand</h3>
                    <div class="option-yesnoback">
                        <span class="active yes" data-backgroundoptionrand="yes">Yes</span>
                        <span class="no" data-backgroundoptionrand="no">No</span>
                    </div>
                </div>

    
                <div class="option-box1">
                    <h2>Show Bullet</h2>
                    <div class="option-bullet">
                        <span class="active yes" data-hideshowbullet="yes">Yes</span>
                        <span class="no" data-hideshowbullet="no">No</span>
                    </div>
                </div>

                <button class="reset-option">Reset Options</button>
    
            </div>
        </div>
    <!-- end sitting box -->

    <!-- start bullet menu -->
    <div class="nav-bullets">
        <div  class="bullets" data-gosections=".landing">
            <div class="tool-bull">
                Home
            </div>
        </div>
        <div class="bullets" data-gosections=".about">
            <div class="tool-bull">
                About
            </div>
        </div>
        <div class="bullets" data-gosections=".skills-sections">
            <div class="tool-bull">
                Skills
            </div>
        </div>
        <div class="bullets" data-gosections=".gallary">
            <div class="tool-bull">
                Gallary
            </div>
        </div>
        <div class="bullets" data-gosections=".time-lign">
            <div class="tool-bull">
                Time-Line
            </div>
        </div>
        
        <div class="bullets" data-gosections=".ourFeatuers">
            <div class="tool-bull">
                Featuers
            </div>
        </div>

        <div class="bullets" data-gosections=".testemonials">
            <div class="tool-bull">
                Testemonials
            </div>
        </div>
        <div class="bullets" data-gosections=".contact">
            <div class="tool-bull">
                Contact
            </div>
        </div>

    </div>
    <!-- end bullet menu -->

    <!-- start landing page -->
    <div class="landing" style="background-image: url('image/newimage/city-6220689.jpg');">
        <div class="ovar-lay"></div>
        <div class="container-css">
            <div class="header-area">
                <div class="logo">Special <span class="">Design</span> </div>
                <div class="links-container">
                    <ul class="ulmenuheader">
                        <li><a class="active" data-gosections=".landing" href="">Home</a></li>
                        <li><a href="" data-gosections=".about">About</a></li>
                        <li><a href="" data-gosections=".skills-sections">Skills</a></li>
                        <li><a href="" data-gosections=".gallary">Gallary</a></li>
                        <li><a href="" data-gosections=".time-lign">Featuers</a></li>
                        <li><a href="" data-gosections=".testemonials">Tistemonial</a></li>
                        <li><a href="" data-gosections=".contact">Contact us</a></li>
                    </ul>
                    <div class="toggle-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div><!-- commit -->
        <div class="information-text">
            <h1>We Are Creat Agency</h1>
            <p>Lorem ipsum dolor sit amet consectetur 
                adipisicing elit. Obcaecati tempora 
                voluptatibus libero quas rerum mollitia
                sequi totam, beatae hic quis fugiat 
                corrupti unde ad voluptate odio. Autem 
                deserunt in quasi.
            </p>
        </div>
    </div>
    <!-- End landing page -->

    <!-- Start About -->
   <div class="about">
        <div class="container-css">
            <div class="info-about">
                <div class="info-box-about">
                    <h2>About Us</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, 
                        adipisicing elit. At ullam a eos provident quibusdam 
                        quam animi sint, nulla nobis ab possimus doloribus 
                        cumque, fugiat distinctio, itaque optio eum. Vel, 
                        saepe.
                    </p>
                </div>
                <div class="image-box">
                    <img src="about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->
    <!-- start skills -->
    <div class="skills-sections">
        <div class="container-css">
            <h2>Skills</h2>
                <div class="skills">

                    <div class="skill">
                        <h3>Html</h3>
                        <div class="the-progreces">
                            <span style="width: 90%;" data-widthskills="99%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>Css</h3>
                        <div class="the-progreces">
                            <span style="width: 60%;" data-widthskills="55%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>JavaScript</h3>
                        <div class="the-progreces">
                            <span style="width: 50%;" data-widthskills="40%%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>BootStrap</h3>
                        <div class="the-progreces">
                            <span style="width: 49%;" data-widthskills="70%%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <h3>PHP</h3>
                        <div class="the-progreces">
                            <span style="width: 35%;" data-widthskills="85%"></span>
                        </div>
                    </div>

                </div>
        </div>
    </div>
    <!-- end skills -->
    <!-- START GALLARY -->
        <div class="gallary">
            <div class="container-css">
                <h2>Our-Gallary</h2>
                <div class="our-image">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                    <img src="image/backin/3.jpg" alt="">
                </div>
            </div>
        </div>
    <!-- END GALLARY -->

    <!-- start time lign -->
    <div class="time-lign">
        <div class="container-css">
            <div class="time-lign-content">

                <div class="year">2018</div>
                
                <div class="left">
                    <div class="content">
                        <h4>Test Box</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, 
                            adipisicing elit. Maiores quibusdam fugit, totam 
                            deserunt molestias repellat aliquam! Quibusdam, 
                            dolorum. Error officia adipisci aperiam itaque ea 
                            laborum asperiores dolor. Saepe, eveniet nemo!
                        </p>    
                    </div>
                </div>
                <div class="clearFix"></div>
                <div class="right">
                    <div class="content">
                        <h4>Test Box</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, 
                            adipisicing elit. Maiores quibusdam fugit, totam 
                            deserunt molestias repellat aliquam! Quibusdam, 
                            dolorum. Error officia adipisci aperiam itaque ea 
                            laborum asperiores dolor. Saepe, eveniet nemo!
                        </p>    
                    </div>
                </div>
                
                <div class="clearFix"></div>

                <div class="year">2020</div>
                <div class="left">
                    <div class="content">
                        <h4>Test Box</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, 
                            adipisicing elit. Maiores quibusdam fugit, totam 
                            deserunt molestias repellat aliquam! Quibusdam, 
                            dolorum. Error officia adipisci aperiam itaque ea 
                            laborum asperiores dolor. Saepe, eveniet nemo!
                        </p>    
                    </div>
                </div>
                <div class="clearFix"></div>
                <div class="left">
                    <div class="content">
                        <h4>Test Box</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, 
                            adipisicing elit. Maiores quibusdam fugit, totam 
                            deserunt molestias repellat aliquam! Quibusdam, 
                            dolorum. Error officia adipisci aperiam itaque ea 
                            laborum asperiores dolor. Saepe, eveniet nemo!
                        </p>    
                    </div>
                </div>
                <div class="clearFix"></div>
                <div class="year">2022</div>
                <div class="left">
                    <div class="content">
                        <h4>Test Box</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, 
                            adipisicing elit. Maiores quibusdam fugit, totam 
                            deserunt molestias repellat aliquam! Quibusdam, 
                            dolorum. Error officia adipisci aperiam itaque ea 
                            laborum asperiores dolor. Saepe, eveniet nemo!
                        </p>    
                    </div>
                </div>
                <div class="clearFix"></div>
                <div class="right">
                    <div class="content">
                        <h4>Test Box</h4>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, 
                            adipisicing elit. Maiores quibusdam fugit, totam 
                            deserunt molestias repellat aliquam! Quibusdam, 
                            dolorum. Error officia adipisci aperiam itaque ea 
                            laborum asperiores dolor. Saepe, eveniet nemo!
                        </p>    
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end time lign -->

    <!-- start featurs -->
    <div class="ourFeatuers">
        <h2>Our Featuers</h2>
        <div class="container-css">
            <div class="feats-box">

                <div class="feat-box">
                    <i class="fas fa-heart"></i>
                    <h4>Developer</h4>
                    <p>We Make Your WebSite Is Very Vaster</p>
                </div>
    
                <div class="feat-box">
                    <i class="fas fa-heart"></i>
                    <h4>Developer</h4>
                    <p>We Make Your WebSite Is Very Vaster</p>
                </div>
    
                <div class="feat-box">
                    <i class="fas fa-heart"></i>
                    <h4>Developer</h4>
                    <p>We Make Your WebSite Is Very Vaster</p>
                </div>
    
                <div class="feat-box">
                    <i class="fas fa-heart"></i>
                    <h4>Developer</h4>
                    <p>We Make Your WebSite Is Very Vaster</p>
                </div>
    
    
                <div class="feat-box">
                    <i class="fas fa-heart"></i>
                    <h4>Developer</h4>
                    <p>We Make Your WebSite Is Very Vaster</p>
                </div>
    
                <div class="feat-box">
                    <i class="fas fa-heart"></i>
                    <h4>Developer</h4>
                    <p>We Make Your WebSite Is Very Vaster</p>
                </div>
    
            </div>
            <div class="clearFix"></div>
            
        </div>
    </div>
    <!-- end featurs -->

    <!-- start testemonials -->
    <div class="testemonials">
        <h2>Testemonials</h2>
        <div class="container-css">
            <div class="content-testemonial">
                

                <div class="ts-box">
                    <img src="image/avatar/3.jpg" alt="">
                        <h3>Mohamad Yamen</h3>    
                        <P class="name-compa">CIO Company</P>
                        <p class="descrep">
                            Lorem ipsum, dolor sit amet consectetur 
                            adipisicing elit. Voluptatum natus corrupti 
                            eveniet dolores commodi alias quam reprehenderit 
                            mollitia pariatur, error eius recusandae placeat 
                            nobis quae illo maxime animi assumenda.
                        </p>
                </div>

                <div class="ts-box">
                    <img src="image/avatar/4.jpg" alt="">
                        <h3>Mohamad Yamen</h3>
                        <P class="name-compa">CIO Company</P>
                        <p class="descrep">
                            Lorem ipsum, dolor sit amet consectetur 
                            adipisicing elit. Voluptatum natus corrupti 
                            eveniet dolores commodi alias quam reprehenderit 
                            mollitia pariatur, error eius recusandae placeat 
                            nobis quae illo maxime animi assumenda.
                        </p>
                </div>

                <div class="ts-box">
                    <img src="image/avatar/5.jpg" alt="">
                        <h3>Mohamad Yamen</h3>
                        <P class="name-compa">CIO Company</P>
                        <p class="descrep">
                            Lorem ipsum, dolor sit amet consectetur 
                            adipisicing elit. Voluptatum natus corrupti 
                            eveniet dolores commodi alias quam reprehenderit 
                            mollitia pariatur, error eius recusandae placeat 
                            nobis quae illo maxime animi assumenda.
                        </p>
                </div>

            </div>
        </div>
    </div>
    <!-- end testemonials -->

    <!-- start contact us -->
    <div class="contact">
        <div class="ovar-lay"></div>
        <div class="container-css">
            <h2>Cntact Us</h2>

            <div class="contactus-content">
                
                <form method="post" action="" class="form-contact" >
                    
                    <div class="left">
                        <input type="text" name="username"  placeholder="Your Name" id="">
                        <input type="text" name="phone"  placeholder="Your Phone" id="">
                        <input type="email" name="email"  placeholder="Your E-mail" id="">
                        <input type="text" name="Subject"  placeholder="Your Subject" id="">
                    </div>

                    <div class="right">
                        <textarea name="Massage" placeholder="Your Massage" id="" ></textarea>
                        <input type="submit" value="Send">    
                    </div>

                </form>

            </div>

        </div>
    </div>
    <!-- end contact us -->

    <!-- javascript -->
    <script src="js/try.js"></script>
</body>
</html>